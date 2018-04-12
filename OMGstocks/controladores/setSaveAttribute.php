<?php 
	include_once 'database.php'; 

 	$db = new db(); 

 	$nameAttribute = $_POST['nameAttribute']; 	
 	$typeData 	   = $_POST['typeData']; 
 	$defaultData   = $_POST['defaultData'];
 	$idCatSelected = $_POST['idCatSelected']; 
 	$idAttr		   = $_POST['idAttr']; 

	$query = "CALL createAttribute('$nameAttribute', '$typeData', $idCatSelected, '$defaultData', $idAttr)"; 

  	if ($resultado = mysqli_query($db, $query)) {
			if ($resultado->num_rows > 0) {
			    echo 'ejecutado'; 
			} else {
			    echo "error";
			}
		}
	echo $query; 

    mysqli_close($db);