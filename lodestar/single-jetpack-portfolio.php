<?php
/**
 * The Template for displaying all single portfolio posts
 *
 * @package Lodestar
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">

		<?php while ( have_posts() ) : the_post();

			get_template_part( 'components/features/portfolio/content', 'portfolio-single' );

			the_post_navigation( array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous Project', 'lodestar' ) . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Project', 'lodestar' ) . '</span> <span class="nav-title">%title</span>',
			) );

			comments_template();

		endwhile; // end of the loop. ?>

	</div><!-- #primary .content-area -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->
<?php
get_footer();
