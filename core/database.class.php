<?php

	class CIMS_database {
	
		var $m_host;
		var $m_user;
		var $m_password;
		
		function start( $iDBName ) {
			if(!mysql_connect($this->m_host, $this->m_user, $this->m_password)) {
				global $cimsApp;
				$cimsApp->error(182, $this->m_host);
				exit;
			}
			mysql_select_db($iDBName) or die($cimsApp->error(214, $iDBName));
		}
		
		function request( $iSQLRequest )
		{
			global $cimsApp;
			$req = mysql_query($iSQLRequest) or die($cimsApp->error(246, $iSQLRequest));
			return $req;
			mysql_close($req);
		}
	}
	
?>