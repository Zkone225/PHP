<?php


	require_once("../../models/monument/MonumentModel.php");
	session_start();

	//récupération de l'id de type monument à chercher
	$id = $_GET['idMonument'];
	$traitement = $_GET['traitement'];

	$_SESSION['idMonument'] = $id;
	//récupération du monument
	$monument = monument_find( $id );
	
	//on passe $Monument en variable de session
	$_SESSION['monument'] = $monument;
	
	if ( $traitement == 1 ) {
		Header("Location: ../../views/monument/frmMonumentVoir.php");
	} else {
		if ( $traitement == 2 ) {
			Header("Location: ../../views/monument/frmMonumentModifier.php");
		}else {
		if ($traitement == 3){
			Header("Location: ../../views/monument/frmMonumentSupprimer.php");
			}else{ 
				if($traitement == 4){
			Header("Location: ../../views/monument/frmupload.php");
				}
			}
		}
	}	
			
		
?>