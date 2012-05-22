<?php
/**
* Error Controller
*/
class Error extends Controller
{
	
	function __construct() {
		parent::__construct();
	}
	
	public function index() {
		// $this->view->render('error/index');
		$this->view->render('error/error');
	}
}