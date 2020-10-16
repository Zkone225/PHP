<!DOCTYPE HTML>
<html>
<head>

	<meta charset="UTF-8">
	<title>Monuments de Paris</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Ajout de Bootstrap à partir du CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	

	<!--Ajout de W3.CSS à partir du CDN-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<!--Pour utiliser les icônes Font Awesome avec Bootstrap 4 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!--Fichier CSS de la page-->
    <link rel="stylesheet" href="../../css/main.css" />
	<?php
		session_start();
		require_once("../../models/utilisateur/UtilisateurModel.php");
		

		if ( isset($_SESSION['msg_erreur']) ) {
			if ($_SESSION['msg_erreur'] == "") {
				$email = "";
				$mdp = "";
			} else {
				$email = $_SESSION['email'];
				$mdp = $_SESSION['mdp'];
		
			}
		} else {
			$emailt = "";
			$mdp = "";
			$_SESSION['msg_erreur'] = "";
		}
	?>
</head>
<body>
	<div class="w3-container w3-black">
		<h1>Utilisation</h1>
	</div>
	<br>
	
	<div class="w3-row">
		<div class="w3-quarter w3-container">
		&nbsp;
		</div>
		<div class="w3-half w3-light-grey w3-border w3-card-4">
			<div class="w3-container w3-blue">
				<h2>Authentification </h2>
			</div>
			<br><br>
			<form class="w3-container" action="../../controllers/utilisateur/LoginAccept.php" method="post">
				<p class="w3-text-red"><?php echo $_SESSION['msg_erreur'];?> </p>
				<br>
				<label>Email</label>
				<input class="w3-input w3-text-blue" type="text" name="email" value="<?php echo $email; ?>" autofocus>
				<label>Mot de passe</label>
				<input class="w3-input w3-text-blue" type="password" name="mdp" value="<?php echo $mdp; ?>"><button><span><i class="far fa-eye"></i></span></button>
				
				
				
				
				<br><br>
				<button type="submit" class="w3-btn w3-teal w3-round-large w3-hover-green w3-medium"><i class="fa fa-check" ></i>&nbsp;&nbsp; Se connecter</button>
				<br><br>
			</form>	
						
		</div>
		<div class="w3-quarter w3-container">
		&nbsp;
		</div>
	</div> 		
</body>
</html>