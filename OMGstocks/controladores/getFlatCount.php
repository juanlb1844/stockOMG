<?php 
	include_once 'database.php'; 

	$db = new db(); 

	$type = $_POST['type']; 

	if( $type == 'flat') {
		$query = "SELECT COUNT(provider_name) as count_providers, provider_name FROM flat_data_products 
					GROUP BY provider_name "; 
	} else if( $type  == 'related') {
		$query = "SELECT COUNT(A.id_distributor) AS cant_entities, A.id_distributor AS provider_id, B.distributor_name AS provider_name FROM product_entity AS A 
					INNER JOIN distributor AS B  
						ON A.id_distributor = B.id_distributor
							GROUP BY B.id_distributor"; 
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