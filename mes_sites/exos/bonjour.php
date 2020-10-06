<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// $vNom = $_GET['nom'];
// $vPrenom = $_GET['prenom'];
if (isset($_GET['nom']) and isset($_GET['prenom'])) {
    echo "Bienvenue"." ".$_GET['nom']." ". $_GET['prenom'];
}else{
    echo "Vous devez envoyé nom et prenom";
}

?>

</body>
</html>