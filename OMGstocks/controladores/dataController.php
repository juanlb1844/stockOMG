<?php 
   include_once 'modelo.php';  // Inserta datos en la base de datos general ... 
   include_once 'core2.php';    // Trae datos de los webServices ... 
   
   $dbObject = new model(); 
   $object = new formatData(); 


      if( $_POST['type'] == 'search'){
                   $url = $_POST['url']; 
                   echo json_encode( $object->getDataXML($url) ); 
                   //echo $url;

       } if( $_POST['type'] == 'techData'){

                    echo json_encode( $object->getDataTechData() );                    
                    
       } if ( $_POST['type'] == 'zip') {
                    //$dbObject->insertarIngramMicro($object->getDataIngram()); 
                    $dataIngram = $object->getDataIngram(); 
                    foreach ($dataIngram as $key => $value) {
                        //$dataIngram[$key] = str_replace(array('"', '¢'), '', $value);
                        $char = html_entity_decode(preg_replace("/U\+([0-9A-F]{4})/", "&#x\\1;", 'U+FFE0'), ENT_NOQUOTES, 'UTF-8');
                        $dataIngram[$key] = str_replace(array('"', '¢'), '', $value);
                        //$dataIngramF[] = array(eregi_replace("[\n|\r|\n\r]", '', $value[0]); 
                    /*  foreach ($value as $k => $v) {
                       // $value[$k] = eregi_replace("[\n|\r|\n\r]", '', $v);
                        $product[] = trim(str_replace(array('"', '/'), '', eregi_replace("[\n|\r|\n\r]", '', $v)));
                      } */      
                    }   
                    echo (json_encode($dataIngram)); 
       }
       if( $_POST['type'] == 'export'){ 

            $url = $_POST['url']; 
            $WS  = $_POST['WS']; 

            if($WS == 'CVA'){
        	      $dbObject->insertarArray2( $object->getDataXML($url) ); 
                print_r($object->getDataXML($url)); 
            }else if($WS == 'TechData'){
                 //$dbObject->insertarArrayTechData( $object->getDataTechData() ); 
                print_r($object->getDataTechData()); 
            }else if($WS == 'Ingram'){
                 //$dbObject->insertarIngramMicro($object->getDataIngram()); 
                print_r($object->getDataIngram()); 
            }


       }

