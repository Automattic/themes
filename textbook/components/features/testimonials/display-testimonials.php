<?php
	$testimonials = new WP_Query( array(
		'post_type'      => 'jetpack-testimonial',
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
		'posts_per_page' => 5,
		'no_found_rows'  => true,
	) );

	$jetpack_options = get_theme_mod( 'jetpack_testimonials' );
?>

<?php if ( $testimonials->have_posts() ) : ?>
	<div id="front-page-testimonials" class="front-testimonials testimonials">
		<div class="grid-row testimonials-inner">
			<header class="testimonials-header">
				<h2 class="testimonials-title">
					<?php
						if ( isset( $jetpack_options['page-title'] ) && '' != $jetpack_options['page-title'] )
							echo esc_html( $jetpack_options['page-title'] );
						else
							esc_html_e( 'Testimonials', 'textbook' );
					?>
				</h2>
				<div class="testimonials-content">
					<?php echo convert_chars( convert_smilies( wptexturize( stripslashes( wp_filter_post_kses( addslashes( $jetpack_options['page-content'] ) ) ) ) ) ); ?>
				</div>
			</header><!-- .entry-header -->

			<div class="testimonials-carousel flexslider">
				<div class="slides">
				<?php
					while ( $testimonials->have_posts() ) : $testimonials->the_post();
						 get_template_part( 'components/features/testimonials/content', 'testimonials' );
					endwhile;
					wp_reset_postdata();
				?>
				</div>
			</div>
		</div>
	</div><!-- .testimonials -->
<?php endif; ?>