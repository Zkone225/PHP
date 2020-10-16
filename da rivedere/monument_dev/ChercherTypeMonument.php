<?php

require_once("connexion.php");

function typemonument_find($id){
    $vId=$id;

// prepare requête sql 
$reqSql = "select * from type_monument where ID_TYPE_Monument = :vId";

// initialisation de la fonction typemonumenttrouve
$typemonumenttrouve = array();

try{
    $cnx = connect_db();
    $stmt=$cnx->prepare($reqSql);
                    
    // bind parameters
    $stmt->bindParam(':vId', $vId, PDO::PARAM_INT);
    
    //exécution
    $stmt->execute();
    $typemonumenttrouve = $stmt->fetch();

    //fermeture du curseur
    $stmt->closeCursor();

} catch(PDOException $error){
    $message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
    $_SESSION['message_erreur'] = $message_erreur;
    Header("Location: PageErreur.php" );
}

//fermer la connexion
$cnx = null;	
return $typemonumenttrouve;
}
?>