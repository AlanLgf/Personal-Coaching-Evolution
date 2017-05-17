<?php
/**
 * Template Name: Accueil
 */


?>

	<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
		<title>Personal Coaching Evolution</title>
	</head>
<body>

<div class="mon-background"></div>
<nav class="navbar navbar-dark bg-primary navbar-fixed-top">
	<div class="navbar-header" id="navbarSmall">
		<a href="#top" data-target="home"><img class="nav-logo" src="<?php bloginfo('url'); ?>/wp-content/themes/Personal Coaching Evolution/img/logo_pce-min.png" /></a>
		<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<?php $defaults = array(
			'theme_location' => '',
			'menu' => 'findus',
			'container' => '',
			'container_id' => '',
			'menu_class' => 'menu',
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
			'depth' => '',
			'walker' => ''
		);
		wp_nav_menu( $defaults );
		?>
	</div>


</nav>

<script type="text/javascript">
	// fontion pour donné l'attribut 'scrolled' a la navbar lorsqu'elle n'est pas en Top de la page
	$(function () {
		$(document).scroll(function () {
			var $nav = $(".navbar-fixed-top");
			$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
		});
	});



</script>


 	<div class="texte_presentation">
		<h1 class="titreprincipal"> Personal Coaching Evolution </h1>
</div>

	<div id="objectifs">
	 	<div class="container">
			<div class="row">
				<h2 class="center">Objectifs</h2>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="photo_objectif">
						<img src="http://i2.cdscdn.com/pdt2/3/5/7/1/300x300/hom2009793243357/rw/stepper-fitness-excercise-sport-machine-d-escalie.jpg">
						<h2 class="overlay "> Perte de poids</h2>
					</div>	
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="photo_objectif">
						<img src="https://www.trendylab.fr/wp-content/uploads/2015/04/Blog-fitness-et-sprot-300x300.jpg">
						<h2 class="overlay "> Prise de masse</h2>
					</div>	
				</div>	
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="photo_objectif">
						<img src="https://www.jocca.fr/wp-content/uploads/2016/04/indoor.jpg">
						<h2 class="overlay "> Cours special seniors</h2>
					</div>	
				</div>	

				<div class="col-md-2 col-sm-2 col-xs-2"></div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="photo_objectif">
						<img src="http://www.regimenaturel.net/wp-content/uploads/2014/10/regime-naturel-sport-maigrir1.jpg">
						<h2 class="overlay ">Seance decouverte</h2>
					</div>	
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="photo_objectif">
						<img src="http://fitnessprice.com/wp-content/uploads/2013/06/fitness-price-paris-9-10-300x300.jpg">
						<h2 class="overlay "> Special mal de dos</h2>
					</div>	
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2"></div>
			</div>
		</div>
	</div>

	<div id="offres">
	 	<div class="container">
			<div class="row">
				<h2 class="center">Découvrez nos offres</h2>
				<div class=" col-md-6 col-sm-6 col-xs-12 center grid">
					<figure class="effect-oscar">
				
					<figcaption>
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/Personal Coaching Evolution/img/coach1.jpg" >
							<h2>Tarifs</span></h2>
							<p class="tarifs">Une séance de 1heure 30 pour une personne = 65 Euros. <br> </p>
								
						</figcaption>			
					</figure>
				</div>
				<div class=" col-md-6 col-sm-6 col-xs-12 center">
					<a href="#" target="_blank"><img src="http://www.optionfitness.fr/img/picture5.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	</div>




<?php

get_footer();

?>