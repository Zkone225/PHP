<?php

	require_once("../../models/monument/MonumentModel.php");
	session_start();
	
	//récupération des données postées (inputs du formulaire)
	$email = trim(ucfirst($_POST['nomMonument']));
	$mdp = trim($_POST['arrMonument']);
	$user_type = trim($_POST['adrMonument']);
	

	//on remet les données en variable de session au cas où
	//il y a erreur de saisie de retourner au formulaire avec
	//ces données
	$_SESSION['nomMonument'] = $nomMonument;
	$_SESSION['arrMonument'] = $arrMonument;
	$_SESSION['adrMonument'] = $adrMonument;
	$_SESSION['siteMonument'] = $siteMonument;
	$_SESSION['dateCreation'] = $dateCreation;
	$_SESSION['idTypeMonument'] = $idTypeMonument;
	
	$_SESSION['msg_erreur'] = "";
	
	//controle avant insertion
	if ( empty($email) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Email non renseigné<br>";
	}else{
		if(!filter)
	}
	if ( empty($arrMonument) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Arrondissement non renseigné<br>";
	} else {
		if ( intval($arrMonument) < 1 || intval($arrMonument) > 20 ) {
			$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Arrondissement compris entre 1 et 20<br>";			
		}
	}
	if ( empty($adrMonument) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Adresse non renseignée<br>";
	}
	if ( empty($siteMonument) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Site web non renseigné<br>";
	} else {
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$siteMonument)) {
			$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Adresse du site web invalide<br>";
		}
	}
	if ( empty($dateCreation) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Date non renseignée<br>";
	} 
	if ( intval($idTypeMonument) == 0 ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Type monument non choisi<br>";				
	}

	if ( empty($_SESSION['msg_erreur']) ) {
		
		monument_Insert( $nomMonument, $arrMonument, $adrMonument, $siteMonument, $dateCreation, $idTypeMonument );	

	} 
	Header("Location: ../../views/monument/frmMonumentCreer.php");				
	
?>