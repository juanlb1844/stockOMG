<?php 
	include_once 'database.php'; 

	$db = new db(); 

	$query = "SELECT COUNT(provider_name) as count_providers, provider_name FROM flat_data_products 
				GROUP BY provider_name "; 

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