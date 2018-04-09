<?php 

	// Descargar ... 
		//$url = 'ftp://E2WS54:Me286a@ftpsecure.ingrammicro.com/FUSION/MX/NB162U/PRICE.zip'; 
		$url = 'ftp://E2WS54:Me286a@PartnerReports.ingrammicro.com/FUSION/MX/NB162U/PRICE.zip'; 
		//ftp://UserID:password@PartnerReports.ingrammicro.com/FUSION/ 
		$source = file_get_contents($url);
		file_put_contents(getcwd().'/PRICE.zip', $source); 

		//echo 'Descargado';

		// Descomprimir ... 
			$zip = new ZipArchive;
			if ($zip->open('PRICE.zip') === TRUE) {
			    $zip->extractTo(getcwd());
			    $zip->close();
			    //echo 'ok';
			} else {
			    echo 'failed';
			}


			chmod('PRICE.TXT', 0755); 
			$productosIngram = array(); 
			$fp = fopen("PRICE.TXT", "r");

			$inc = 0; 

			/* 
		    while ( $linea = fgets($fp) ) {
		    	$linea = fgets($fp);
				$linea = utf8_encode($linea); 
				$producto = explode(',', $linea);
				$productosIngram[] = $producto; 
		    }  */ 
		     
				  
				 	     
		    for($i = 0; $i < 500; $i++){
				$linea = fgets($fp);
				$linea = utf8_encode($linea); 
				$producto = explode(',', $linea);
				$productosIngram[] = $producto; 
		    }     
		      
			fclose($fp);

			print_r( json_encode($productosIngram) ); 