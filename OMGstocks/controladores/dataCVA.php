<?php 
  

  			$url = 'https://www.grupocva.com/catalogo_clientes_xml/lista_precios.xml?cliente=236&marca=HP&grupo=ACCESORIOS%&clave=%&codigo=%&tc=1&promos=1&porcentaje=0&promos=1&porcentaje=0'; 
 
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

			print_r( json_encode( $items ) );
