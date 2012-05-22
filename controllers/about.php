<?php
/**
* About Controller
*/
class About extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function index() {
		$this->view->render('about/about');
	}
}