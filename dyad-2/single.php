<?php
/**
 * The template for displaying all single posts.
 *
 * @package Dyad
 */

get_header(); ?>

	<main id="primary" class="content-area" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
			the_post_navigation( array(
				'prev_text' => '<div class="nav-previous"><span class="nav-subtitle">' . esc_html__( 'Previous Post', 'dyad-2' ) . '</span> <span class="nav-title">%title</span></div>',
				'next_text' => '<div class="nav-next"><span class="nav-subtitle">' . esc_html__( 'Next Post', 'dyad-2' ) . '</span> <span class="nav-title">%title</span></div>',
			) );
			?>

		<?php endwhile; // End of the loop. ?>

		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>

	</main><!-- #primary -->

<?php get_footer(); ?>
