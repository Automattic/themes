<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Radcliffe 2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
			<div class="post-nav-wrapper">
				<?php
				the_post_navigation( array(
					'next_text' => wp_kses( __( '<span class="meta-nav">Next</span> %title', 'radcliffe-2' ), array( 'span' => array( 'class' => array() ) ) ),
					'prev_text' => wp_kses( __( '<span class="meta-nav">Previous</span> %title', 'radcliffe-2' ), array( 'span' => array( 'class' => array() ) ) )
				) );
				?>
			</div><!-- .post-nav-wrapper -->
		<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
