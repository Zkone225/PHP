<?php

    require_once("connexion.php");
    session_start();

    $libelle = trim(ucfirst($_POST['libelle']));
    $vTypeMonumentId = $_POST['idTypeMonument'];


    // sécurisation des données
    $vLibelle = filter_var($libelle, FILTER_SANITIZE_FULL_SPECIAL_CHARS);   
    echo $vLibelle . "<br>";

    // prepare requête sql 
    $reqSql = " DELETE FROM type_monument WHERE ID_TYPE_Monument = :vTypeMonumentId";

    try{
        $cnx = connect_db();
        $stmt=$cnx->prepare($reqSql);
                    
        // bind parameters
        $stmt->bindParam(':vTypeMonumentId', $vTypeMonumentId, PDO::PARAM_INT);
        //$stmt->bindParam(':vLibelle', $vLibelle, PDO::PARAM_STR);
    
        //exécution
        $stmt->execute();

        //fermeture du curseur
        $stmt->closeCursor();

        echo "Création réussie";
    
    } catch(PDOException $error){
        $message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
        $_SESSION['message_erreur'] = $message_erreur;
        Header("Location: pageerreur.php" );
    }

    //fermer la connexion
    $cnx = null;	
    Header("Location: ListeTypeMonument.php")

?>