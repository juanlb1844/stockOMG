<?php 
	include_once 'database.php'; 


	$productData = $_POST['dataProduct']; 

	echo count( $productData ); 

	foreach ($productData as $key => $value) {
		$db = new db();  
		$valueAttr = $value['localValue']; 
		$typeAttr  = $value['type_attr']; 
		$idAttr    = $value['ID']; 

		if($typeAttr == "short_description"){
				$query = "UPDATE entity_value_text SET text_value = '$valueAttr' WHERE name_attribute = '$typeAttr' AND product_entity_id = $idAttr"; 
		} else {
				$query = "UPDATE entity_value_varchar SET varchar_value = '$valueAttr' WHERE name_attribute = '$typeAttr' AND product_entity_id = $idAttr";
		}

		if ($resultado = mysqli_query($db, $query)) {
    		echo "UPDATED"; 
   		}else {
   			echo "ERROR FATAL ALV"; 
   		}

	    mysqli_close($db); 

	}