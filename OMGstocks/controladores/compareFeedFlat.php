<?php 
	include_once 'database.php'; 

	$db = new db(); 

	$query = "SELECT * FROM flat_data_products AS A 
				LEFT JOIN entity_value_varchar AS B 
					ON A.sku = B.varchar_value 
						WHERE B.varchar_value IS NULL"; 

	if ($resultado = mysqli_query($db, $query)) {
    	if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
			    $rows[] = $row;
			  }
			} else {
			    echo "sin resultados";
			    return; 
			}
			print_r( json_encode($rows) );
   		}
	 mysqli_close($db); 