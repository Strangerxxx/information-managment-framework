<?php

	class CIMS_admin {
		
		function authCheck() {
			if(isset($_COOKIE['auth_cache'])) {
				return true;
			}
			else {
				return false;
			}
		}
		
		function loadPage( $iPage ) {
			global $cimsApp;
			print "<html>\n";
			$cimsApp->loadClass("view");
			$cimsViewHeader = new CIMS_view;
			$cimsViewHeader->m_view_name = "main/admin/header";
			$cimsViewHeader->start();
			$cimsViewBody = new CIMS_view;
			$cimsViewBody->m_view_name = "main/admin/body";
			$cimsViewBody->start();
		}
		
	}
	
?>