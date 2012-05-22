<?php
define('BASE_PATH', dirname(realpath(__FILE__)) . '/');
define('VIEW_PATH', BASE_PATH . 'views/');

// Twig
require_once BASE_PATH.'vendors/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(VIEW_PATH);
$twig = new Twig_Environment($loader, array(
				'cache'	=>	BASE_PATH.'cache',
				'debug'	=>	true,
		  'auto_reload'	=>	true,
	 'strict_variables'	=>	true,
		   'autoescape'	=>	true,
		
));

// Use an autoloader...
require BASE_PATH . 'libs/Bootstrap.php';
require BASE_PATH . 'libs/Controller.php';
require BASE_PATH . 'libs/Model.php';
require BASE_PATH . 'libs/View.php';


new Bootstrap();


$view = new View();
$view->render(
		$twig->display('base_template.twig')
	);