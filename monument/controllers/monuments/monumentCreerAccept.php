<?php

	require_once("../../model/monument/monumentModel.php");
	  session_start();

	 
	
    $libelle = trim($_POST['libelle']);
    
     //controler si libelle est vide
	
	typeMonument_Insert($libelle);
	
		Header("Location: ../../views/monument/ListerMonument.php");
	
?>