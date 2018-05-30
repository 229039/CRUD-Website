<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {//Check it is coming from a form
    
echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD>";

		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "joseluissantiago";
    $mysql_password = "Gl0bz69thTem";
    $mysql_database = "Videogames";
	
	//delcare PHP variables
	
	$Game = $_POST["Game"];
	$Genre = $_POST["Genre"];
	
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
	
		$statement = $mysqli->prepare("INSERT INTO videogame (Game, Genre) VALUES(?, ?)"); //prepare sql insert query
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('ss', $Game, $Genre); //bind value
		if($statement->execute())
			{
				//print output text
				echo nl2br("Good Job on Finishing" . $Game, false);
				echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form>";
			}
			else{
					print $mysqli->error; //show mysql error if any 
				}

         }
else{
    echo ("error");
    }         
?>