<!DOCTYPE html>
<html lang="fr">

	<head>

		<title>Exercice PHP</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="_style/style.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
		
		
	

	</head>

		<body>

			<section class="section_form">

			<h1>J'ai besoin de la voiture</h1>

			<form method="GET" action="result.php">


				<ul>

				<li class="choice">
				<label for="hellfest">Pour aller au Hellfest.</label>
				<input class="checkbox-row" type="checkbox" id="hellfest" name="hellfest" value="1">
				</li>


				<li class="choice">
				<label for="gare">Pour aller chercher mon frère à la gare.</label>
				<input class="checkbox-row" type="checkbox" id="gare" name="gare" value="1">
				</li>


				<li class="choice">
				<label for="alcool">Pour aller acheter de l'alcool.</label>
				<input class="checkbox-row" type="checkbox" id="alcool" name="alcool" value="2">
				</li>


				<li class="choice">
				<label for="banque">Pour aller braquer une banque.</label>
				<input class="checkbox-row" type="checkbox" id="banque" name="banque" value="2">
				</li>


				<li class="choice">
				<label for="course">Pour faire une course de rue.</label>
				<input class="checkbox-row" type="checkbox" id="course" name="course" value="2">
				</li>


				<li class="choice">
				<label for="eglise">Pour aller conduire grand mère à l'église.</label>
				<input class="checkbox-row" type="checkbox" id="eglise" name="eglise" value="1">
				</li>

				</ul>



				<button class="section_button" type="submit">envoyer</button>


			</form>

			</section>




			
	
		</body>



	

</html>

