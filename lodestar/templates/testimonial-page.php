<?php
/**
 * Template Name: Testimonial Template
 *
 * The template for displaying Testimonials.
 *
 * @package Lodestar
 */
get_header(); ?>


<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) :

				while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'components/page/content', 'page' ); ?>

					<?php
					$testimonial_query = new WP_Query( array(
						'post_type'      => 'jetpack-testimonial',
						'order'          => 'ASC',
						'orderby'        => 'order',
						'posts_per_page' => 24,
						'no_found_rows'  => true,
					) );
					?>

					<?php if ( $testimonial_query->have_posts() ) : ?>
						<div class="testimonials">

							<?php
							while ( $testimonial_query -> have_posts() ) : $testimonial_query -> the_post();
								get_template_part( 'components/features/testimonials/content', 'testimonials' );
							endwhile;
							?>

						</div><!-- .testimonials -->

						<?php
					endif;
					wp_reset_postdata();
					?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>


				<?php endwhile; // End of the loop. ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->
<?php
get_footer();
