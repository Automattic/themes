<?php
/**
 * The template for displaying the Testimonials archive page.
 *
 * @package Shoreditch
 */

get_header();

if ( have_posts() ) :

$jetpack_options = get_theme_mod( 'jetpack_testimonials' ); ?>

	<?php if ( isset( $jetpack_options['featured-image'] ) && '' != $jetpack_options['featured-image'] ) : ?>
		<div class="entry-hero" <?php shoreditch_testimonials_image(); ?>>
			<div class="entry-hero-wrapper">
				<?php shoreditch_testimonials_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div><!-- .entry-hero-wrapper -->
		</div><!-- .entry-hero -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<?php
				if ( ! isset( $jetpack_options['featured-image'] ) || '' == $jetpack_options['featured-image'] ) {
					shoreditch_testimonials_title( '<h1 class="page-title">', '</h1>' );
				}

				shoreditch_testimonials_content( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="hentry-wrapper">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'testimonial' );

				endwhile; // End of the loop.
				?>
			</div><!-- .hentry-wrapper -->

			<?php
			the_posts_navigation( array(
				'prev_text'          => esc_html__( 'Older testimonials', 'shoreditch' ),
				'next_text'          => esc_html__( 'Newer testimonials', 'shoreditch' ),
				'screen_reader_text' => esc_html__( 'Testimonials navigation', 'shoreditch' ),
			) );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar( 'footer' );
get_footer();

else : ?>

	<div class="site-content-wrapper">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- .site-content-wrapper -->

<?php
get_sidebar( 'footer' );
get_footer();

endif;
