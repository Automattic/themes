<?php
/**
 * Title: Image with headline and separate description
 * Slug: archeo/image-with-headline-separate-description
 * Categories: images
 */
?>

<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaLink":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pyramid.jpg","mediaType":"image","mediaWidth":56,"imageFill":true,"focalPoint":{"x":"0.50","y":"0.28"}} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill" style="grid-template-columns:auto 56%"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pyramid.jpg);background-position:50% 28.000000000000004%"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pyramid.jpg" alt="<?php esc_attr_e( 'Photo of House of the dwarf, in Uxmal', 'archeo' ); ?>"/></figure><div class="wp-block-media-text__content">
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"-0.02em","lineHeight":"1","textTransform":"uppercase","fontStyle":"normal","fontWeight":"100"}},"fontSize":"huge"} -->
	<p class="has-huge-font-size" style="font-style:normal;font-weight:100;line-height:1;text-transform:uppercase;letter-spacing:-0.02em"><?php echo wp_kses_post( __( 'House of <br>the dwarf <br>in Uxmal', 'archeo' ) ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"min(26rem, 26vw)","bottom":"min(6rem, 6vw)"}}}} -->
	<div class="wp-block-group" style="padding-top:min(26rem, 26vw);padding-bottom:min(6rem, 6vw)">
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo wp_kses_post( __( 'Also referred to as <br>The Pyramid of the Magician', 'archeo' ) ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php _e( 'The pyramid is the tallest structure in Uxmal. Construction on the pyramid began around the 6th century AD. It was added and iterated on for the next 400 years.', 'archeo' ); ?></p>
		<!-- /wp:paragraph -->
	</div><!-- /wp:group -->
</div></div><!-- /wp:media-text -->
