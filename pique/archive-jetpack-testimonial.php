<?php
/**
 * The template for displaying the Testimonials archive page.
 *
 * @package Pique
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php $jetpack_options = get_theme_mod( 'jetpack_testimonials' ); ?>
				<header class="page-header">
					<?php if ( '' !== $jetpack_options['page-title'] ) : // only display if title not empty ?>
						<h1 class="page-title">
							<?php echo esc_html( $jetpack_options['page-title'] ); ?>
						</h1>
					<?php endif; ?>
					<?php if ( '' !== $jetpack_options['page-content'] ) : // only display if content not empty ?>
						<div class="taxonomy-description">
							<?php echo convert_chars( convert_smilies( wptexturize( wp_kses_post( $jetpack_options['page-content'] ) ) ) ); ?>
						</div>
					<?php endif; ?>
				</header>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'components/content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php
						the_posts_navigation();
					endif;
				?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_footer(); ?>
