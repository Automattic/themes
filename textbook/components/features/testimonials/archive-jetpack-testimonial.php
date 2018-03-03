<?php
/**
 * The template for displaying the Testimonials archive page.
 *
 * @package Components
 */

get_header(); ?>

	<?php $jetpack_options = get_theme_mod( 'jetpack_testimonials' ); ?>

	<?php if ( isset( $jetpack_options['featured-image'] ) && '' != $jetpack_options['featured-image'] ) : ?>
		<div class="components-hero">
			<?php echo wp_get_attachment_image( (int)$jetpack_options['featured-image'], 'components-hero' ); ?>
		</div><!-- .hero -->
	<?php endif; ?>

	<?php if ( '' != $jetpack_options['page-content'] ) : // only display if content not empty ?>

	<div class="content-wrapper">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<header class="entry-header">
					<h1 class="entry-title">
						<?php
							if ( isset( $jetpack_options['page-title'] ) && '' != $jetpack_options['page-title'] )
								echo esc_html( $jetpack_options['page-title'] );
							else
								esc_html_e( 'Testimonials', 'textbook' );
						?>
					</h1>
				</header><!-- .entry-header -->

				<article class="hentry">
					<div class="entry-content">
						<?php echo convert_chars( convert_smilies( wptexturize( wp_kses_post( $jetpack_options['page-content'] ) ) ) ); ?>
					</div>
				</article>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .content-wrapper -->

	<?php endif; ?>

	<?php if ( have_posts() ) : ?>

		<div id="grid-view" class="grid-area">
			<div class="grid-wrapper clear">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="grid">
						<?php get_template_part( 'components/features/testimonials/content', 'testimonials' ); ?>
					</div><!-- .grid -->

				<?php endwhile; ?>

			</div><!-- .grid-wrapper -->
		</div><!-- #quaternary -->

	<?php the_posts_navigation(); ?>

	<?php endif;
		wp_reset_postdata(); ?>

<?php get_footer(); ?>
