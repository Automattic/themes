<?php
/**
 * The template for displaying all single posts.
 *
 * @package Independent_Publisher_2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation( array( 'next_text' => __( '<span class="meta-nav screen-reader-text">Next Post</span> %title', 'independent-publisher-2' ), 'prev_text' => __( '<span class="meta-nav screen-reader-text">Previous Post</span> %title', 'independent-publisher-2' ) ) ); ?>

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
