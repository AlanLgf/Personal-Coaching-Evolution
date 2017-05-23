<?php
/**
 * Template Name: dos
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

<div class="mon-background5"></div>
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




<div class="decouverte">
    <div class="container">
        <div class="containerdecouverte">
            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post();?>
                    <h1 class="titredecouverte"> <?php the_title();?> </h1>
                    <div class="contentdecouverte"><?php the_content(); ?> </div>
                <?php
                endwhile; ?>
            <?php  endif; ?>
        </div>
    </div>
</div>




<?php

get_footer();

?>

