<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Libretto
 */

get_header(); ?>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'search' ); ?>
		<?php endwhile; ?>

		<?php libretto_content_nav( 'nav-below' ); ?>

	<?php else : // If search returns no results ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

	</div><!-- #content -->
</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
