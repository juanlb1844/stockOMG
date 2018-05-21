<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$parent = isset($_POST['parent']) ? $_POST['parent'] : 0; 

	$query = "SELECT * FROM category WHERE parent_id = $parent"; 

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