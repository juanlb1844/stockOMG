<?php 
	include_once 'database.php'; 

	$db = new db(); 

	$query = "SELECT * FROM `entity_value_varchar` WHERE name_attribute = 'marca' GROUP BY varchar_value"; 

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