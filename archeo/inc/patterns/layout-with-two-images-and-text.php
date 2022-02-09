<?php
/**
 * Layout with two images and text
 */
return array(
	'title'      => __( 'Layout with two images and text', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/uxmal2.jpg","mediaType":"image","imageFill":true,"focalPoint":{"x":"0.50","y":"0.90"},"backgroundColor":"foreground","textColor":"background"} -->
	<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill has-background-color has-foreground-background-color has-text-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/uxmal2.jpg);background-position:50% 90%"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/uxmal2.jpg" alt="' . __( 'Photo of the Governors Palace at Uxmal', 'archeo' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"100","lineHeight":"1.2"}},"fontSize":"medium"} -->
	<p class="has-medium-font-size" style="font-style:normal;font-weight:100;line-height:1.2">' . wp_kses_post( __( 'Palais Du Gouverneur, <br>à Uxmal', 'archeo' ) ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:image {"align":"left","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="alignleft size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/desire-charnay.jpg" alt="' . __( 'Photograph by Désiré Charnay, 1862 to 1863', 'archeo' ) . '"/><figcaption><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-background-color"><em>' . __( 'Photograph by Désiré Charnay, 1862 – 1863', 'archeo' ) . '</em></mark></figcaption></figure></div>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:spacer {"height":"min(34rem, 34vw)"} -->
	<div style="height:min(34rem, 34vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.5">' . __( 'Uxmal is an ancient Maya city located in present-day Mexico. It is considered one of the most important archaeological sites of Maya culture.', 'archeo' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"min(10rem, 10vw)"} -->
	<div style="height:min(10rem, 10vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:media-text -->',
);