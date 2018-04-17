<?php 
	include_once 'database.php'; 

	$db = new db(); 

	$idAttr  = $_POST['idAttr'];
	$nameAttr = $_POST['nameAttr']; 
	$dataAttr = $_POST['dataAttr'];  
	$defaultAttr = $_POST['defaultAttr']; 

	$query = "UPDATE attribute SET name_attribute = '$nameAttr', type_value = '$dataAttr',
  default_value = '$defaultAttr' WHERE id_attribute = $idAttr"; 

  echo $query; 

	if ($resultado = mysqli_query($db, $query)) {
    		echo 'Editado';  
   		} else {
   			echo $query; 
   		}
	 mysqli_close($db); 