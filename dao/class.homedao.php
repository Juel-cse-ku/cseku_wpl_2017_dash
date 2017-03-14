<?php
// write dao object for each class
include_once '/../common/class.common.php';
include_once '/../util/class.util.php';

Class DashDAO{

	private $_DB;
	private $_Dash;

	function DashDAO(){

		$this->_DB = DBUtil::getInstance();
		$this->_Dash = new Dash();

	}

	// get all the Dashs from the database using the database query
	public function getDashName(){

		$DashNameList = array();

		$this->_DB->doQuery("SELECT * FROM tbl_role");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_Dash = new Dash();

		    $this->_Dash->setID ( $row['ID']);
		    $this->_Dash->setName( $row['Name'] );


		    $DashNameList[]=$this->_Dash;
   
		}

		//todo: LOG util with level of log


		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($DashNameList);

		return $Result;
	}/*

	//create Dash funtion with the Dash object
	public function createDash($Dash){

		$ID=$Dash->getID();
		$Name=$Dash->getName();


		$SQL = "INSERT INTO tbl_Dash(ID,Name) VALUES('$ID','$Name')";

		$SQL = $this->_DB->doQuery($SQL);		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
	}

	//read an Dash object based on its id form Dash object
	public function readDash($Dash){
		
		
		$SQL = "SELECT * FROM tbl_Dash WHERE ID='".$Dash->getID()."'";
		$this->_DB->doQuery($SQL);

		//reading the top row for this Dash from the database
		$row = $this->_DB->getTopRow();

		$this->_Dash = new Dash();

		//preparing the Dash object
	    $this->_Dash->setID ( $row['ID']);
	    $this->_Dash->setName( $row['Name'] );



	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_Dash);

		return $Result;
	}

	//update an Dash object based on its 
	public function updateDash($Dash){

		$SQL = "UPDATE tbl_Dash SET Name='".$Dash->getName()."' WHERE ID='".$Dash->getID()."'";


		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}

	//delete an Dash based on its id of the database
	public function deleteDash($Dash){


		$SQL = "DELETE from tbl_Dash where ID ='".$Dash->getID()."'";
	
		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}*/

}

echo '<br> log:: exit the class.homedao.php';

?>