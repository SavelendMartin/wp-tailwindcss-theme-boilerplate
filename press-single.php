<?php
/**
 * Template Name: Press visa
 * Template Post Type: post, page, event
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Kava
 */

get_header();

	while ( have_posts() ) : the_post();

		?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'kava' ),
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?></article><!-- #post-<?php the_ID(); ?> --><?php

	endwhile; // End of the loop.
?>

<div id="press"></div>

<script type="application/javascript">
    // Implements the MFN-JS Loader javascript file
    if (!window._MFN) {
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.src = "https://widget.datablocks.se/api/rose/assets/js/mfn/mfn-js-loader-v0.0.4.js";
        s.async = true;
        document.getElementsByTagName("body")[0].appendChild(s);
    }

    window._MFN = {
        // The selector of the element where the content of the news
        // archive should end up
        outlet: '#press',

        type: 'singleview',

            // Default language of the news item shown
            lang: 'sv',

            // 'selected' uses locale from lang, other options are 'en', 'sv'
            // and so on
            l10nLang: 'selected',

            // Author Entity ID provided
            entity_id: '14e18a8e-0c96-4ef7-a67a-ba508cf74fa0',

            // If it should show date
            show_date: true,

            // 'default' or eg [{tag: ':regulatory'}]
            show_tags: 'default',

            // Should most likely be true
            use_proxied_attachment_urls: true,

            // Show attachments
            show_attachments: true,

            // if attachments should be displayed as thumbnails (Default as links)
            show_attachment_thumbnail: true,

            // attachment thumbnail size (max size of 585).
            // (To ensure high quality thumbnails, we recommend using max size
            // and then setting the CSS class of the img to half the size)
            attachment_thumbnail_size: 585

    }
</script>

<?php

get_footer();