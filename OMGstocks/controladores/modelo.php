<?php 
 
 include_once 'database.php'; 

 class model{

	function borrarTabla(){
 		$bd = new db();
		mysqli_query($bd,"DELETE FROM items");
		echo "echo"; 
		mysql_close($db); 
	}

	function selectData($array){
		$db = new db(); 
		if ($resultado = mysqli_query($bd, "SELECT * FROM items")) {
		    printf("La selección devolvió %d filas.\n", mysqli_num_rows($resultado));
		    mysqli_free_result($resultado);
   		}
	    mysql_close($db); 
	}

	function restartDb() {
		$db = new db(); 
		$query = "CALL restartDb()"; 
		if ($resultado = mysqli_query($db, $query)) {
			echo $resultado; 
		}
		mysqli_close($db); 
	}

    function editProduct($idProd, $description) {
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
    }

	function getViewClient() {
		$db = new db(); 
		/*$query = 'SELECT product_entity_id, name_attribute, varchar_value FROM entity_value_varchar WHERE EXISTS 
				  (SELECT product_entity_id FROM product_entity AS ENTITY 
				   INNER JOIN entity_value_varchar VCHAR 
				   ON ENTITY.`id_entity` = VCHAR.`product_entity_id`)
					 UNION 
				   SELECT product_entity_id, name_attribute, varchar_value FROM entity_value_varchar WHERE EXISTS 
 				   ( SELECT product_entity_id FROM product_entity AS ENTITY 
				   INNER JOIN entity_value_varchar VCHAR 
				   ON ENTITY.`id_entity` = VCHAR.`product_entity_id`)
					AND 
   					product_entity_id = ( SELECT id_entity FROM product_entity ORDER BY id_entity DESC LIMIT 1 )';*/ 

   		/* con imagen */ 
   		/* 
		SELECT * FROM ( 
			(SELECT varchar_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
						  FROM entity_value_varchar AS A1) 
			 UNION 
			 ( SELECT picture.main_image_url AS value_attr, 'main_img' AS type_attr, entity.id_entity AS ID 
				FROM product_entity AS entity
					LEFT JOIN product_pictures AS picture  
					ON entity.id_picture = picture.idproduct_pictures)
			 UNION 
			(SELECT text_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
						  FROM entity_value_text AS A2)
			 UNION 
			(SELECT DIS.distributor_name AS value_attr, 'distributor' AS type_attr, E.id_entity AS ID FROM 
						   product_entity AS E INNER JOIN distributor AS DIS
						   ON E.id_distributor = DIS.id_distributor) 
				) AS S1 ORDER BY ID ASC

       /* by user - cat  */ /* 
	SELECT cns.name_user, enti.id_entity, cns.name_category FROM 
     (SELECT cat.id_category AS id_cat, user.id_user, user.name_user, cat.name_category FROM USER AS USER 
	INNER JOIN category_has_user AS user_cat
		ON user.id_user = user_cat.id_user
			INNER JOIN category AS cat 
				ON user_cat.id_category = cat.id_category WHERE user.id_user = 1) AS cns 
	INNER JOIN category_has_entity AS cat_has_ent 
		ON cns.id_cat = cat_has_ent.category_id_categories 
	INNER JOIN product_entity AS enti
		ON cat_has_ent.product_entity_id = enti.id_entity
   		*/ 

   		$query = "SELECT * FROM ( (SELECT varchar_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
				  FROM entity_value_varchar AS A1) 
				UNION 
				( SELECT text_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
				  FROM entity_value_text AS A2 )
				UNION 
				( SELECT DIS.distributor_name AS value_attr, 'distributor' AS type_attr, E.id_entity AS ID FROM 
				   product_entity AS E INNER JOIN distributor AS DIS
				   ON E.`id_distributor` = DIS.`id_distributor`) ) AS S1 ORDER BY ID ASC "; 

		if ($resultado = mysqli_query($db, $query)) {
		    //printf("La selección devolvió %d filas.\n", mysqli_num_rows($resultado));
		    //echo mysqli_num_rows($resultado); 
    		if ($resultado->num_rows > 0) {
			    while($row = $resultado->fetch_assoc()) {
			    	$rows[] = $row;
			    }
			} else {
			    echo "0 results";
			}
			echo json_encode($rows); 
		    //mysqli_free_result($resultado);
   		}
	    mysqli_close($db); 
	}


  // Obtener producto por ID para la vista 

	function showProduct($idProd) {
		
		$db = new db(); 

		$query = "SELECT * FROM ( 
			(SELECT varchar_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
						  FROM entity_value_varchar AS A1) 
			 UNION 
			 ( SELECT picture.main_image_url AS value_attr, 'main_img' AS type_attr, entity.id_entity AS ID 
				FROM product_entity AS entity
					LEFT JOIN product_pictures AS picture  
					ON entity.id_picture = picture.idproduct_pictures)
			 UNION 
			(SELECT text_value AS value_attr, name_attribute AS type_attr, product_entity_id AS ID 
						  FROM entity_value_text AS A2)
			 UNION 
			(SELECT DIS.distributor_name AS value_attr, 'distributor' AS type_attr, E.id_entity AS ID FROM 
						   product_entity AS E INNER JOIN distributor AS DIS
						   ON E.id_distributor = DIS.id_distributor) 
				) AS S1 WHERE ID = $idProd"; 
			if ($resultado = mysqli_query($db, $query)) {
		    
    		if ($resultado->num_rows > 0) {
			    while($row = $resultado->fetch_assoc()) {
			    	$rows[] = $row;
			    }
			} else {
			    echo "0 results";
			}
			echo json_encode($rows); 
   		}
	    mysqli_close($db); 

	}

	// Ingram micro [ mandar llamar el procedimiento alamacenado para insertar los productos ]

	function insertarIngramMicro($array){
			foreach ($array as $key => $value) {
				$db = new db(); 
		 		$clase 	     	 =  $value['0'];   	 $sku 	 		 =  $value['1']; 
				$d3 		     =  $value['2'];   	 $proveedor      =  $value['3']; 
				$nombreProducto  =  $value['4'];   	 $modelo  	     =  $value['5']; 
				$d6 		 	 =  $value['6'];   	 $vpn	     	 =  $value['7']; 
				$d8      		 =	$value['8'];   	 $d9    		 =  $value['9'];
				$d10  			 =  $value['10'];    $d11    		 =  $value['11'];
				$d12    		 =  $value['12'];    $d13   		 =  $value['13'];
				$precio   		 =  $value['14']; 	 $d15    		 =  $value['15'];
				$d16    		 =  $value['16']; 	 $d17    		 =  $value['17'];
				$d18    		 =  $value['18'];	 $d19    		 =  $value['19'];
				$d20    		 =  $value['20'];	 $d21    		 =  $value['21'];
				$d22    		 =  $value['22'];	 $d23    	 	 =  $value['23'];
				$d24    		 =  $value['24'];	 $inStock   	 =  $value['25'];

				$query = "CALL create_product(3,'$nombreProducto', '$sku', $precio, '$nombreProducto', '$vpn', $inStock, '$proveedor', '$clase', 'media/users/no-img.jpg', 'origen');";   

			    mysqli_query($db, $query);
		 		mysqli_close($db); 
			} 		
		echo 'Ingram Micro | Importado'; 
	}

	// Tech Data [ mandar llamar procedimiento almacenado para crear productos ]
		function insertarArrayTechData($array){
			foreach ($array as $key => $value) {
				$db = new db();   
		 		$codigo 	     = $value['codigo']; 
				$partNumber 	 = $value['partNumber']; 
		 		$descripcion     = $value['descripcion']; 
				$stockTotal      = $value['stockTotal']; 
				$precio  	     = $value['precio']; 
				$moneda 		 = $value['moneda']; 
				$categoria	     = $value['categoria']; 
				$fabricante      = $value['fabricante'];
				$MensajeError    = $value['MensajeError'];
				$stockMonterrey  = $value['stockMonterrey'];
				$stockCentral    = $value['stockCentral'];
				$query = "CALL create_product(2,'$descripcion', '$codigo', $precio, '$descripcion', '$partNumber', $stockTotal, '$fabricante', '$categoria', 'users/no-img.jpg', 'origen');";   
			    mysqli_query($db, $query);
		 		mysqli_close($db); 		 	
			}  
		echo 'Tech Data Importado'; 
	}

	// CVA [ mandar llamar procedimiento almacenado para crear producto ] CALL__create_product

	function insertarArray2($array){
		$interations = 0;  
		foreach ($array as $key => $value) {
		$db = new db(); 
			$interations++; 
			 		$marca 	    = $value['marca']; 
					$clave 	    = $value['clave']; 
			 		$garantia   = $value['garantia']; 
					$clase      = $value['clase']; 
					$disponible = $value['disponible']; 
					$moneda 	= $value['moneda']; 
					$imagen	    = $value['imagen']; 
					$codigo_fabricante = $value['codigo_fabricante'];
					$grupo = $value['grupo'];
					$descripcion = $value['descripcion'];
					$precio = $value['precio'];
					$disponibleCD = $value['disponibleCD'];
					$tipoCambio = $value['tipoCambio'];
					$fechaactualizatipoc = $value['fechaactualizatipoc'];
					$TotalDescuento = $value['TotalDescuento'];
					$MonedaDescuento = $value['MonedaDescuento'];
					$PrecioDescuento = $value['PrecioDescuento'];
					$MonedaPrecioDescuento = $value['MonedaPrecioDescuento'];
					$ClavePromocion = $value['ClavePromocion'];
					$DescripcionPromocion = $value['DescripcionPromocion'];
					$VencimientoPromocion = $value['VencimientoPromocion'];
					$DisponibleEnPromocion = $value['DisponibleEnPromocion'];

					$query = "CALL create_product(1,'$descripcion', '$codigo_fabricante', $precio, '$descripcion', '0000', $disponible, '$marca', '$grupo', '$imagen', 'origen');";  
				    if( mysqli_query($db, $query) ) 
				    	echo '1'; 
				    else 
				    	echo '0'; 
				    echo $query; 
				    $query = ''; 
				    $db->close();
		}
		//mysql_close($db);
		echo $query.$interations;   
	}




	function insertarArray($array){
		$db = new db(); 
		$query = 'INSERT INTO Items (marca, clave, garantia, clase, disponible, moneda, imagen, codigo_fabricante, grupo, descripcion)  
		VALUES '.$this->stringInsert($array);  
		print_r($query); 
		mysqli_query($db, $query);
		mysql_close($db); 
	}

	function stringInsert2($array){
		$string = '('; 
		foreach ($array as $key => $value) {
		 	foreach ($value as $k => $v) {
		 		if($k == 'DisponibleEnPromocion'){
			 		$string .= '"'. $v .'" '; 
			 		echo ".", PHP_EOL; 
		 		}else{
		 			$string .= '"'. $v .'",'; 
			 		echo ".", PHP_EOL; 
		 		}
		 	}
		  $string .= '),('; 
		 }
		$string = substr($string, 0, count($string) - 3); 
		return $string;
	}

	function stringInsert($array){
		$string = '('; 
		foreach ($array as $key => $value) {
		 	foreach ($value as $k => $v) {
		 		if($k == 'descripcion'){
			 		$string .= '"'. $v .'" '; 
			 		echo ".", PHP_EOL; 
		 		}else{
		 			$string .= '"'. $v .'",'; 
			 		echo ".", PHP_EOL; 
		 		}
		 	}
		  $string .= '),('; 
		 }
		$string = substr($string, 0, count($string) - 3); 
		return $string;
	}

 // Reiniciar tabla para productos FLAT 

 function restartFlat ($idProvider) {
				$db = new db();
				$query = "DELETE FROM flat_data_products WHERE provider_id = $idProvider";   
			    mysqli_query($db, $query);
		 		mysqli_close($db); 		 	
 }


