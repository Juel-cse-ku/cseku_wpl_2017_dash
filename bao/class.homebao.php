<?php

include_once '/../util/class.util.php';
include_once '/../dao/class.homedao.php';


/*
	Dash Business Object 
*/
Class DashBAO{

	private $_DB;
	private $_DashDAO;

	function DashBAO(){

		$this->_DashDAO = new DashDAO();

	}

	//get all Dashs value
	public function getDashName(){

		$Result = new Result();	
		$Result = $this->_DashDAO->getDashName();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in DashDAO.getDashName()");		

		return $Result;
	}

	

}

echo '<br> log:: exit the class.homebao.php';

?>