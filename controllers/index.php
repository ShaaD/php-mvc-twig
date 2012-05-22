<?php
/**
* Index Controller
*/
class Index extends Controller
{
	
	function __construct() {
		parent::__construct();
	}
	
	public function index() {
		echo 'Inside INDEXXX INDEXXX';
		$this->view->render('index/index');
	}
	
	public function details() {
		echo 'Inside Index Details';
		$this->view->render('index/index');
	}
}