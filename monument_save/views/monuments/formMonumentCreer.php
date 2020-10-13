<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=L, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php
    session_start();
    ?>
    <title>Document</title>
</head>
<body>


<div style="text-align: center">

<div>Ajouter Un Monument</div>
<hr>


<form action="../../controller/monuments/monumentCreerAccept.php" method="post">
<div>
    <label for="name">Nom Du Monument:</label>
    <input type="text" id="name" name="libelle" >
</div>
<br>

<div>
    <label for="name">Arrondissement:</label>
    <input type="text" id="ardsmt" name="libelle" >
</div>
<br>

<div>
    <label for="name">Adresse:</label>
    <input type="text" id="adresse" name="libelle" >
</div>
<br>

<div>
    <label for="name">Site Web:</label>
    <input type="text" id="siteweb" name="libelle" >
</div>
<br>

<div class="button">
    <button type="submit">Valider</button>
</div>
<br>

</form>

<a href = "ListerMonument.php">
<button type="submit">Retour Liste</button>
</a>

</div>

</table>

</body>
</html>



