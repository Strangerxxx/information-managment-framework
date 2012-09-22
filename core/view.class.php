<?php

	class CIMS_view {
	
		var $m_view_name;
		
		function start() {
			$viewFile = $_SERVER['DOCUMENT_ROOT'] . "/views/" . $this->m_view_name . "/view.php";
			if(file_exists($viewFile)) {
				include $viewFile;
			}
			else {
				global $cimsApp;
				print $cimsApp->error(150, $this->m_view_name);
			}
		}
		
	}
	
?>