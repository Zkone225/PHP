<?php
	
	require_once("../../models/utilisateur/UtilisateurModel.php");
	session_start();
	
	
	$_SESSION['durée'] = time();
	if(time()>($_SESSION['durée']+1800){
	
	
	Header("Location: monument/authentification.php");
	}
	
?>