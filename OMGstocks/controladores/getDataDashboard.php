<?php 
	include_once 'database.php'; 


	$db = new db(); 
 	
 	$type = $_POST['type']; 

 	if( $type == 'cant_products' ) {
			$query = "SELECT DIS.id_distributor, COUNT(E.id_entity) as CANT, DIS.`distributor_name` FROM product_entity E
			RIGHT JOIN distributor DIS  
				ON E.`id_distributor` = DIS.`id_distributor`
			GROUP BY id_distributor"; 
 	} else {
		$query = " SELECT E.`id_entity`, E.`flag_status`, COUNT(E.`id_entity`) AS CANT FROM product_entity AS E
					GROUP BY flag_status "; 
 	}

 
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