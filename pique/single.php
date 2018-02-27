<?php
/**
 * The template for displaying all single posts.
 *
 * @package Pique
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'components/content', 'single' ); ?>

			<?php the_post_navigation( array(
										'prev_text' => '<span>' . esc_html__( 'Previous', 'pique' ) . '</span> %title',
										'next_text' => '<span>' . esc_html__( 'Next', 'pique' ) . '</span> %title',
									 ) ); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
