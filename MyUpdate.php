<HTML>
    <head></head>
    <body>
<?php
//update_delete.php
if ($_GET['action'] == 'Go Back') 
    {
             //action for No
        header('Location: Videogames.html');
        exit;   
    }
else
    {
        echo $game_id;
        echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD>";
    
        require_once 'login.php';
        $conn = new mysqli($host, $username, $password, $dbname);
            if ($conn->connect_error) 
            {
             die("Connection failed: " . $conn->connect_error);
            }

	
        $sql = "SELECT * FROM videogame WHERE game_id='" . $_POST['update'] . "'";
        $result = $conn->query($sql);

        $game_id = $row[0];
        $game = $row[1];
        $genre = $row[2];
        
        if ($result->num_rows > 0)//will only do this if there is something to be returned from the above line
	        {
                while($row = $result->fetch_assoc())
		            {
                        // HTML to display the form on this page.
                        echo"Edit the information for".$row['game'].".";
	                    echo "<TABLE><TR><TH>Game ID</TH><TH>Game</TH><TH>Class</TH><TH>Genre</TH></TR><TABLE>";
                        echo "<TR>";
	                    echo "<TD>".$row['game_id']. "</TD><TD>". $row['game']. "</TD><TD>". $row['genre']. "</TD>";
	                    echo "<form action='MyChangeItem.php' method = 'post'>";
	                    echo "<TR><TD><input type='text' name = game_id value=".$row['game_id']." genre='field left' readonly></TD>";
                        echo "<TD><input type='text' placeholder='game' name='game' genre='advancedSearchTextBox'></TD>";
                        echo "<TD><select id='select' name='game'>";
                        echo "<option value='FPS' >FPS</option>";
                        echo "<option value='Platformer' >Platformer</option>";
                        echo "<option value='Sports' >Sports</option>";
                        echo "<option value='Rhythmic' >Rhythmic</option>";
                        echo "<option value='RPG' >RPG</option>";
                        echo "<input name = 'create' type = 'submit' value = 'Submit Changes'>";
                        echo "</form>";
                    } 
                 echo "</body>";   
	        }
    }
?>
</HTML>