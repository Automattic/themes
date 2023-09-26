<?php
/**
 * Title: Two columns of text and image
 * Slug: peirao/text-image
 * Categories: featured, text
 */
?>

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.12"}},"fontSize":"xx-large"} -->
		<p class="has-xx-large-font-size" style="font-style:normal;font-weight:600;line-height:1.12"><?php echo esc_html__( 'Rúa Ervedelo, 212, 37820 Ourense', 'peirao' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>01234567890 &middot; <a href="mailto:info@example.com">info@example.com</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Opening Times', 'peirao' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list -->
			<ul><!-- wp:list-item -->
				<li><?php echo esc_html__( 'Monday - Wednesday: Noon - 12am', 'peirao' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Thursday - Saturday: Noon - 1am', 'peirao' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Sunday: Noon - 11pm', 'peirao' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html__( 'Please note that the last seating for food is 11 pm Monday – Saturday and 10 pm on Sundays.', 'peirao' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"align":"center","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default-filter"}}} -->
		<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-6750658-original.png" alt="" class="" style="object-fit:cover"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
