<?php 

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
	   
	    print_r( json_encode($arrayTechData_products) ); 