// [[[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]]]]]]]
// [[[[[[[[[[[[[[[[[[[[[              ]]]]]]]]]]]]]]]]]]]]]
// [[[[[[[[[[[[[[[   ____INSERT FLAT____   ]]]]]]]]]]]]]]]
// [[[[[[[[[[[[[[[[[[[[[[          ]]]]]]]]]]]]]]]]]]]]]]]
// [[[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]]]]]]]

// INSERT FROM FLAT  

function flatToRelated_CVA($param) {
    $db = new db(); 
    // Obtener productos de CVA del FLAT 
	$query = "SELECT * FROM flat_data_products WHERE provider_id = 1 "; 

	if ($resultado = mysqli_query($db, $query)) {
    	if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
			    //$rows[] = $row;
			    //$query = "CALL create_product(1,'$descripcion', '$codigo_fabricante', $precio, '$descripcion', '0000', $disponible, '$marca', '$grupo', '$imagen');";  
			   	$codigo = $row['sku']; 
			   	$name_product = $row['name_product']; 
			   	$precio = $row['precio']; 
			   	$short_description = $row['short_description']; 
			   	$long_description = $row['long_description']; 
			   	$stock = $row['stock']; 
			   	$marca = $row['fabricante']; 
			   	$grupo = $row['grupo']; 
			   	$imagen = $row['imagen'];
			   	$part_number = $row['numero_parte'];  
			   	$upc = $row['upc'];  
			   	$moneda = $row['moneda'];  
			   	if(strlen($upc) < 1) $upc = '0000'; 
			   	$db2 = new db(); 
			   	$query2 = "CALL create_product(1, '$name_product', '$codigo', $precio, '$short_description', '$upc', $stock,  '$marca', '$grupo', '$imagen', '$part_number', '$long_description', '..', '$moneda', 'origen');";  
			   	if ( mysqli_query($db2, $query2) ) 
			   			echo $codigo; 
			  }
			} else {
			    echo "0 results";
			}
			//print_r( json_encode($rows) );
   		}
	 mysqli_close($db); 
}


