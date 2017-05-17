<?php
/**
 * Template Name: decouverte
 */
get_header();

?>
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

