<?php 
	include_once 'database.php'; 

	$idRelateds = $_POST['idRelateds']; 
	$productData = $_POST['dataProduct']; 
	$idCats = isset($_POST['selectedCats']) ? $_POST['selectedCats'] : null; 
	$idProd = $_POST['idProd']; 
	if( count($idCats) > 0 ) {

		$db = new db();  
		// Reiniciar relación con categorías 
		$query = "DELETE FROM category_has_entity WHERE product_entity_id = $idProd"; 
		if( $resultado = mysqli_query($db, $query) ) {
			echo 'EJECUTADO'; 
		} else {
			echo 'CONFLICTO EN SQL:: '.$query; 
		}
		mysqli_close($db);  

		// Asignar nuevas categorías 
		foreach ($idCats as $k => $value) {
					$db = new db();  

					$query = "INSERT INTO category_has_entity(category_id_categories, product_entity_id) VALUES($value, $idProd); ";

					if ($resultado = mysqli_query($db, $query)) {
			    		echo "UPDATED::"; 
			   		}else {
			   			echo "ERROR FATAL ALV::".$query; 
			   		}
				    mysqli_close($db); 

				    // OBTENER ATRIBUTOS FALTANTES POR CATEGORÍA 
				    $db = new db();  
					$query = "CALL getRelationAttrs($value, $idProd)"; 
					if ($resultado = mysqli_query($db, $query)) {
			    		if ($resultado->num_rows > 0) {
						    while($row = $resultado->fetch_assoc()) {
						    	$rows[] = $row;
						    	$attr_name = $row['name_attribute']; 
						    	if( $attr_name != 'main_img' && $attr_name != 'distributor' ) {
							    	// INSERTAR NUEVO ATTRIBUTO EN EL PRODUCTO ( PARA QUE PUEDA SER LEIDO )
							    	$db2 = new db();  
							    	$query = "INSERT INTO entity_value_varchar(varchar_value, product_entity_id, name_attribute) VALUES('CREADO', $idProd, '$attr_name');"; 
							    	if( $resNewAttr = mysqli_query($db2, $query) ) {
							    		echo '_EJECUTADO_'; 
							    	} else {
							    		echo '_PROBLEMA_'; 
							    		echo $query; 
							    	}
							    	mysqli_close($db2);  
						    	}

						    }
						} else {
						    echo "0 results";
						}
						//echo json_encode($rows); 
			   		}
			   	mysqli_close($db); 
		}
	  // Si se han borrado las relaciones de categorías 
	} else {
		echo 'nada'; 
		$db = new db();  
		$query = "DELETE FROM category_has_entity WHERE product_entity_id = $idProd"; 
		if( $resultado = mysqli_query($db, $query) ) {
			echo 'EJECUTADO'; 
		} else {
			echo 'CONFLICTO EN SQL:: '.$query; 
		}
		mysqli_close($db); 
	}


	// Guardar atributos del producto 
	foreach ($productData as $key => $value) {
		$typeAttr  = $value['type_attr']; 
		if( $typeAttr != 'distributor' ) {
				$db = new db();  
				$valueAttr = $value['localValue']; 
				$idAttr    = $value['ID']; 

				if($typeAttr == "short_description"){
						$query = "UPDATE entity_value_text SET text_value = '$valueAttr' WHERE name_attribute = '$typeAttr' AND product_entity_id = $idAttr"; 
				} else if($typeAttr == 'description') {
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
	}

	// Crear Grupos 

	foreach ($idRelateds as $ke => $val) {
		$db = new db(); 
		$sql_to_group = "UPDATE entity_value_varchar SET varchar_value = '2' WHERE name_attribute = 'meta_product' AND product_entity_id = $val"; 
		if ($resultado = mysqli_query($db, $sql_to_group)) {
		    echo "UPDATED"; 
		} else {
		   	echo "ERROR FATAL ALV"; 
		}

		mysqli_close($db); 
	}