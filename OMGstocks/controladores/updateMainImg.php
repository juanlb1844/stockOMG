<?php 
	include_once 'database.php'; 

	$db = new db(); 
	
	$idMainPic = isset($_POST['idMainPic']) ? $_POST['idMainPic'] : 0; 
	$to_main_url = isset($_POST['toMainUrl']) ? $_POST['toMainUrl'] : 0; 
	$to_main_id = isset($_POST['toMainId']) ? $_POST['toMainId'] : 0; 


	// obtener id Main_Picture  
	$id_picture_main = null; 
	$url_picture_main = null; 

	$query = "SELECT B.idproduct_pictures, B.main_image_url FROM product_entity AS A 
	INNER JOIN product_pictures AS B 
		ON A.id_picture = B.idproduct_pictures 
			WHERE A.id_entity = $idMainPic"; 
	if ($resultado = mysqli_query($db, $query)) {
    	if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
			    $id_picture_main = $row['idproduct_pictures']; 
			    $url_picture_main = $row['main_image_url']; 
			  }
			} else {
			    echo "0 results";
			    return; 
			}
   		}
	 mysqli_close($db); 

	 // reemplazar MAIN_IMG_CURRENTLY 
	 $db = new db(); 

	 $query = "UPDATE product_pictures SET main_image_url = '$to_main_url' 
	 	WHERE idproduct_pictures = $id_picture_main"; 

	 echo $query; 

	if ($resultado = mysqli_query($db, $query)) {
    		echo 'editado'; 
   		} else {
   			echo 'poblemas'; 
   		}
	 mysqli_close($db); 

	 // reubicar MAIN_IMG_CURRENTLY 

	 	 // reemplazar MAIN_IMG_CURRENTLY 
	 $db = new db(); 

	 $query = "UPDATE product_gall SET url = '$url_picture_main' 
	 	WHERE id_gallery = $to_main_id"; 

	 echo $query; 

	if ($resultado = mysqli_query($db, $query)) {
    		echo 'editado'; 
   		} else {
   			echo 'poblemas'; 
   		}
	 mysqli_close($db); 
