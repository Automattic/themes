<?php
/**
 * The template for a static front page
 *
 * @package Karuna
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'components/page/content', 'page' ); ?>
			<?php endwhile; ?>

			<?php get_template_part( 'components/features/testimonials/testimonials' ); ?>

			<?php if ( (bool) 1 === (bool) get_theme_mod( 'karuna_display_recent_posts', 1 ) ) {
				get_template_part( 'components/features/recent-posts/recent-posts' );
			} ?>
		</main>
	</div>

<?php get_footer(); ?>

<?php endif; ?>
