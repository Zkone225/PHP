<?php


	require_once("ChercherTypeMonument.php");
	session_start();
// recuperation de l'id de type de monument à chercher
    $id = $_GET['idtypemonument'];
    
    // recuperation du type monument
    $typemonument = typemonument_find($id);

    // on passe $typemonument en variable de session
    $_SESSION['typemonument'] = $typemonument;

    
    header("location: frmTypeMonumentVoir.php");

	
	
?>