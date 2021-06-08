<?php
/**
 * Template Name: Clean
 * Template Post Type: post, page, event
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Kava
 */

get_header();

if ( have_posts() ) : ?>
    <?php
    while ( have_posts() ) :
        the_post();
        ?>

        <?php get_template_part( 'templates/partials/clean', get_post_format() ); ?>

    <?php endwhile; ?>

<?php endif;

get_footer();