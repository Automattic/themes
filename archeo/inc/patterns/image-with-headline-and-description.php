<?php
/**
 * Image with headline and separate description
 */
return array(
	'title'      => __( 'Image with headline and separate description', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/pyramid.jpg","mediaType":"image","mediaWidth":56} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 56%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/pyramid.jpg" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"-0.02em","lineHeight":"1","textTransform":"uppercase","fontStyle":"normal","fontWeight":"100"}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="font-style:normal;font-weight:100;line-height:1;text-transform:uppercase;letter-spacing:-0.02em">' . wp_kses_post( __( 'Maison<br>Du Nain<br>à Uxmal', 'archeo' ) ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">' . wp_kses_post( __( 'Also referred to as <br>The Pyramid of the Magician', 'archeo' ) ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">' . __( 'The pyramid is the tallest structure in Uxmal. Construction on the pyramid began around the 6th century AD. It was added and iterated on for the next 400 years.', 'archeo' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->',
);
