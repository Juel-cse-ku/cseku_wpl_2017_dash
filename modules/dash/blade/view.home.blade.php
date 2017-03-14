<?php

include_once '/../../../util/class.util.php';
include_once '/../../../bao/class.homebao.php';


$_DashBAO = new DashBAO();
$_DB = DBUtil::getInstance();

/* saving a new DashBD account*/
if(isset($_POST['save'])){
	$Dash = new Dash();
	$Dash->setID(Util::getGUID());
	if(isset ($_POST['txtCat']))
	{
		$Dash->setName($_POST['txtCat']);
	}
}



echo '<br> log:: exit blade.home.php';

?>