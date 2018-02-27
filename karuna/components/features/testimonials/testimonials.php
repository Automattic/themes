<?php
	$testimonials = new WP_Query( array(
		'post_type'      => 'jetpack-testimonial',
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
		'posts_per_page' => 2,
		'no_found_rows'  => true,
	) );
?>

<?php if ( $testimonials->have_posts() ) : ?>
	<div id="front-page-testimonials" class="front-testimonials testimonials">
		<div class="grid-row">
		<?php
			while ( $testimonials->have_posts() ) : $testimonials->the_post();
				 get_template_part( 'components/features/testimonials/content', 'testimonials' );
			endwhile;
			wp_reset_postdata();
		?>
		</div>
	</div>
<?php endif; ?>