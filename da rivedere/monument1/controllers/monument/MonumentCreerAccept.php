<?php

	require_once("../../models/monument/MonumentModel.php");
	session_start();
	
	// recupération des données postées
	$nomMonument = trim(ucfirst($_POST['nomMonument']));
	$arrMonument = trim($_POST['arrMonument']);
	$adrMonument = trim($_POST['adrMonument']);
	$siteMonument = trim($_POST['siteMonument']);
	$dateCreation = trim($_POST['dateCreation']);
	$idTypeMonument = $_POST['idTypeMonument'];
	
	// on remet les données postées en variables de session au cas où il y a erreur dans la saisie,
	//on retourne au formulaire avec tout en affichant la donnée saisie
	$_SESSION['nomMonument'] = $nomMonument;
	$_SESSION['arrMonument'] = $arrMonument;
	$_SESSION['adrMonument'] = $adrMonument;
	$_SESSION['siteMonument'] = $siteMonument;
	$_SESSION['dateCreation'] = $dateCreation;
	$_SESSION['idTypeMonument'] = $idTypeMonument;
	
	$_SESSION['msg_erreur'] = "";
	// $_SESSION['msg_ok'] = $ok;
	
	//controle avant insertion
	if ( empty($nomMonument) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Nom monument non renseigné<br>";
	}
	if ( empty($arrMonument) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Arrondissement non renseigné<br>";
	} else {
		if ( intval($arrMonument) < 0 || intval($arrMonument) > 20 ) {
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
		
		monument_Insert( $nomMonument, $arrMonument, $adrMonument, $siteMonument, date_format($dateCreation), $idTypeMonument );
		// $_SESSION['msg_ok'] = 	$ok . "Saisies bien enregistrées";	

	} 
	Header("Location: ../../views/monument/frmMonumentCreer.php");	
			
	
?>