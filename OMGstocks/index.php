<?php

require 'vendor/autoload.php';

date_default_timezone_set('America/Mazatlan');
  session_start();

  $autentication = ( isset($_SESSION['loggedIn']) ) ? true  : false; 

  if( !$autentication ) {
    header('location: ./login.html'); 
  }


// Routing.
$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

// Template rendering.
$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader, array(
  'cache' => __DIR__ . '/cache',
  //'cache' => FALSE,
  'debug' => TRUE
));

$twig->addGlobal('current_page', $page);

switch ($page) {
  case 'dashboard':
    $values = array(
      'seo' => array(
        'title' => 'STOCKS | DASHBOARD',
      ),
      'person' => array(
        'name' => 'Romain'
      )
    );
    echo $twig->render('content.html.twig', $values);
    break;
  case 'configuracion': 
    echo $twig->render('configuracion.html.twig'); 
    break; 
  case 'feedLocal':
    echo $twig->render('feedLocal.html.twig'); 
  break; 
  case 'proveedores': 
    echo $twig->render('proveedores.html.twig'); 
  break;
  case 'producto': 
    echo $twig->render('producto.html.twig'); 
  break;  
  case 'grupos_atributos': 
    echo $twig->render('gruposAtributos.html.twig'); 
  break;   
  case 'upload_files': 
    echo $twig->render('uploadFiles.html.twig'); 
  break; 
   case 'web-services': 
    echo $twig->render('web-services.html.twig'); 
  break; 
  case 'usuarios': 
    echo $twig->render('usuarios.html.twig'); 
  break; 
}