// CVA [[ NSERT ]]

function insertarCVAFlat($array){
		$interations = 0;  
		foreach ($array as $key => $value) {
		$db = new db(); 
			$interations++; 
			 		$marca 	    = $value['marca']; 
					$clave 	    = $value['clave']; 
					$disponible = $value['disponible']; 
					$codigo_fabricante = $value['codigo_fabricante'];
					$precio = $value['precio'];
					$descripcion = $value['descripcion'];
					$grupo = $value['grupo'];
					$imagen = $value['imagen'];
					$ft = $value['ficha_tecnica'];
					$fc = $value['ficha_comercial'];
					$garantia = $value['garantia'];
					$upc = $value['upc'];
					$moneda = $value['moneda'];

					$query = "INSERT INTO flat_data_products(sku, name_product, grupo, provider_name, provider_id, stock, fabricante, precio, imagen, short_description, long_description, garantia, upc, numero_parte, moneda) 
								VALUES('$clave', '$descripcion', '$grupo','CVA', 1, $disponible, '$marca', $precio, '$imagen', '$ft', '$fc', '$garantia', '$upc', '$codigo_fabricante', '$moneda')";   
				    if( mysqli_query($db, $query) ) 
				    	echo '1'; 
				    else 
				    	echo '0'; 
				    echo $query; 
				    $query = ''; 
				    $db->close();
		}
		echo 'CVA | Flat'; 
	}


