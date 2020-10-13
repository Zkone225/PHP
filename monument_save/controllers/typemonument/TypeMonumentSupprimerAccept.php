<?php

	require_once("../../model/typemonument/typemonumentModel.php");
	session_start();

    //récupération de l'id de type monument à chercher
    $id = $_POST['idTypeMonument'];
   
    //Mise à jours
    typeMonument_Delete($id);
  
	
    Header("Location: ../../controllers/typemonument/TypeMonumentListerAccept.php");
   
    
    
?>