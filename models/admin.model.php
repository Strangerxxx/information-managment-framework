<?php

	function authAdmin( $iEmail, $iPassword ) {
		global $cimsApp;
		global $cimsDB;
		$password = md5($iPassword);
		$cimsDB->start($cimsApp->getConfig("mysql_db"));
		$request = "SELECT * FROM `users` WHERE `email` = '$iEmail' LIKE `password` = '$password'";
		$reqResult = $cimsDB->request($request);
		$countUsers = mysql_num_rows($reqResult);
		while($row = mysql_fetch_array($reqResult, MYSQL_ASSOC)) {
			switch($countUsers) {
				case 1:
					setcookie("auth_cache", $row['password'], time()+3600);
					global $cimsApp;
					global $userLogin;
					print $row[0]['login'];
					$cimsApp->setVar("login", $row['login']);
					flush();
					return true;
					break;
				default:
					return false;
			}
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