<?php
/**
 * Layout with two images and text
 */
return array(
	'title'      => __( 'Layout with two images and text', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/uxmal2.jpg","mediaType":"image","backgroundColor":"foreground","textColor":"background"} -->
	<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile has-background-color has-foreground-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/uxmal2.jpg" alt="' . __( 'Photo of the Governors Palace at Uxmal', 'archeo' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"fontSize":"medium"} -->
	<p class="has-medium-font-size" style="font-style:normal;font-weight:100">' . wp_kses_post( __( 'Palais Du Gouverneur, <br>à Uxmal', 'archeo' ) ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/desire-charnay.jpg" alt="' . __( 'Photograph by Désiré Charnay, 1862 to 1863', 'archeo' ) . '"/><figcaption><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-background-color"><em>' . __( 'Photograph by Désiré Charnay, 1862 – 1863', 'archeo' ) . '</em></mark></figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:spacer {"height":"34vw"} -->
	<div style="height:34vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph -->
	<p>' . __( 'Uxmal is an ancient Maya city located in present-day Mexico. It is considered one of the most important archaeological sites of Maya culture.', 'archeo' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:media-text -->',
);