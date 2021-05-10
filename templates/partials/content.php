<?php get_template_part( 'templates/partials/header'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

	<header class="">
		<?php the_title('<h1>', '</h1>' ); ?>
	</header>

	<?php if ( is_search() || is_archive() ) : ?>

			<?php the_excerpt(); ?>

	<?php else : ?>

			<?php
			the_content(
				sprintf(
					__( 'Continue reading %s', 'tailpress' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
			?>
		</div>

	<?php endif; ?>

</article>
