<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$attr_val = isset($_POST['attr_val']) ? $_POST['attr_val'] : 0; 
 
	$query = "CALL generalSearch('$attr_val'); "; 
 
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