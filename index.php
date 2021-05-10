<?php


get_header();

<?php if ( have_posts() ) : ?>
    <?php
    while ( have_posts() ) :
        the_post();
        ?>

        <?php get_template_part( 'templates/partials/content', get_post_format() ); ?>

    <?php endwhile; ?>

<?php endif; ?>

get_footer();