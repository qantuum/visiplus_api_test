<!--
Attention : une copie du site est dans C:/wamp/www (tests sur localhost)
-->

<!--
recherche : comment load une API
https://stackoverflow.com/questions/9802788/call-a-rest-api-in-php
-->

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Test Wortman Visiplus</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>
		<main class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <a class="navbar-brand test-info" href="#">SWAPI</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					    <div class="navbar-nav">
					      <a class="nav-item nav-link" href="#">Here (lists categories) </a>
					      <a class="nav-item nav-link disabled">Lists items</a>
					      <a class="nav-item nav-link disabled">Lists items attributes</a>
					    </div>
					  </div>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="jumbotron">
						<h4 class="h3 text-center text-info">Les Différentes catégories</h4>
					</div>					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 table-responsive">
					<table class="table table-striped">

					<?php
						$response = file_get_contents('https://swapi.co/api/');
						$response=json_decode($response, true);
						foreach ($response as $key=>$value)
						{
							echo "<th>".$key."</th>";
						}
						echo '</tr>';
						echo '<tr>';
						foreach ($response as $key=>$value)
						{
							echo "<td>".$value."</td>";
						}
						echo '</tr>';
					?>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 table-responsive">
					<table class="table table-striped">
					<?php
						$planets = array();
						for ($i=1; $i<10; $i++)
						{
							$planets[] = file_get_contents('https://swapi.co/api/planets/'.$i);
						}

						echo '<pre>';
						print_r($planets);
						echo '</pre>';
						
						/*$response=json_decode($response, true);
						foreach ($response as $key=>$value)
						{
							echo "<th>".$key."</th>";
						}
						echo '</tr>';
						echo '<tr>';
						foreach ($response as $key=>$value)
						{
							echo "<td>".$value."</td>";
						}
						echo '</tr>';*/
					?>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="jumbotron">
						<h3 class="h3 text-center text-danger">
							Compte rendu de l'exercice
						</h3>
						<ul class="list-group">
							<li class="list-group-item"><strong>API utilisée :</strong> <a class="" href="">SWAPI</a></li>
							<li class="list-group-item"><strong>Connaissance de cURL :</strong> nulle</li>
							<li class="list-group-item"><strong>Méthode utilisée :</strong> File get contents + for</li>
							<li class="list-group-item"><strong>Temps passé à essayer d'obtenir des éléments de l'API quand même :</strong> 45 minutes sur 1h. voir lien <a href='./test/php'>test</a></li>
						</ul>
						<br />
						<h1 class="text-center h1 text-success">Retrouvez un travail effectué sur PHP en POO en liaison avec une base de données phpmyaadmin, par Marvin Wortman, au lien : <a href="https://github.com/qantuum/sd3-project">sd3-project</a></h1>
					</div>
				</div>
			</div>
		</main>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>

</html>

<!--
* TEST VISIPLUS (1H)
Objectif: création d'un mini site à l’aide d’une API 

Le but créé un mini-site de trois pages en utilisant bootstrap(http://getbootstrap.com/docs/3.3/getting-started/) et l’api SWAPI (https://swapi.co/documentation).
•	Home page listant les différentes catégorie (People,Films,Starships,Vehicles,Species,Planets)
•	Une page catégories listant les items
•	Une page item listant les attributs d’un item


* Rendu 
- Code source de l'application à mettre dans un dossier à votre nom sur le bureau
- Le code source doit être suivie sur git dans ce dossier

-->