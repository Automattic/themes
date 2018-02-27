<?php
/**
 * The template for displaying the Project Tag taxonomy archive page.
 *
 * @package Sketch
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php sketch_portfolio_title( '<header class="page-header"><h1 class="page-title">', '</h1></header>' ); ?>

			<?php sketch_portfolio_featured_image( '<div class="portfolio-featured-image">', '</div>' ); ?>

			<?php sketch_portfolio_content( '<div class="portfolio-entry-content">', '</div>' ); ?>

			<?php /* Start the Loop */ ?>

			<div class="portfolio-projects">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'portfolio' ); ?>

				<?php endwhile; ?>

				<?php sketch_paging_nav(); ?>

			</div><!-- .projects -->

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>