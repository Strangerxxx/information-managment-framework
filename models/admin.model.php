<?php

	function authAdmin( $iEmail, $iPassword ) {
		global $cimsApp;
		global $cimsDB;
		$cimsDB->start($cimsApp->getConfig("mysql_db"));
		$request = "SELECT * FROM `users` WHERE `email` = '$iEmail' LIKE `password` = '$iPassword'";
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
					$newAuthCache = md5(time() + rand(1, time()));
					$request = "UPDATE `users` SET `password` = '$newAuthCache' WHERE `email` = '$iEmail'";
					$reqResult = $cimsDB->request($request);
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