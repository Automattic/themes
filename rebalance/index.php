<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rebalance
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php
			/*
			 * Include the Featured Project loop.
			 * - if featured posts exist, collect their IDs and exclude them from the main loop
			 */
			if ( rebalance_has_featured_projects( 1 ) ) {
				$featured_ids = rebalance_get_featured_project_ids();
				get_template_part( 'template-parts/section', 'featured' );
			} else {
				$featured_ids = null;
			} ?>

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<div id="infinite-wrap">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/*
						 * Include the Card template for the content.
						 */
						get_template_part( 'template-parts/content', 'card' );
					?>

				<?php endwhile; ?>

			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
