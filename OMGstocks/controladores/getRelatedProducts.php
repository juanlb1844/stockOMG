<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$attrSKU = isset($_POST['sku']) ? $_POST['sku'] : ''; 
	$attrUPC = isset($_POST['upc']) ? $_POST['upc'] : ''; 
	$attrNP = isset($_POST['np']) ? $_POST['np'] : ''; 
	$attrModel = isset($_POST['model']) ? $_POST['model'] : ''; 
	$attrMeta = isset($_POST['meta']) ? $_POST['meta'] : ''; 
 	
	$query = "CALL getRelatedProducts('$attrSKU', '$attrUPC', '$attrNP', '$attrModel', '$attrMeta')"; 
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