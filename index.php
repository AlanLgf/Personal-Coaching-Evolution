<?php
/**
 * Template Name: Accueil
 */
get_header();

?>

 	<div class="texte_presentation">
		<h1 class="titreprincipal"> Personal Coaching Evolution </h1>
</div>

	<div id="objectifs">
	<hr>
	 	<div class="container">
			<div class="row">
				<h2 class="center">Objectifs</h2>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="photo_objectif">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/Personal Coaching Evolution/img/poid.jpg"/>
						<a href="<?php echo get_site_url();?>/index.php/perte-de-poid"> <h2 class="overlay "> Perte de poids</h2> </a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="photo_objectif">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/Personal Coaching Evolution/img/masse.jpg"/>
						<h2 class="overlay "> Prise de masse</h2>
					</div>	
				</div>	
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="photo_objectif">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/Personal Coaching Evolution/img/seniors.jpg"/>
						<h2 class="overlay "> Cours special seniors</h2>
					</div>	
				</div>	

				<div class="col-md-2 col-sm-2 col-xs-2"></div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="photo_objectif">
										<img src="<?php bloginfo('url'); ?>/wp-content/themes/Personal Coaching Evolution/img/decouvre.jpg"/>
						<h2 class="overlay ">Seance decouverte</h2>
					</div>	
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="photo_objectif">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/Personal Coaching Evolution/img/dos.jpg"/>

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