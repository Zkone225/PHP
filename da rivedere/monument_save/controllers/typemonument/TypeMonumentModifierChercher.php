<?php

	require_once("../../model/typemonument/typemonumentModel.php");
	  

    session_start();

    //récupération de l'id de type monument à chercher
    $id = $_GET['idtypemonument'];
  
    //récupération du type monument
    $typemonument = typeMonument_find($id);
  
    //on passe $typemonument en variable de session 
    $_SESSION['typemonument'] = $typemonument;
	
    Header("Location: ../../views/typemonument/formTypeMonumentModifier.php");
    
    
?>