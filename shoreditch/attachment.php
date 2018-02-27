<?php
/**
 * The template for displaying all attachments.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#attachment
 *
 * @package Shoreditch
 */

get_header(); ?>

	<div class="site-content-wrapper">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'attachment' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// Show a link back to post
				the_post_navigation( array(
					'prev_text' => '<span class="meta-nav">' . esc_html__( 'Published in', 'shoreditch' ) . '</span> ' . '<span class="post-title">%title</span>',
				) );

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- .site-content-wrapper -->

<?php
get_sidebar( 'footer' );
get_footer();
