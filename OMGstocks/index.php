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
  case 'home':
    $values = array(
      'seo' => array(
        'title' => 'Home page',
      ),
      'person' => array(
        'name' => 'Romain'
      )
    );
    echo $twig->render('content.html.twig', $values);
    break;
    default: 
    echo 'mensaje'; 
}


