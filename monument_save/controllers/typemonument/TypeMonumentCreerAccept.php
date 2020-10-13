<?php

	require_once("../../model/typemonument/typemonumentModel.php");
	  session_start();

	 
	
    $libelle = trim(ucfirst($_POST['libelle']));
    
     //controler si libelle est vide
	
	typeMonument_Insert($libelle);
	
		Header("Location: ../../controllers/typemonument/TypeMonumentListerAccept.php");
	
?>