<?php
/**
 * The template for displaying the Testimonials archive page.
 *
 * @package Lodestar
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php $jetpack_options = get_theme_mod( 'jetpack_testimonials' ); ?>

			<?php if ( isset( $jetpack_options['featured-image'] ) && '' !== $jetpack_options['featured-image'] ) : ?>
				<div class="lodestar-hero">
					<?php echo wp_get_attachment_image( ( int ) $jetpack_options['featured-image'], 'lodestar-featured-image' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( '' !== $jetpack_options['page-content'] ) : // only display if content not empty ?>

				<header class="entry-header">
					<h1 class="entry-title">
						<?php
							if ( isset( $jetpack_options['page-title'] ) && '' !== $jetpack_options['page-title'] ) {
								echo esc_html( $jetpack_options['page-title'] );
							} else {
								esc_html_e( 'Testimonials', 'lodestar' );
							}
						?>
					</h1>
				</header>
				<article class="hentry">
					<div class="entry-content">
						<?php echo convert_chars( convert_smilies( wptexturize( wp_kses_post( $jetpack_options['page-content'] ) ) ) ); ?>
					</div>
				</article>

			<?php endif; ?>

			<?php if ( have_posts() ) : ?>

				<div class="testimonials">

					<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'components/features/testimonials/content', 'testimonials' );
						endwhile;
					?>

				</div><!-- .testimonials -->
			<?php
				the_posts_navigation();
				endif;
				wp_reset_postdata();
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->
<?php
get_footer();
