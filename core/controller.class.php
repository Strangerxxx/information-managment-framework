<?php

	class CIMS_controller {
	
		var $m_controller_name;
		
		function start() {
			$controllerFile = $_SERVER['DOCUMENT_ROOT'] . "/controllers/" . $this->m_controller_name . ".controller.php";
			if(file_exists($controllerFile)) {
				include $controllerFile;
			}
			else {
				global $cimsApp;
				print $cimsApp->error(86, $m_controller_name);
			}
		}
		
	}
	
?>