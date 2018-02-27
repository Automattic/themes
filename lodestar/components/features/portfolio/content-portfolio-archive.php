<?php
/**
 * The template used for displaying Jetpack Portfolio posts on single porfolio pages
 *
 * @package Lodestar
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php lodestar_portfolio_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header>
	<?php lodestar_portfolio_content( '<div class="portfolio-content"><div class="page-content">', '</div></div>' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->

<div class="portfolio-projects" id="portfolio-projects">
	<div class="portfolio-wrapper" id="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'components/features/portfolio/content', 'portfolio' ); ?>

		<?php endwhile; ?>
	</div><!-- .portfolio-wrapper -->
</div><!-- .portfolio-projects -->