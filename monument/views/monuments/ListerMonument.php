<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=L, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php
    session_start();

    $listeMonument = $_SESSION['listeMonument'];
    ?>
    <title>Liste des monuments</title>
</head>

<body style = "margin: 200px;">
<!-- button home -->
<a  href = "../../administration.php">
<button type="submit">HOME</button>
</a>


<h1 class ="text-center">Liste des monuments</h1>
<table class= "table" border="10px" style = "text-align:center">
  <thead class="thead-dark">
 
    <tr>
      <th>Monuments</th>
      <th>Actions</th>
     
    </tr>
  </thead>
  <tbody>
  <?php foreach($listeMonument as $ligne){?>
      
    <tr>
      <td><?php echo $ligne['Libelle_TYPE_Monument'];?></td>
      <a href="../../controllers/monument/monumentVoirAccept.php?idmonument=<?php echo $ligne['ID_TYPE_Monument']?>">Voir</a> 
      <a href="../../controllers/monument/monumentModifierChercher.php?idmonument=<?php echo $ligne['ID_TYPE_Monument']?>">modifier</a> 
      <a href="../../controllers/monument/monumentSupprimerChercher.php?idmonument=<?php echo $ligne['ID_TYPE_Monument']?>">supprimer</a></td>
      
    </tr>
    <?php
  }
  ?>
  </tbody>
   
</table>

<hr>

<a href = "formMonumentCreer.php">

<button type="submit">Ajouter Un Monument</button>
</a>


    
</body>
</html>