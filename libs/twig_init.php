<?php
require_once BASE_PATH.'vendors/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(BASE_PATH.'views/');
$twig = new Twig_Environment($loader, array(
				'cache'	=>	BASE_PATH.'cache',
				'debug'	=>	true,
		'auto_reload'	=>	true,
	'strict_variables'	=>	true,
		'autoescape'	=>	true,
		
));