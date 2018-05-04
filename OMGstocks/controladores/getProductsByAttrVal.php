<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$attributeName = isset($_POST['attributeName']) ? $_POST['attributeName'] : 0; 
	$attributeVal = isset($_POST['attributeVal']) ? $_POST['attributeVal'] : 0; 

 
	$query = "CALL getProductByAttrVal('$attributeName', '$attributeVal')"; 
 
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