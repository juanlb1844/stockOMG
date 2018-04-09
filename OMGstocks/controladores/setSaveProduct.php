<?php 
	include_once 'database.php'; 

 	$db = new db(); 
	$query = "UPDATE entity_value_text 
				SET text_value = '$description'
				  WHERE product_entity_id= $idProd 
  					AND name_attribute = 'short_description';"; 
  	if ($resultado = mysqli_query($db, $query)) {
	    //printf("La selección devolvió %d filas.\n", mysqli_num_rows($resultado));
	    //echo mysqli_num_rows($resultado); 
		if ($resultado->num_rows > 0) {
		    echo 'ejecutado'; 
		} else {
		    echo "error";
		}
		}
    mysqli_close($db);