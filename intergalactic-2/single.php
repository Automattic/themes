<?php
/**
 * The template for displaying all single posts.
 *
 * @package Intergalactic 2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>


			<div class="entry-footer-wrapper">
				<?php intergalactic_2_author_bio(); ?>
				<?php the_post_navigation( array( 'prev_text' => '<span class="title">' . esc_html__( 'Previous', 'intergalactic-2' ) . '</span>%title', 'next_text' => '<span class="title">' . esc_html__( 'Next', 'intergalactic-2' ) . '</span>%title' ) ); ?>
			</div><!-- .entry-footer-wrapper -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>