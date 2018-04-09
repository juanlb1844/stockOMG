<?php 
	include_once 'database.php'; 

	$db = new db(); 

	$nameCat  = $_POST['catName'];
	$nameDesc = $_POST['catDesc'];
	$nameMeta = $_POST['catMeta']; 
	$catParent = $_POST['catParent']; 

   	$query = "INSERT INTO category(name_category, description_category, created_at, meta_description_category, parent_id) 
	VALUES( '$nameCat', '$nameDesc', NOW(), '$nameMeta', $catParent)"; 

	if ($resultado = mysqli_query($db, $query)) {
    		echo 'Creado'; 
   		} else {
   			echo 'Error'; 
   		}
	 mysqli_close($db); 