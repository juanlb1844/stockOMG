<?php

	$dataLog = $_POST; 
	$user = $dataLog['user']; 
	$pass = $dataLog['pass']; 
	 if( strlen($user) > 1 ) {
		   if($user == 'admin' && $pass == 'adminltm') {
				session_start(); 
				$_SESSION['loggedIn'] = true; 
				$_SESSION['type'] = 'Administrador'; 
				$_SESSION['name'] = 'Juan López'; 
				//echo $_SESSION['loggedIn'];
				echo '1'; 
		   } else if( $user == 'ventas' && $pass == 'ventasltm' ){ 
		   		session_start(); 
				$_SESSION['loggedIn'] = true; 
				$_SESSION['type'] = 'Editor general'; 
				$_SESSION['name'] = 'Ventas'; 
				//echo $_SESSION['loggedIn'];
				echo '1'; 
		   } else {
		   		echo '0';  
		   }
	 } else {
	 	session_start(); 
	 	$_SESSION['loggedIn'] = false; 
	 	session_destroy();
	 	echo 'cerrador'; 
	 }