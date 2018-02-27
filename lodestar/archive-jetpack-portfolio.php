<?php
/**
* The template for displaying the Portfolio archive page.
 *
 * @package Lodestar
 */
get_header();

$jetpack_portfolio_content = get_option( 'jetpack_portfolio_content' ); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main class="site-main" role="main">

		<?php
			if ( have_posts() ) {
				get_template_part( 'components/features/portfolio/content', 'portfolio-archive' );
			} else {
				get_template_part( 'template-parts/content', 'none' );
			}
		?>

		<?php
			the_posts_navigation( array(
				'prev_text'          => esc_html__( 'Older projects', 'lodestar' ),
				'next_text'          => esc_html__( 'Newer projects', 'lodestar' ),
				'screen_reader_text' => esc_html__( 'Portfolio navigation', 'lodestar' ),
			) );
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php
get_footer();
