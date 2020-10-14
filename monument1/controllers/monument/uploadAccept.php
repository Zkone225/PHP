<?php

session_start();
//$_FILES['photo']['name']
$ext = strstr($_FILES['photo']['name'],".");
$destination = "../../images/monument/monument_".$_SESSION['idMonument'].$ext;

    if ( isset($_FILES['photo']['tmp_name']) ) {
        $retour = copy($_FILES['photo']['tmp_name'], $destination );
        if($retour) {
            echo '<p>La photo a bien été envoyée.</p>';
            echo '<img src="' . $_FILES['photo']['name'] . '">';
        }
    }
?>
