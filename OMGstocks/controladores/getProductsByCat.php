<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$idCat = isset($_POST['idCat']) ? $_POST['idCat'] : 0; 
 
	$query = "CALL productByCat($idCat);"; 
 
	if ($resultado = mysqli_query($db, $query)) {
    	if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
			    $rows[] = $row;
			  }
			} else {
			    echo "sin datos";
			    return; 
			}
			print_r( json_encode($rows) );
   		}
	 mysqli_close($db); 