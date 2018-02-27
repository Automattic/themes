<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AltoFocus
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'components/post/content', 'single' );

			the_post_navigation( array(
				'prev_text' => '%title <span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'altofocus' ) . '</span>',
				'next_text' => '%title <span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'altofocus' ) . '</span>'
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main>
	</div>
<?php
get_sidebar();
get_footer();
