<?php
/**
* Login Controller
*/
class Login extends Controller
{
	
	function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->render('login/login');
	}
}