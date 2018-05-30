<?php
//MyRead.php
require_once 'login.php';
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM videogame WHERE genre='".$_POST['Genre2'] . "'";
//$sql = "SELECT * FROM videogame WHERE genre='Platformer'";
$result = $conn->query($sql);

$game_id = $row[0];
$game = $row[1];
$genre = $row[2];

// HTML to display the form on this page.
echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD><BODY>";
echo nl2br("<H2>Here Are The Games You Finished</H2>");

if ($result->num_rows > 0)//will only do this if there is something to be returned from the above line
	{	echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD>";
		echo "<TABLE><TR><TH>Game ID</TH><TH>Game Name</TH><TH>Genre</TH></TR>";
		// Iterate through all of the returned images, placing them in a table for easy viewing
	while($row = $result->fetch_assoc())
		{
			// The following few lines store information from specific cells in the data about an image
			echo "<TR>";
			echo "<TD>".$row['game_id']. "</TD><TD>". $row['game']. "</TD><TD>".$row['genre'] ."</TD>";
			echo "<TD><form action= 'MyUpdate.php' method = 'post'>";
			echo "<button name = 'update'   type = 'submit' value =".$row['game_id'].">Edit</button></FORM>";
			echo "<TD><form action= 'MyDelete.php' method = 'post'>";
			echo "<button name = 'delete' type = 'submit' value =".$row['game_id'].">Delete</button></FORM>";
			echo "</TR>";
		}
	echo "</TABLE>";
	}
	else{
		echo "<br> 0 results";
		}
echo"<br><form action= 'MyUpdate.php' method = 'get'>";
echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form>";
echo '</body>';

?>