<?php
$servername = "www.laptopmexico.mx";
$username = "juanlb";
$password = "juanlb221";
$dbname = "store_back";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
	echo 'conectado'; 
}

					$label = explode('.', $nomCat[0]); 
					$sql = "INSERT INTO product_gall(url, url_min, id_entity) VALUES('$nameFile', '$nameFile', $nomCat[1])"; 
					if ($conn->query($sql) === TRUE) {
					    echo "Success";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
					 
					$conn->close();


?>