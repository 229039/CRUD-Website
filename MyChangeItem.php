<HTML>
    <HEAD> <link rel='stylesheet' href='styles.css'></HEAD><BODY>";
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")	//Check it is coming from a form
    {
        require_once 'login.php';				//mysql credentials

	    //delcare PHP variables
	    $game_id = $_POST["game_id"];
	    $game = $_POST["game"];			//The values in the $_POST must match the names given from the HTML document
	    $genre = $_POST["genre"];
	    
        $mysqli = new mysqli($host, $username, $password, $dbname);
        if ($mysqli->connect_error) 
            {
		        die('Error : ('. $mysqli->connect_error .') '. $mysqli->connect_error);
	        }   
        if ($_POST['game']!= "")
            {
                
		$statement = $mysqli->prepare("UPDATE videogame SET game=?, genre=? WHERE game_id = ?"); //prepare sql insert query - thank you(https://stackoverflow.com/questions/6514649/php-mysql-bind-param-how-to-prepare-statement-for-update-query)
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('ssi', $genre, $game, $game_id); //bind value
		if($statement->execute())
			{
				//print output text
				echo nl2br("You have updated the List");
			}
			else{
					print $mysqli->error; //show mysql error if any 
				}
                
            }
    }
echo"<br><form action= 'MyUpdate.php' method = 'get'>";
echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form></body>";
?>