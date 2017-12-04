<!doctype html>
<html lang="en"> 
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/main.css">
	</head>

	<body>
	<?php

	include "header.php";

	?>


	<!--
		<header>
			<title>Alien : Le huitième passager</title>

			<nav class="navbar navbar-default">
  				<div class="container-fluid">
   					<div class="navbar-header">
					    <a class="navbar-brand" href="#">Alien</a>
    				</div>
    				<ul class="nav navbar-nav">
    	  				<li class="active"><a href="#">Film</a></li>
      					<li><a href="realisateur.html">Réalisateur</a></li>
      					<li><a href="acteurs.html">Acteurs</a></li>
	    			</ul>
  				</div>
			</nav>

		</header>
	-->
		
		<section>
		<?php include "film.php"; ?>
		<!--

			<article id="film">

				<h1 id="t_principal">Alien : Le huitième passager</h1>

				<h2>Date de sortie</h2>
				<time datetime="1979">1979</time>
				<aside>

					<h2>Acteurs principaux</h2>
					<ul>
						<li>Tom Skerritt</li>
						<li>Sigourney Weaver</li>
						<li>Veronica Cartwright</li>
						<li>Harry Dean Stanton</li>
						<li>John Hurt</li>
						<li>Ian Holm</li>
						<li>Yaphet Kotto</li>
					</ul>
				</aside>

				<h2>Synopsis</h2>
				<p>Le vaisseau commercial Nostromo et son équipage, sept hommes et femmes, rentrent sur Terre avec une importante cargaison de minerai. Mais lors d'un arrêt forcé sur une planète déserte, l'officier Kane se fait agresser par une forme de vie inconnue, une arachnide qui étouffe son visage.</p>

				<p>Après que le docteur de bord lui retire le spécimen, l'équipage retrouve le sourire et dîne ensemble. Jusqu'à ce que Kane, pris de convulsions, voit son abdomen perforé par un corps étranger vivant, qui s'échappe dans les couloirs du vaisseau...</p>

				<h2>Note</h2>
				<p>4.3 / 5</p>

			</article>

-->

			<?php include "imageslegendees.php"; ?>
<!--
			<section id="imageslegendees">
				<figure>
				<img src="img/alienaffiche.jpg" alt="Affiche" width="400">
				<figcaption>Affiche du Film</figcaption>
				</figure>
				</br>
				<figure>
				<img src="img/ripley.jpg" alt="Ripley" width="5	00">
				<figcaption>Ripley</figcaption>
				</figure>
				</br>
				<figure>
				<img src="img/nostromo.jpg" alt="Nostromo" width="500">
				<figcaption>Nostromo</figcaption>
				</figure>
				</section>
		
			

		-->
		<?php include "inf_real.php"; ?>
<!-- 

		</section>

		<section id="inf_real">
		<h2>Infos Réalisateur </h2>

		<figure>
				<img src="img/ridleyscott.jpg" alt="Ridley Scott" width="200">
				<figcaption>Ridley Scott</figcaption>
				</figure>

		</section>

		-->

		<?php include "filmographie.php"; ?>
		
		<!--

		<section id="inf_acteurs">
		<h2>Infos Acteurs</h2>
		
		<figure>
				<img src="img/tomskerritt.jpg" alt="Tom Skerritt" width="200">
				<figcaption>Tom Skerritt</figcaption>
		</figure>
	    </br>	
		<figure>
				<img src="img/sigourneyweaver.jpg" alt="Sigourney Weaver" width="200">
				<figcaption>Sigourney Weaver</figcaption>
		</figure>
		</br>
		<figure>
				<img src="img/veronicacartwright.jpg" alt="Veronica Cartwright" width="200">
				<figcaption>Veronica Cartwright</figcaption>
		</figure>
		</br>
		<figure>
				<img src="img/harrydeanstanton.jpg" alt="Harry Dean Stanton" width="200">
				<figcaption>Harry Dean Stanton</figcaption>
		</figure>


		</section>

		-->

		<?php include "footer.php"; ?>

	<!--
		<footer>Réalisé par Julien Sorelli</footer>
	-->
	
	</body>



	<?php

		function getBlock($file, $data = [])
		{
    		require $file;
		}

	?>
</html>