<?php 
	include_once 'database.php'; 

	$idRelateds = $_POST['idRelateds']; 
	$productData = $_POST['dataProduct']; 
	$idCats = isset($_POST['selectedCats']) ? $_POST['selectedCats'] : null; 
	$idProd = $_POST['idProd']; 
	$attrStatus = $_POST['attrStatus']; 
	$idER = $_POST['idER'];
	$main_img_product = $_POST['mainImg']; 
	
	// Crear una nueva entidad | (ER) entidad real 
		if($attrStatus == 'origen') {
				$db = new db();  
				$queryNew = "CALL create_product(4, 'nn', 'nn', 1, '..', '0000', 1,  'nn', 'nn', '$main_img_product', 'nn', '..', '..', 'Pesos', 'revision', 'RR');";  

				if( $resultado = mysqli_query($db, $queryNew) ) {
					//echo 'nuevo producto creado'; 
					if ($resultado->num_rows > 0) {
						while($row = $resultado->fetch_assoc()) { 
							$idProd = $row['id_product'];  
						} 
					}
				} else {
					//echo 'CONFLICTO EN SQL:: '.$query; 
				}
				mysqli_close($db);  
				//echo '..........';
		}
			
	if( count($idCats) > 0 ) {
		$db = new db();  

		// Reiniciar relación con categorías 
		$query = "DELETE FROM category_has_entity WHERE product_entity_id = $idProd"; 
		if( $resultado = mysqli_query($db, $query) ) {
			//echo 'EJECUTADO'; 
		} else {
			//echo 'CONFLICTO EN SQL:: '.$query; 
		}
		mysqli_close($db);  

		// Asignar nuevas categorías 
		foreach ($idCats as $k => $value) {
					$db = new db();  

					$query = "INSERT INTO category_has_entity(category_id_categories, product_entity_id) VALUES($value, $idProd); ";

					if ($resultado = mysqli_query($db, $query)) {
			    		//echo "UPDATED::"; 
			   		}else {
			   			//echo "ERROR FATAL ALV::".$query; 
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
							    		//echo '_EJECUTADO_'; 
							    	} else {
							    		//echo '_PROBLEMA_'; 
							    		//echo $query; 
							    	}
							    	mysqli_close($db2);  
						    	}

						    }
						} else {
						    //echo "0 results";
						}
						//echo json_encode($rows); 
			   		}
			   	mysqli_close($db); 
		}
	  // Si se han borrado las relaciones de categorías 
	} else {
		//echo 'nada'; 
		$db = new db();  
		$query = "DELETE FROM category_has_entity WHERE product_entity_id = $idProd"; 
		if( $resultado = mysqli_query($db, $query) ) {
			//echo 'EJECUTADO'; 
		} else {
			//echo 'CONFLICTO EN SQL:: '.$query; 
		}
		mysqli_close($db); 
	}


	// Guardar atributos del producto 
	foreach ($productData as $key => $value) {
		$typeAttr  = $value['type_attr']; 
		if( $typeAttr != 'distributor' ) {
				$db = new db();  
				$idAttr    = $value['ID']; 
				try {
					$valueAttr = isset($value['localValue']) ? $value['localValue'] : ''; 
				} catch (Exception $e) {
					$valueAttr = ''; 
				}

				if($typeAttr == "short_description"){
						$query = "UPDATE entity_value_text SET text_value = '$valueAttr' WHERE name_attribute = '$typeAttr' AND product_entity_id = $idProd"; 
				} else if($typeAttr == 'description') {
						$query = "UPDATE entity_value_text SET text_value = '$valueAttr' WHERE name_attribute = '$typeAttr' AND product_entity_id = $idProd"; 
				} else {
						$query = "UPDATE entity_value_varchar SET varchar_value = '$valueAttr' WHERE name_attribute = '$typeAttr' AND product_entity_id = $idProd";
				}

				if ($resultado = mysqli_query($db, $query)) {
		    		//echo "UPDATED"; 
		   		}else {
		   			//echo "ERROR FATAL ALV"; 
		   		}

			    mysqli_close($db); 
		}
	}

	// Cambiar FLAG_STATUS & IDER
	foreach ($idRelateds as $ke => $val) {

		$db = new db(); 
		$sql_to_group = "UPDATE product_entity SET flag_status = 'revision' 
							WHERE id_entity = $val"; 
		if ($resultado = mysqli_query($db, $sql_to_group)) {
		    //echo "UPDATED"; 
		} else {
		   	//echo "ERROR FATAL ALV"; 
		}

		mysqli_close($db); 


 		/* cambiar el IDER en entity_value_varchar */ 

		$db = new db(); 
		$sql_to_ider = "UPDATE entity_value_varchar SET varchar_value = '$idER' 
							WHERE product_entity_id = '$val' AND 
							name_attribute = 'EntityID'"; 
		if ($resultado = mysqli_query($db, $sql_to_ider)) {
		    //echo "UPDATED"; 
		} else {
		   	//echo "ERROR FATAL ALV"; 
		}

		mysqli_close($db); 

	}

echo $idProd; 