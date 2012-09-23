<?php

	include $_SERVER['DOCUMENT_ROOT'] . "/core/app.class.php";
	
	global $cimsApp;
	$cimsApp = new CIMS_app;
	
	$cimsApp->setVar("authError", "null");
	
	$cimsApp->setVar("GET", $_GET);
	$cimsApp->setVar("POST", $_POST);
	global $var;
	
	$post_data = $cimsApp->getVar("POST");
	switch($post_data['mode']) {
		case "auth":
			global $cimsApp;
			$cimsApp->loadClass("model");
			global $cimsModel;
			$cimsModel = new CIMS_model;
			$cimsModel->m_model_name = "admin";
			$cimsModel->start();
			$authResult = authAdmin($post_data['email'], $post_data['password']);
			switch($authResult) {
				case true:
					global $cimsApp;
					print "<script type=\"text/javascript\">document.location.href = 'admin.php'</script>";
					$cimsApp->setVar("login", getLoginAdmin());
					break;
				case false:
					global $cimsApp;
					$cimsApp->setVar("authError", "Не&nbsp;удалось авторизоваться. Возможно, введен неверный email или&nbsp;пароль.");
					break;
			}
			break;
	}
	
	$cimsApp->loadClass("admin");
	$cimsAdmin = new CIMS_admin;
	$adminAuth = $cimsAdmin->authCheck();
	
	switch($adminAuth) {
		case true:
			global $cimsApp;
			$get_data = $cimsApp->getVar("GET");
			$currentPage = $get_data['view'];
			$cimsAdmin->loadPage($currentPage);
			break;
		case false:
			global $cimsApp;
			$cimsApp->loadClass("view");
			$cimsView = new CIMS_view;
			$cimsView->m_view_name = "main/admin/auth";
			$cimsView->start();
			break;
	}

?>