<?php 
	include_once 'database.php'; 
		$rows = null; 
 		$db = new db(); 
 		$idProd = $_POST['idProd'];  
		$query = "SELECT category_id_categories FROM product_entity INNER JOIN category_has_entity  ON product_entity.id_entity = category_has_entity.product_entity_id WHERE id_entity = $idProd"; 
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