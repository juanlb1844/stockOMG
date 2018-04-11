<?php

	include_once 'database.php'; 

	$db = new db(); 
	
	$idCat = $_POST['idCat']; 

	$query = "SELECT CAT.name_category, ATT.name_attribute, ATT.type_value FROM 
	category AS CAT 
		INNER JOIN group_attribute AS GA
			ON CAT.id_category = GA.id_category 
				INNER JOIN attribute AS ATT
					ON GA.id_attribute = ATT.id_attribute  
				WHERE CAT.id_category = $idCat"; 

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