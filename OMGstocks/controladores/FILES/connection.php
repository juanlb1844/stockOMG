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

	/* $nameFile = 'xxx'; 
	$nameFile = 'xx'; 
	$nomCat[1] = 38458; */ 

	
	$main_img = false; 
	$id_picture = 0; 

	$sql = "SELECT B.main_image_url, A.id_picture FROM product_entity AS A 
	INNER JOIN product_pictures AS B 
		ON A.id_picture = B.idproduct_pictures 
			WHERE A.id_entity = $nomCat[1]"; 
	if ($resultado = mysqli_query($conn, $sql)) {
		    
    		if ($resultado->num_rows > 0) {
			    while($row = $resultado->fetch_assoc()) {
			    	if($row['main_image_url'] == '/users/no-img.jpg') {
			    		$main_img = true; 
			    		$id_picture = $row['id_picture']; 
			    	}
			    }
			} else {
			    echo "0 results";
			}
   		}
	 
	$conn->close();




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
	echo 'conectado'; 
}
					
					$label = explode('.', $nomCat[0]); 
					$sql = ''; 
					if($main_img == true) {
						//$nameFile = $nameFile; 
						$sql = "UPDATE product_pictures SET main_image_url = '$nameFile', medium_image_url = '$nameFile', thumb_image_url = '$nameFile' WHERE idproduct_pictures = $id_picture"; 
					} else {
						$sql = "INSERT INTO product_gall(url, url_min, id_entity) VALUES('$nameFile', '$nameFile', $nomCat[1])"; 
					}
					if ($conn->query($sql) === TRUE) {
					    echo "Success";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
					 
					$conn->close();


?>