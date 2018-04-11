<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$idCat = isset($_POST['idCat']) ? $_POST['idCat'] : 0; 

	$query = "SELECT id_attribute, name_attribute, type_value FROM attribute;"; 

	if ($resultado = mysqli_query($db, $query)) {
    	if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
			    $rows[] = $row;
			  }
			} else {
			    echo "0 results";
			}
			print_r( json_encode($rows) );
   		}
	 mysqli_close($db); 