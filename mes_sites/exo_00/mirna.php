<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon premier site</title>
   
</head>
<body>
   <!--  On insert la balise php dans le body
echo pour afficher du text
exit pour arrêter le script
declaration de la variable avec un $devant le variable ex $var=1;
php est un langage non typé on peux donc forcer le type avec settype (entier int, string,...
settype renvoi une réponse booléen 0 OU 1 si ça bien été executé -->
   
   <?php
        echo "Bienvenue sur mon site"."\n".
        "message inseré par echo <br>";
        $a=3.14;
        $b=settype($a,"int");
        echo "a=".$a."<br>b=".$b;
        //ou autre écriture
        echo "<br>a=$a b=$b";
        
        $nom="Ndombe";
        $prenom="Mirna";
        echo"<br>Je m'appelle" ." ".$nom ." ".$prenom;
      
        $a=2;
        $b=&$a; //LE & reference la variable donc si on change sa valeur elle change aussi dans b
        echo "<br>a=$a b=$b";
        $a=10;
        echo "<br>a=$a b=$b<br>";

        //ISSET() permet de savoir si une variable est déclaré donc retourn vrai ou faut donc 1 OU RIEN
        // UNSET() détruit la variable
        //EMPTY() de permet de voir si la variable est vide donc affiche 1 SINON 0
        $a=1;
        echo isset($a);
        unset($a) ;
        echo isset($a)."<br>unset<br>";//N'affiche rien car la variable n'exixte plus
      
        $a=1;
        $b=2;
        echo $a+$b;

        $a=1;
        $b="10 merveilles";
        echo $a + $b."<br>";

        $a=1;
        $b=2;
        $a+=$b;
        echo "a=$a b=$b";


        exit("<br>Fin d'exécution");
        echo"Affaire à suivre (n'apparaitra pas car il y a exit avan)";
    ?> 

<!-- Caractères échappés
Séquence    Signification
\n  Fin de ligne (LF ou 0x0A (10) en ASCII)
\r  Retour à la ligne (CR ou 0x0D (13) en ASCII)
\t  Tabulation horizontale (HT or 0x09 (9) en ASCII)
\v  Tabulation verticale (VT ou 0x0B (11) en ASCII) (à partir de PHP 5.2.5)
\e  échappement (ESC or 0x1B (27) en ASCII) (à partir de PHP 5.4.4)
\f  Saut de page (FF ou 0x0C (12) en ASCII) (à partir de PHP 5.2.5)
\\  Antislash
\$  Signe dollar
\"  Guillemet double
\[0-7]{1,3} La séquence de caractères correspondant à cette expression rationnelle est un caractère, en notation octale, qui débordera silencieusement pour s'adapter à un octet (e.g. "\400" === "\000")
\x[0-9A-Fa-f]{1,2}  La séquence de caractères correspondant à cette expression rationnelle est un caractère, en notation hexadécimale
\u{[0-9A-Fa-f]+}    La séquence de caractères correspondant à l'expression régulière est un point de code Unicode, qui sera la sortie de la chaîne de caractères représentant le codepoint UTF-8 (ajouté en PHP 7.0.0) -->
</body>
</html>