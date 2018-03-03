<?php
/**
 * The template for displaying the Testimonials archive page.
 *
 * @package Karuna
 */

get_header(); ?>

	<?php $jetpack_options = get_theme_mod( 'jetpack_testimonials' ); ?>

	<?php if ( '' != $jetpack_options['page-content'] ) : // only display if content not empty ?>

	<div class="content-wrapper">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<header class="entry-header">
					<h1 class="entry-title">
						<?php
							if ( isset( $jetpack_options['page-title'] ) && '' != $jetpack_options['page-title'] ) {
								echo esc_html( $jetpack_options['page-title'] );
							}
							else {
								esc_html_e( 'Testimonials', 'karuna' );
							}
						?>
					</h1>
				</header>
				<article class="hentry testimonials-hentry">
					<div class="entry-content">
						<?php echo convert_chars( convert_smilies( wptexturize( wp_kses_post( $jetpack_options['page-content'] ) ) ) ); ?>
					</div>
				</article>

			</main>
		</div>
	</div>
	<?php endif; ?>

	<?php if ( have_posts() ) : ?>

		<div class="front-testimonials testimonials">
			<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'components/features/testimonials/content', 'testimonials' ); ?>
			<?php endwhile; ?>
		</div>
	<?php
		the_posts_navigation();
		endif;
		wp_reset_postdata();
	?>

<?php get_footer(); ?>