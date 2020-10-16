<?php
	
	require_once("../../models/utilisateur/utilisateurModel.php");
	session_start();
	
	$_SESSION['listeUtilisateur'] = utilisateur_findAll();
	
	Header("Location: ../../views/utilisateur/ListerUtilisateur.php");
	
?>