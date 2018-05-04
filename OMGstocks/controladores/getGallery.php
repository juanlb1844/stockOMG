<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$idProd = isset($_POST['idProd']) ? $_POST['idProd'] : 0; 

	$query = "SELECT B.url, B.id_gallery FROM product_entity A 
	INNER JOIN product_gall B 
		ON A.id_entity = B.id_entity 
			WHERE A.id_entity = $idProd"; 

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