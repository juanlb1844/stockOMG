<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$brandName = isset($_POST['brandName']) ? $_POST['brandName'] : 0; 
 
	$query = "CALL productByBrand('$brandName');"; 
 
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