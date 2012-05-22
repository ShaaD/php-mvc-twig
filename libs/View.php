<?php
/**
* Main View Loader
*/
class View
{
	public $loader;
	public $twig;
	public $arg;
	
	function __construct() {
		// $this->loader = new Twig_Loader_Filesystem(VIEW_PATH);
		// $this->twig = new Twig_Environment($this->loader, array(
		// 				'cache'	=>	BASE_PATH.'cache',
		// 				'debug'	=>	true,
		// 		  'auto_reload'	=>	true,
		// 	 'strict_variables'	=>	true,
		// 		   'autoescape'	=>	true,
				
		// ));
	}
	
	public function render($twig, $arg = false) {
		
		if ($arg == true) {
			$this->arg = $arg;
		}
		// require VIEW_PATH . 'header' . '.php';
		// require VIEW_PATH . $name . '.php';
		// require VIEW_PATH . 'footer' . '.php';
		
		// $this->twig->render($name . '.twig');
	}
}