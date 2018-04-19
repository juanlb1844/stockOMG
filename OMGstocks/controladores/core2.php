<?php 
 
 class formatData{
 	
 	// INGRAM micro ...  

 	function getDataIngram(){
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
				 	     
		    for($i = 0; $i < 1100; $i++){
				$linea = fgets($fp);
				$linea = utf8_encode($linea); 
				$producto = explode(',', $linea);
				$productosIngram[] = $producto; 
		    }     
		      
			fclose($fp);
			return $productosIngram; 

 	} 

 	 // XML -> CVA webservice juanlb221
 	
	 function getDataXML($url){
 
			$content = file_get_contents($url);  

			$xml = simplexml_load_string($content); 
			$num = 0; 
			foreach($xml->item as $item){
				$items[$num]['marca'] 		      	  = (string) $item->{'marca'}; 
				$items[$num]['clave'] 			  	  = (string) $item->{'clave'}; 
				$items[$num]['garantia'] 	      	  = (string) $item->{'garantia'}; 
				$items[$num]['clase'] 	          	  = (string) $item->{'clase'}; 
				$items[$num]['disponible'] 		  	  = (string) $item->{'disponible'}; 
				$items[$num]['moneda'] 		      	  = (string) $item->{'moneda'}; 
				$items[$num]['imagen'] 		      	  = (string) $item->{'imagen'}; 
				$items[$num]['codigo_fabricante'] 	  = (string) $item->{'codigo_fabricante'}; 
				$items[$num]['grupo'] 	    	  	  = (string) $item->{'grupo'}; 
				$items[$num]['descripcion'] 	  	  = (string) $item->{'descripcion'};
				$items[$num]['precio'] 	  		  	  = (string) $item->{'precio'};
				$items[$num]['disponibleCD'] 	  	  = (string) $item->{'disponibleCD'};
				$items[$num]['tipoCambio'] 	 	      = (string) $item->{'tipocambio'};
				$items[$num]['fechaactualizatipoc']   = (string) $item->{'fechaactualizatipoc'};
				$items[$num]['TotalDescuento']        = (string) $item->{'TotalDescuento'};
				$items[$num]['MonedaDescuento']       = (string) $item->{'MonedaDescuento'};
				$items[$num]['PrecioDescuento']       = (string) $item->{'PrecioDescuento'};
				$items[$num]['MonedaPrecioDescuento'] = (string) $item->{'MonedaPrecioDescuento'};
				$items[$num]['ClavePromocion'] 	 	  = (string) $item->{'ClavePromocion'};
				$items[$num]['DescripcionPromocion']  = (string) $item->{'DescripcionPromocion'};
				$items[$num]['VencimientoPromocion']  = (string) $item->{'VencimientoPromocion'};
				$items[$num]['DisponibleEnPromocion'] = (string) $item->{'DisponibleEnPromocion'};
				$num++; 
			}

			return $items; 
	 }


	 function getDataTechData(){

	 	    ini_set("soap.wsdl_cache_enabled", "0");

	        $ws         = new SoapClient("https://www.techdata.com.mx/WSCatalogo/catalogo.asmx?WSDL");
	        
	        $usuario    = "xml_td@omg.com";
	        $contrasena = '$TDWS123#';
	        
	        $params     = Array("usuario" => $usuario, "pass" => $contrasena);
	        
	        $obtenerCatalogoResult = $ws->obtenerCatalogo($params);

	        $catalogo = $obtenerCatalogoResult->obtenerCatalogoResult;

	        $arrayTechData_products[][] = null; 
	        $num = 0; 

	        foreach ($catalogo as $key => $value) {

	            foreach($value as $k => $v){
	                $arrayTechData_products[$num]['codigo']         = $v->Codigo; 
	                $arrayTechData_products[$num]['partNumber']     = $v->partNumber; 
	                $arrayTechData_products[$num]['descripcion']    = $v->descripcion; 
	                $arrayTechData_products[$num]['stockTotal']     = $v->stockTotal; 
	                $arrayTechData_products[$num]['precio']         = $v->precio; 
	                $arrayTechData_products[$num]['moneda']         = $v->moneda; 
	                $arrayTechData_products[$num]['categoria']      = $v->categoria; 
	                $arrayTechData_products[$num]['fabricante']     = $v->fabricante; 
	                $arrayTechData_products[$num]['MensajeError']   = $v->MensajeError; 
	                $arrayTechData_products[$num]['stockMonterrey'] = $v->stockMonterrey; 
	                $arrayTechData_products[$num]['stockCentral']   = $v->stockCentral; 
	                $num++; 
	            }

            }
	    return $arrayTechData_products; 
	 }  


 }
