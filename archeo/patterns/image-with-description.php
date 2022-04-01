<?php
/**
 * Title: Image with description
 * Slug: archeo/image-with-description
 * Categories: images
 */
?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%">
		<!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph -->
		<p><?php _e( 'Ancient Temple, at Chichen-Itza, called the Castle', 'archeo' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="font-style:italic;font-weight:400"><?php _e( 'From "American Cities and Ruins: Mitla, Palenqué, Izamal, Chichen-Itza, Uxmal, Atlas" housed at the New York Public Library.', 'archeo' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ancien-temple.jpg" alt="<?php _e( 'Photo of ancient temple, at Chichen-Itza', 'archeo' ); ?>"/></figure>
		<!-- /wp:image -->
	</div><!-- /wp:column -->
</div><!-- /wp:columns -->
