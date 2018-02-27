<?php
/**
 * The template for displaying all single posts.
 *
 * @package Button 2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'components/content', 'single' ); ?>

			<?php the_post_navigation( array( 'next_text' => __( '<span class="meta-nav">Next Post</span> %title', 'button-2' ), 'prev_text' => __( '<span class="meta-nav">Previous Post</span> %title', 'button-2' ) ) ); ?>

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
