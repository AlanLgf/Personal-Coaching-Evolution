<?php
/**
 * Template Name: Contact
 */
?>
<?php
get_header();
?>


<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				echo do_shortcode('[contact-form-7 id="14" title="Formulaire de contact 1"]');
				?>
		
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>