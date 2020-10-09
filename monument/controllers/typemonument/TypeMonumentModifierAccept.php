<?php

	require_once("../../model/typemonument/typemonumentModel.php");
	  

    session_start();

    //récupération de l'id de type monument à chercher
    $id = $_POST['idTypeMonument'];
    $libelle = trim(ucfirst($_POST['libelle']));
   
  
    //Mise à jours
    typeMonument_Update($id, $libelle);
  
	
    Header("Location: ../../controllers/typemonument/TypeMonumentListerAccept.php");
   
    
    
?>