<?php

$ds          = DIRECTORY_SEPARATOR;  //1
$cat = $_FILES['idCat']['name'];
//mkdir("/media/d".$cat, 0700);
$storeFolder = '../../media';   //2 
 
 $actionDb = 'gallery'; 

if (!empty($_FILES)) {
    $oldName = $_FILES['file']['name']; 
    $nomCat = explode(':', $oldName); 
	/* */
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring .= $characters[rand(0, strlen($characters))];
    } 
    $nameFile = $randstring.$nomCat[1].'.jpg';
   	$_FILES['file']['name'] =  $nameFile;  //3     
   	/* */


    $tempFile = $_FILES['file']['tmp_name'];      
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
	include 'connection.php'; 
}

function RandomString() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring = $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}

?>     