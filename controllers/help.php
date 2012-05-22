<?php
/**
* Help Controoler
*/
class Help extends Controller
{
	public $model;
	public $add;
	
	function __construct() {
		parent::__construct();
		require BASE_PATH.'models/help_model.php';
		$this->model = new Help_Model();
	}
	
	public function index() {
		// $this->view->render('help/index');
		$this->view->render('help/help');
	}
	
	public function other($arg = false) {
		echo 'INSIDE OTHER';
		$this->view->add = $this->model->add();
		return $this->view->add;
	}
}