<?php
/**
 * @package Dara
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

get_header(); ?>

	<div id="primary" class="content-area front-page-content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'components/page/content', 'page' ); ?>

			<?php // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>
		<?php endwhile; ?>
	</div><!-- #primary -->

	<?php dara_featured_pages(); ?>

	<?php
		$orderby = get_theme_mod( 'dara_testimonials', false );

		if ( true == $orderby ) {
			$orderby = 'rand';
		}
		else {
			$orderby = 'date';
		}

		$testimonials = new WP_Query( array(
			'post_type'      => 'jetpack-testimonial',
			'order'          => 'DESC',
			'orderby'        => $orderby,
			'posts_per_page' => 2,
			'no_found_rows'  => true,
		) );
	?>

	<?php if ( $testimonials->have_posts() ) : ?>
	<div id="front-page-testimonials" class="front-testimonials testimonials">
		<div class="grid-row">
		<?php
			while ( $testimonials->have_posts() ) : $testimonials->the_post();
				 get_template_part( 'components/testimonials/content', 'testimonial' );
			endwhile;
			wp_reset_postdata();
		?>
		</div>
	</div><!-- .testimonials -->
	<?php endif; ?>

<?php get_sidebar( 'footer' ); ?>
<?php get_footer();

endif;
