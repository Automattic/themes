<?php
/**
 * Headline over dark image
 */
return array(
	'title'      => __( 'Headline over dark image', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/uxmal.jpg","dimRatio":70,"overlayColor":"foreground","minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full"} -->
	<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left" style="min-height:100vh"><span aria-hidden="true" class="has-foreground-background-color has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'TBD', 'archeo' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/uxmal.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"100","lineHeight":"1"}},"textColor":"white","fontSize":"huge"} -->
	<p class="has-text-align-left has-white-color has-text-color has-huge-font-size" style="font-style:normal;font-weight:100;line-height:1;text-transform:uppercase">' . wp_kses_post( __( 'Palais Du <br>Gouverneur, <br>à Uxmal, <br>detail de la <br>Porte Principale', 'archeo' ) ) . '</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover -->',
);
