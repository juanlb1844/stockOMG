<?php 
	include_once 'database.php'; 

	$db = new db(); 
		 
   	$query = "SELECT name_category, id_category, parent_id  
   				FROM category ORDER BY parent_id"; 

	if ($resultado = mysqli_query($db, $query)) {
    	if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
			    $rows[] = $row;
			  }
			} else {
			    echo "0 results";
			}
			print_r( json_encode($rows) );
   		}
	 mysqli_close($db); 