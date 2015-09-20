<?php
	
	$correct = 0;

	foreach($_GET as $element) { //correct va prendre la valeur des éléments cochés. Si on coche une case ayant pour valeur "1, correct prendra la valeur 1. Pareil si on coche une case ayant pour valeur "2". 

		if($element > $correct){

			$correct = $element;
		}
	}


?>

<!DOCTYPE html>
<html lang="fr">

	<head>

		<title>Exercice PHP</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="_style/style.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
		
	</head>

	<body>

		<?php //si la condition est bonne en php, cela va afficher les élements html qui sont dans les accolades

			if($correct == 1){
				?>

				<h2>Ok, tu peux avoir la voiture. Fais toi plaiz.</h2>

				<img src="http://images.123hdwallpapers.com/20150625/dodge-challenger-car-front-1680x1050.jpg" alt="chaton">

				<?php
			}
			elseif($correct == 0){
				?>

				<h2>Tu devrais essayer en cochant quelque chose.</h2>

				<a class="section_back" href="index.php">Retour aux différents choix</a>

				<?php
			}
			else{
				?>

				<h2>T'es fou ou quoi? Pas question de prendre l'auto.</h2>

				<a class="section_back" href="index.php">Retour aux différents choix</a>

				<?php
			}

		?>

		
		
	</body>


	</html>
