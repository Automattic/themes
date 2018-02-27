<?php
/**
 * Template Name: Portfolio Template
 *
 * The template for displaying Portfolio Projects.
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
				get_template_part( 'components/features/portfolio/content', 'portfolio-template' );
			} else {
				get_template_part( 'template-parts/content', 'none' );
			}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php
get_footer();
