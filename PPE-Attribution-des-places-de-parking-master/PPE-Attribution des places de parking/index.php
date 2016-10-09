<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="moncss.css" />
	<title>Site de reservation</title>
	<h1> MAISON DES LIGUES DE LORRAINE </h1>
	</head>

	<?php include("menu.php");  ?>

	<body>
		<h2> Bienvenue sur le site des réservations de place de parking </h2><br/>
		<img src="photo/parking.jpg" alt="accueil" />
		<p>
			Bonjour et Bienvenue sur notre site, ce site est là pour vous permettre de réserver<br />
			votre de place de parking. Vous êtes oubligés de vous inscrire pour pouvoir<br />
			obtenir une place de parking sur ce site, Merci de votre compréhension et bonne journée<br />
		</p>
	</body>
    <?php include("footer.php"); ?>
</html>
