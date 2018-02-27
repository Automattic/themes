<?php
/**
 * Template Name: Panel Page Template
 *
 * @package Shoreditch
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'panel-page' );

			endwhile; // End of the loop.
			?>

			<?php
			$child_pages = new WP_Query( array(
				'post_type'      => 'page',
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
				'post_parent'    => $post->ID,
				'posts_per_page' => 999,
				'no_found_rows'  => true,
			) );
			?>

			<?php
			if ( $child_pages->have_posts() ) :

				while ( $child_pages->have_posts() ) : $child_pages->the_post();

				get_template_part( 'template-parts/content', 'panel-page' );

				endwhile; // End of the loop.

			endif;
			wp_reset_postdata();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar( 'footer' );
get_footer();
