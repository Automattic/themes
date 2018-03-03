<?php
/**
 * The template for displaying the Testimonials archive page.
 *
 * @package Ixion
 */

get_header(); ?>

	<?php $jetpack_options = get_theme_mod( 'jetpack_testimonials' ); ?>

	<?php if ( '' != $jetpack_options['page-content'] ) : // only display if content not empty ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
					if ( isset( $jetpack_options['page-title'] ) && '' != $jetpack_options['page-title'] ) {
						echo esc_html( $jetpack_options['page-title'] );
					}
					else {
						esc_html_e( 'Testimonials', 'ixion' );
					}
				?>
			</h1>
			<div class="taxonomy-description">
				<?php echo convert_chars( convert_smilies( wptexturize( wp_kses_post( $jetpack_options['page-content'] ) ) ) ); ?>
			</div>
		</header>
	<?php endif; ?>

	<?php if ( have_posts() ) : ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="testimonials">
					<div class="grid-sizer"></div>
					<div class="gutter-sizer"></div>
					<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'components/features/testimonials/content', 'testimonials' ); ?>
					<?php endwhile; ?>
				</div>
			</main>
		</div>
	<?php
		the_posts_navigation();
		endif;
		wp_reset_postdata();
	?>

<?php get_footer(); ?>
