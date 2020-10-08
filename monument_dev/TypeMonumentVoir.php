<?php

	require_once("chercherTypeMonument.php");
	session_start();

	//récupération de l'id de type monument à chercher
	$id = $_GET['idtypemonument'];

	$typemonument = typeMonument_find($id);
	$_SESSION['typemonument'] = $typemonument;
	Header("Location: frmTypeMonumentvoir.php");
	
?>