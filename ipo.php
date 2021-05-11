<?php
/**
 * Template Name: IPO
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

        <?php get_template_part( 'templates/partials/ipo', get_post_format() ); ?>

    <?php endwhile; ?>

<?php endif;

get_footer();