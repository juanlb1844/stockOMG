<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$idCat = isset($_POST['idCat']) ? $_POST['idCat'] : 0; 

	if( $idCat == 0 ) {
	   	$query = "SELECT name_category, id_category, parent_id  
	   				FROM category ORDER BY parent_id"; 
	} else {
		$query = "SELECT name_category, id_category, parent_id, description_category, meta_description_category
	   				FROM category WHERE id_category = $idCat ORDER BY parent_id"; 
	}

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