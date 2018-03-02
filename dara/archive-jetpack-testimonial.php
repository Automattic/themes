<?php
/**
 * The template for displaying the Testimonials archive page.
 *
 * @package Dara
 */

get_header(); ?>

	<?php $jetpack_options = get_theme_mod( 'jetpack_testimonials' ); ?>

	<?php if ( isset( $jetpack_options['featured-image'] ) && '' != $jetpack_options['featured-image'] ) : ?>
		<div class="entry-thumbnail">
			<?php echo wp_get_attachment_image( (int)$jetpack_options['featured-image'], 'dara-page-thumbnail' ); ?>
		</div><!-- .thumbnail -->
	<?php endif; ?>

	<div class="content-wrapper <?php echo dara_additional_class(); ?>">
		<div id="primary" class="content-area testimonials-content-area">
			<div id="main" class="site-main testimonials" role="main">
				<article class="hentry">
					<header class="entry-header">
						<h1 class="entry-title">
							<?php
							if ( isset( $jetpack_options['page-title'] ) && '' != $jetpack_options['page-title'] )
								echo esc_html( $jetpack_options['page-title'] );
							else
								esc_html_e( 'Testimonials', 'dara' );
							?>
						</h1>
					</header><!-- .entry-header -->

                    <?php echo convert_chars( convert_smilies( wptexturize( wp_kses_post( $jetpack_options['page-content'] ) ) ) ); ?>
				</article><!-- .hentry -->

				<div id="testimonials">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'components/testimonials/content', 'testimonial' ); ?>
						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>
					<?php else : ?>
						<?php get_template_part( 'components/post/content', 'none' ); ?>
					<?php endif; ?>
				</div><!-- #testimonials .grid -->
			</div><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div><!-- .content-wrapper -->
<?php get_footer(); ?>
