<?php

	include $_SERVER['DOCUMENT_ROOT'] . "/core/app.class/app.class.php";
	
	global $cimsApp;
	$cimsApp = new CIMS_app;
	
	$cimsApp->setVar("controller", $_GET['c']);
	$cimsApp->setVar("GET", $_GET);
	$cimsApp->setVar("POST", $_POST);
	global $var;
	
	global $cimsUser;
	$cimsApp->loadClass("user");
	$cimsUser = new CIMS_user;
	
	$fileForLoad = $_SERVER['DOCUMENT_ROOT'] . "/controllers/" . $var['controller'] . ".controller.php";
	if(file_exists($fileForLoad)) {
		$cimsApp->loadClass("controller");
		$cimsController = new CIMS_controller();
		$cimsController->m_controller_name = $var['controller'];
		$cimsController->start();
	}
	else {
		$cimsApp->loadClass("controller");
		$cimsController = new CIMS_controller();
		$cimsController->m_controller_name = $cimsApp->getConfig("default_controller");
		$cimsController->start();
	}
	
?>