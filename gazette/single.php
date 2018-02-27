<?php
/**
 * The template for displaying all single posts.
 *
 * @package Gazette
 */

get_header(); ?>

	<div class="site-content-inner">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

					<?php
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'gazette' ) . '</span> ' . '<span class="screen-reader-text">' . __( 'Next post:', 'gazette' ) . '</span> ' . '<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'gazette' ) . '</span> ' . '<span class="screen-reader-text">' . __( 'Previous post:', 'gazette' ) . '</span> ' . '<span class="post-title">%title</span>',
				) );
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div><!-- .site-content-inner -->

<?php get_footer(); ?>
