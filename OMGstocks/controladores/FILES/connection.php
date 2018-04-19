<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
	echo 'conectado'; 
}

					$label = explode('.', $nomCat[0]); 
					$sql = "INSERT INTO prueba(prueba) VALUES('xx')"; 
					if ($conn->query($sql) === TRUE) {
					    echo "Success";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
					 
					$conn->close();


?>