<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>MON PREMIER SITE</h1>
    <!-- la balise br nous permettra de passer à la ligne -->
    <?php
    echo "Bienvenue sur mon site <br>
    Message inséré par echo";
    ?> 
<!-- exit nous permettra de sortir de l'exécution, tout ce qui arrivera après ne sera pas exécuté -->
    <?php
    echo " bienvenue";
    // exit ("fin d'exécution");
    echo "affaire à suivre";
    ?>

<!-- ici on transforme la nature d'une variable: de réel à entier -->

<?php
    
    $a = 3.14;
    $b = settype($a, "int");
    echo "<br>a = " .$a . "<br>b = " .$b;
    // echo "a = $a  b = $b";
    ?>
<!-- petit exercise pratique -->

    <?php
    $nom = "Kone";
    $prenom = "Zakaria";
    echo "Mon nom est:" .$nom.  "<br>et mon prenom est:" .$prenom
    ?>

    <!-- attribuer à une variable la valeure d'une autre variable -->

<?php
$a = 10;
$b = &$a;
echo "<br> a = $a <br>b=$b<br>"
?>

<!-- les fonctions isset et unset et empty -->

<?php
$a = 345;
echo isset ($a);
unset ($a);
echo isset ($a);
?>
<?php
?>

<!-- addition -->
<?php
$a = 4;
$b = 10;
echo $a + $b
?>


</body>
</html>
    
