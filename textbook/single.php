<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TextBook
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'components/post/content', get_post_format() );

			the_post_navigation( array(
				'prev_text'          => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'textbook' ) . '</span> <span class="meta-title">%title</span>',
				'next_text'          => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'textbook' ) . '</span> <span class="meta-title">%title</span>'
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop. ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php
get_sidebar();
get_footer();
