<HTML>
	<head></head><body>
<?php
//MyDelete.php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {//Check it is coming from a form
		//mysql credentials
	require_once 'login.php';
	
	$item = $_POST["delete"];
	
	$conn = new mysqli($host, $username, $password, $dbname);
	if ($conn->connect_error) 
		{
    		die("Connection failed: " . $conn->connect_error);
		}
	
	$sql = "Delete FROM videogame WHERE game_id='" . $_POST['delete'] . "'";
	$result = $conn->query($sql);
	echo"Game ID #".$item." has been deleted.";	
	echo"<br><form action= 'MyUpdate.php' method = 'get'>";
	echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form>";
	}
else{
    echo ("error");
    }         
?>
</body>
</HTML>