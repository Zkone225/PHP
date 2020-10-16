<?php

session_start();
session_destroy();

header("Location: ../../views/utilisateur/frmLogin.php");

?>