<?php 
	include_once 'database.php'; 

 		$db = new db(); 
 		$idProd = $_POST['idProd'];  
 		$idProd = intval($idProd); 
		$query = "CALL getProductById($idProd)"; 

			if ($resultado = mysqli_query($db, $query)) {
		    
    		if ($resultado->num_rows > 0) {
			    while($row = $resultado->fetch_assoc()) {
			    	$rows[] = $row;
			    }
			} else {
			    echo "sin resultados";
			    echo $query; 
			}
			echo json_encode($rows); 
   		}
	    mysqli_close($db); 