// Tech Data FLAT [[ INSERT ]]

 function techDataFlat ($array){
	$query = ''; 
	foreach ($array as $key => $value) {
			$db = new db();   
	 		$partNumber 	 = $value['partNumber']; 
			$stockTotal      = $value['stockTotal']; 
			$precio  	     = $value['precio']; 
			$fabricante      = $value['fabricante'];
			$nameProduct     = $value['descripcion'];
			$categoria       = $value['categoria'];
			$sku 			 = $value['codigo']; 
			$query = "INSERT INTO flat_data_products(sku, name_product, grupo, provider_name, provider_id, stock, fabricante, precio, imagen, numero_parte) 
								VALUES('$sku', '$nameProduct', '$categoria', 'Tech Data', 2, $stockTotal, '$fabricante', $precio, '/users/no-img.jpg', '$partNumber');";   
		    mysqli_query($db, $query);
	 		mysqli_close($db); 		 	
		}  
	echo $query;  
 } 

 function flatToRelated_TechData() {
 	    $db = new db(); 
    // Obtener productos de CVA del FLAT 
	$query = "SELECT * FROM flat_data_products WHERE provider_id = 2 "; 

	if ($resultado = mysqli_query($db, $query)) {
    	if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
			    //$rows[] = $row;
			    //$query = "CALL create_product(1,'$descripcion', '$codigo_fabricante', $precio, '$descripcion', '0000', $disponible, '$marca', '$grupo', '$imagen');";  
			   	$codigo = $row['sku']; 
			   	$name_product = $row['name_product']; 
			   	$precio = $row['precio']; 
			   	$short_description = $row['short_description']; 
			   	$stock = $row['stock']; 
			   	$marca = $row['fabricante']; 
			   	$grupo = $row['grupo']; 
			   	$imagen = $row['imagen']; 
			   	$part_number = $row['numero_parte']; 
			   	$db2 = new db();  
			   	$query2 = "CALL create_product(2, '$name_product', '$codigo', $precio, '..', '0000', $stock,  '$marca', '$grupo', '$imagen', '$part_number', '..', '..', 'Pesos', 'origen');";  
			   	if ( mysqli_query($db2, $query2) ) 
			   			echo $codigo; 
			  }
			} else {
			    echo "0 results";
			}
			//print_r( json_encode($rows) );
   		}
	 mysqli_close($db); 
 }






 //  Ingram Micro [[ INSERT ]]
	function insertarIngramMicroFlat($array){ 
			foreach ($array as $key => $value) {
				$db = new db(); 
		 		$clase 	     	 =  $value['0'];   	 $sku 	 		 =  $value['1']; 
				$d3 		     =  $value['2'];   	 $proveedor      =  $value['3']; 
				$nombreProducto  =  $value['4'];   	 $modelo  	     =  $value['5']; 
				$d6 		 	 =  $value['6'];   	 $vpn	     	 =  $value['7']; 
				$d8      		 =	$value['8'];   	 $d9    		 =  $value['9'];
				$d10  			 =  $value['10'];    $d11    		 =  $value['11'];
				$d12    		 =  $value['12'];    $d13   		 =  $value['13'];
				$precio   		 =  $value['14']; 	 $d15    		 =  $value['15'];
				$d16    		 =  $value['16']; 	 $d17    		 =  $value['17'];
				$d18    		 =  $value['18'];	 $d19    		 =  $value['19'];
				$d20    		 =  $value['20'];	 $d21    		 =  $value['21'];
				$d22    		 =  $value['22'];	 $d23    	 	 =  $value['23'];
				$d24    		 =  $value['24'];	 $inStock   	 =  $value['25'];
				$description = $nombreProducto .' '. $modelo; 
				$query = "INSERT INTO flat_data_products(sku, name_product, grupo, upc, provider_name, provider_id, stock, fabricante, precio, imagen, numero_parte, modelo, short_description, long_description)
							VALUES('$sku', '$nombreProducto', '$d19', '$d9', 'Ingram Micro', 3, $inStock, '$proveedor', $precio, '/users/no-img.jpg', '$vpn', '$modelo', '$description', '$description')";    

				mysqli_query($db, $query);
				mysqli_close($db); 
			} 		
		echo $query; 
	}



