<?php
/**
 * Title: Layout with two images and text
 * Slug: archeo/layout-with-two-images-and-text
 * Categories: featured, images
 */
?>

<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaLink":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/uxmal.jpg","mediaType":"image","imageFill":true,"focalPoint":{"x":"0.50","y":"0.90"},"backgroundColor":"foreground","textColor":"background"} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill has-background-color has-foreground-background-color has-text-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/uxmal.jpg);background-position:50% 90%"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/uxmal.jpg" alt="<?php _e( 'Photo of the Pyramid of the Magician, at Uxmal', 'archeo' ); ?>"/></figure><div class="wp-block-media-text__content">
	<!-- wp:columns --><div class="wp-block-columns">
		<!-- wp:column --><div class="wp-block-column">
			<!-- wp:spacer {"height":"min(10rem, 10vw)"} -->
			<div style="height:min(10rem, 10vw)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"100","lineHeight":"1.2"}},"fontSize":"medium"} -->
			<p class="has-medium-font-size" style="font-style:normal;font-weight:100;line-height:1.2"><?php echo wp_kses_post( __( 'The Pyramid of the <br>Magician at Uxmal', 'archeo' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"align":"left","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image alignleft size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pyramid.jpg" alt="<?php _e( 'Photograph by Désiré Charnay, 1862 to 1863', 'archeo' ); ?>"/><figcaption><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-background-color"><em><?php _e( 'Photograph by Désiré Charnay, 1862 – 1863', 'archeo' ); ?></em></mark></figcaption></figure>
			<!-- /wp:image -->
		</div><!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:spacer {"height":"min(43rem, 43vw)"} -->
			<div style="height:min(43rem, 43vw)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="line-height:1.5"><?php _e( 'Uxmal is an ancient Maya city located in present-day Mexico. It is considered one of the most important archaeological sites of Mayan culture.', 'archeo' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="line-height:1.5"><em><?php _e( 'On the right: Governor\'s Palace, detail of the main gate', 'archeo' ); ?></em></p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"min(10rem, 10vw)"} -->
			<div style="height:min(10rem, 10vw)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</div><!-- /wp:column -->
	</div><!-- /wp:columns -->
</div></div><!-- /wp:media-text -->
