<?php

	class CIMS_model {
	
		var $m_model_name;
		
		function start() {
			$modelFile = $_SERVER['DOCUMENT_ROOT'] . "/models/" . $this->m_model_name . ".model.php";
			if(file_exists($modelFile)) {
				global $cimsApp;
				$cimsApp->loadClass("database");
				#include $_SERVER['DOCUMENT_ROOT'] . "/core/database.class/database.class.php";
				global $cimsDB;
				global $cimsApp;
				$cimsDB = new CIMS_database;
				$cimsDB->m_host = $cimsApp->getConfig("mysql_host");
				$cimsDB->m_user = $cimsApp->getConfig("mysql_user");
				$cimsDB->m_password = $cimsApp->getConfig("mysql_password");
				include $modelFile;
			}
			else {
				global $cimsApp;
				$cimsApp->error(118, $this->m_model_name);
			}
		}
		
	}
	
?>