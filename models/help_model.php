<?php
/**
* Help Model
*/
class Help_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
		echo 'Help Model';
	}
	
	public function add() {
		
		return 10 + 10;
	}
}