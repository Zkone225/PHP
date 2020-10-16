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
echo " <br>"
?>
<?php
?>

<!-- addition -->
<?php
$a = 4;
$b = 10;
echo $a + $b 
?>

<h2>les tableaux</h2>

<!-- les tableaux avec PHP -->

<?php 
// $fruits=array();
// $fruits[0]="pomme";
// $fruits[1]="orange";
// $fruits[]="banane ";
// echo $fruits[2];
// $fruits[2]="raisin"
// print_r($fruits);
// var_dump($fruits);
// $calorie = array();
// $calorie["pomme"]=300;
// $calorie["orange"]=230;
// $calorie["banane"]=230;
// var_dump($calorie);
// $_GLOBALS
// $_SERVER
// var_dump($_SERVER);
// echo $_SERVER["server name"];



// mettre toujors echo avant la fonction pour avoir l'affichage
// sizeof($fruits);
// is_array($fruits);
// end();
// prev();
// current($fruits);
// next();
// la fonction "each" renvoi l'index e non pas la valeur
// each();
?>

<h3>tableau associatif</h3>

<?php
// permet de compter le nombre de chaine de caractere (la taille)
// $phrase = "je vous aime et je sais que vous m'aimez mais les autres ne vous aiment pas";
// echo strlen($phrase) ;

// // permet de transformer le contenu en majuscule
// echo strtoupper($phrase);

// // permet de transformere le contenu en minuscule
// echo strtolower($phrase);

// // selectioner une sous-chaine de la chaine, il affichera la chaine de caractère à partir du mot selectioné
// echo strstr($phrase, "vous");

// permet de trouver la position d'une chaine de caractère
// echo strpos($phrase, "aime");

// permet d'extraire une chaine de caractère; dans notre cas à partir du caractère 5, afficher 6 caractères
// echo substr($phrase,5,6);

// permet  de transformer en majuscule la première lettre
// ucfirst

// permet  de transformer en majuscule le mot selectioné
// ucwords

// permet de découper la phrase à partir du mot voulu et compte le nombre de fois qu'on a ce mot dans le texte
$phrase=("je vous aime et vous aussi vous m'aimez mais par contre les autres ne vous aiment pas");
explode("vous",$phrase);
print_r(explode("vous",$phrase));

$ladate="01/10/2020";
// echo("le jour est:");
// echo substr($ladate,0,2.);
// echo("le mois est:");
// echo substr($ladate,3,2.);
// echo("l'année est:");
// echo substr($ladate,6,4.);

$nlledate=explode("/",$ladate);
print_r($nlledate);
echo"<br>Le jour est " . $nlledate["0"];
echo"<br>Le mois est". $nlledate["1"];
echo"<br>L'année est" .$nlledate["2"];

?>

<h2>les structures ...</h2>
<p><strong>Nous allons apprendre a utiliser les conditions</strong></p>
<?php
// $age=15;
// if ($age<15){
//     echo"pas de sortie";
// }else {
//     echo"attention";
// }
?>
<h3>la condition while</h3>
<?php
// $age=15;
// switch (condition){
//     case valeur_1:
//         bloc de commandes
//     break;
//     case valeur_2
//     bloc de commandes
//     break
//     default
// }

$phrase="je vous aime";
echo("Notre phrase est:".$phrase);
echo"<br>";
echo("la taille de notre chaine de caractère est:"); echo strlen($phrase);

$i=1;
$car;
while( $i<=strlen($phrase)){
   $car=substr($phrase,$i-1,1); 
   if($car!=" "){
   echo"<br>Le caractère à la position ".$i. " est " .strtoupper($car);
}
    $i++;
}

?>

<h3>la condition do while</h3>
<?php
echo"<br>";

$phrase="je vous aime";
// echo("Notre phrase est:".$phrase);
// echo"<br>";
// echo("la taille de notre chaine de caractère est:"); echo strlen($phrase);

$i=1;
// // $car;
do{
    $car=substr($phrase,$i-1,1);
    $i++;

   if($car!=" "){
   echo"<br>La position" . " ". ($i-1). "est occupée par:" . " " . strtoupper($car);
   

}else
    echo"<br>La position" . " ". ($i-1). "est occupée par:" . " un espace vide ";

}

while( $i<=strlen($phrase));
 
// correction faite par les autres
// do{
//     $car=substr($phrase,$i-1,1);
// $i++;
//    if($car!=" "){
//    echo "<br>La position"." ".($i-1)"est occupée par"." ".strtoupper($car);
//    echo"<br>"
// }else{
//     echo"<br>Le caractère à la position "$i " est un espace";
// }
// while( $i<=strlen($phrase));

   

?>
<h3>la boucle for</h3>
<?php
// for($i=1; $i<=10;$i++){
//     echo$i;
// }

// $fruits=array();
// $fruits[0]="pomme";
// $fruits[1]="orange";
// $fruits[2]="banane ";
// $fruits[3]="papaye";
// $fruits[4]="mangue";
// $fruits[5]="mandarine";

// $calorie = array();
// $calorie["pomme"]=300;
// $calorie["orange"]=290;
// $calorie["banane"]=230;
// $calorie["papaye"]=280;
// $calorie["mangue"]=170;
// $calorie["mandarine"]=230;


// foreach($fruits as $unfruit){
//     echo"<br>$unfruit";

// }

// foreach($calorie as $key=>$val){
//     echo"<br>$key $val";

// foreach($_SERVER as $key=>$val){
//     echo"$key $val";
    
// }

$navigateur=$_SERVER["HTTP_USER_AGENT"];
echo "<br>$navigateur";

if(strpos($navigateur, "Firefox")){
    echo"<br>mon navigateur est Mozilla firefox";
}else if(strpos($navigateur, "Chrome")){
    echo"<br>mon navigateur est Chrome";
}else{
    echo "<br>navigateur inconu";
}

// les fonctions
$a =4;
function carre(){
    // $s = $a*$a;
    $GLOBALS['s']=$GLOBALS['a']*$GLOBALS['a'];
    // echo $s;
}
carre();
echo "<br>$s";


?>
<h3>comment ouvrir des fichiers et y travailler</h3>
<!-- copy(fichier source, fichier destination)
fclose($id)
$id = fopen(nomfichier,mode)
fread($id,longueur) -->
<?php
?>
</body>
</html>
    
