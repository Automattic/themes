<?php
/**
 * Template Name: Full-Width Page
 *
 * @package Apostrophe 2
 *
 * The template for displaying full-width pages. Effectively the exact same as the regular page template,
 * but can be used to span the full width of the site.
 *
 */

get_header(); ?>

	<section id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' !== get_comments_number() ) :
					comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
