<?php

	function authAdmin( $iEmail, $iPassword ) {
		global $cimsApp;
		global $cimsDB;
		$password = md5($iPassword);
		$cimsDB->start($cimsApp->getConfig("mysql_db"));
		$request = "SELECT COUNT(*) FROM `users` WHERE `email` = '$iEmail' AND `password` = '$password'";
		$reqResult = $cimsDB->request($request);
		$CountUsers = mysql_fetch_row($reqResult);
		if($CountUsers>0){
			setcookie("auth_cache", $row['password'], time()+3600);
			global $cimsApp;
			global $userLogin;
			$cimsApp->setVar("login", $row['login']);
			return true;
		}
	}
	
	function getLoginAdmin() {
		global $cimsApp;
		global $cimsDB;
		$cimsDB->start($cimsApp->getConfig("mysql_db"));
		$request = "SELECT * FROM `users` WHERE `password` = '" . $_COOKIE['auth_cache'] . "'";
		$reqResult = $cimsDB->request($request);
		while($row = mysql_fetch_array($reqResult, MYSQL_ASSOC)) {
			return $row['login'];
		}
	}
	
?>