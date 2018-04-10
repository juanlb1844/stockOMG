<?php

require 'vendor/autoload.php';

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
}


