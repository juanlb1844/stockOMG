<?php 
	include_once 'database.php'; 

	$db = new db(); 

	$idCategory = $_POST['idCat'];  

   	$query = "DELETE FROM category WHERE id_category = $idCategory"; 

	if ($resultado = mysqli_query($db, $query)) {
    		echo $resultado; 
   		} else {
   			echo 'ha ocurrudo algún problema'; 
   		}
	 mysqli_close($db); 