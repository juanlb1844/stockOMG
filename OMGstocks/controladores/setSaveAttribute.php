<?php 
	include_once 'database.php'; 

 	$db = new db(); 



 	$nameAttribute = $_POST['nameAttribute']; 	
 	$typeData 	   = $_POST['typeData']; 
 	$defaultData   = $_POST['defaultData'];
 	$idCatSelected = $_POST['idCatSelected']; 

	$query = "CALL createAttribute('$nameAttribute', '$typeData', $idCatSelected)"; 

  	if ($resultado = mysqli_query($db, $query)) {
		if ($resultado->num_rows > 0) {
		    echo 'ejecutado'; 
		} else {
		    echo "error";
		}
		}
    mysqli_close($db);