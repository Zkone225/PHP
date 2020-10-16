<?php
	
	
	session_start();
	
	session_destroy();
	
	Header("Location: ../../views/utilisateur/frmLogin.php");
	
?>