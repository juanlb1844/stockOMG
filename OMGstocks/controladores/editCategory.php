<?php 
	include_once 'database.php'; 

	$db = new db(); 

	$nameCat  = $_POST['catName'];
	$nameDesc = $_POST['catDesc'];
	$nameMeta = $_POST['catMeta']; 
	$catParent = $_POST['catParent']; 

	$query = "UPDATE category SET name_category = '$nameCat', description_category = '$nameDesc', meta_description_category = '$nameMeta' WHERE id_category = $catParent"; 

	if ($resultado = mysqli_query($db, $query)) {
    		echo 'Creado'; 
   		} else {
   			echo $query; 
   		}
	 mysqli_close($db); 