// FLAT TO RELATED [[ Ingram Micro ]]

 function flatToRelated_Ingram() {
 	$db = new db(); 
    // Obtener productos de CVA del FLAT 
	$query = "SELECT * FROM flat_data_products WHERE provider_id = 3 "; 

	if ($resultado = mysqli_query($db, $query)) {
    	if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
			    //$rows[] = $row;
			    //$query = "CALL create_product(1,'$descripcion', '$codigo_fabricante', $precio, '$descripcion', '0000', $disponible, '$marca', '$grupo', '$imagen');";  
			   	$codigo = $row['sku']; 
			   	$name_product = $row['name_product']; 
			   	$precio = $row['precio']; 
			   	$short_description = $row['short_description']; 
			   	$long_description = $row['long_description']; 
			   	$stock = $row['stock']; 
			   	$marca = $row['fabricante']; 
			   	$grupo = $row['grupo']; 
			   	$imagen = $row['imagen']; 
			   	$modelo = $row['modelo']; 
			   	$upc    = $row['upc']; 
			   	$part_number = $row['numero_parte']; 
			   	$db2 = new db(); 
			   	$query2 = "CALL create_product(3, '$name_product', '$codigo', $precio, '$short_description', '$upc', $stock,  '$marca', '$grupo', '$imagen', '$part_number', '$long_description', '$modelo', 'Pesos', 'origen');";  
			   	if ( mysqli_query($db2, $query2) ) 
			   			echo $codigo; 
			  }
			} else {
			    echo "0 results";
			}
			//print_r( json_encode($rows) );
   		}
	 mysqli_close($db); 
 }

}
