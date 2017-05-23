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


</div>
<!-- Footer -->
<footer class="navbar-default footer2">
    <div class="footer-above background-footer-color">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-12">
                    <div class="text-center">
                        <ul class="list-inline text-center">
                            <li class="text">Nous contacter
                                <p class="margintop">Email</p>
                                <p>Tel</p>
                            </li>
                            <li class="text navbar-right">
                                Nos réseaux sociaux
                                <p class="margintop"><a href="#" class="brightness"><img src="<?php bloginfo('url'); ?>/wp-content/themes/Personal Coaching Evolution/img/fb_logo.png" alt="facebook" width="50" height="50"></a>
                                <a href="#" class="brightness"><img src="<?php bloginfo('url'); ?>/wp-content/themes/Personal Coaching Evolution/img/Twitterbird.png" alt="twitter" width="50" height="50"></a></p>
                            </li>
                            <li class="text navbar-left">
                                About us !
                                <p class="margintop"><a href="#">blablabla</a></p>
                                <p><a href="#">blablabla</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>