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
			$cimsApp->loadClass("view");
			$cimsViewHeader = new CIMS_view;
			$cimsViewHeader->m_view_name = "main/admin/header";
			$cimsViewBody = new CIMS_view;
			$cimsViewBody->m_view_name = "main/admin/body";
			switch($iPage) {
				case "logout":
					ob_clean();
					setcookie("auth_cache", "");
					print "<script type=\"text/javascript\">document.location.href = 'admin.php'</script>";
					break;
				default:
					$cimsApp->setVar("adminPageTitle", "Главная страница");
					$cimsApp->setVar("adminPageBody", "Здеся че-то будет.");
					break;
			}
			$cimsViewHeader->start();
			$cimsViewBody->start();
		}
		
	}
	
?>