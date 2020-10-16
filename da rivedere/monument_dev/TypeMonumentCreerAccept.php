<?php
require_once("connexion.php");
$libelle = $_POST['libelle'];
$resql= "insert into type_monument values('', '" .$libelle."')";
$cnx=connect_db();
$cnx->exec($resql);
echo $resql;
?>