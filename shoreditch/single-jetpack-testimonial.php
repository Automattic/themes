<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shoreditch
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hentry-wrapper">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'testimonial' );

				endwhile; // End of the loop.
				?>
			</div><!-- .hentry-wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar( 'footer' );
get_footer();
