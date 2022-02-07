<?php
/**
 * Image with headline and description
 */
return array(
	'title'      => __( 'Image with headline and description', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5vw","right":"5vw","bottom":"5vw","left":"5vw"}}}} -->
	<div class="wp-block-group alignfull" style="padding-top:5vw;padding-right:5vw;padding-bottom:5vw;padding-left:5vw"><!-- wp:media-text {"mediaPosition":"right","mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/chahk.jpg","mediaType":"image","mediaWidth":64,"verticalAlignment":"top"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top" style="grid-template-columns:auto 64%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/chahk.jpg" alt="' . esc_attr__( 'Chahk: rain deity', 'archeo' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"-0.02em","lineHeight":"1","fontStyle":"normal","fontWeight":"100","fontSize":"min(max(64px, 5vw), 100px)"}}} -->
	<p style="font-size:min(max(64px, 5vw), 100px);font-style:normal;font-weight:100;line-height:1;letter-spacing:-0.02em">' . wp_kses_post( __( 'CHAHK:<br>RAIN<br>DEITY', 'archeo' ) ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">' . wp_kses_post( __( 'Chaahk is shown here clutching <br>his axe, ready to strike rain <br>thunder and rain from the <br>clouds. This sculpture was <br>likely created in the Puuc hills<br>of Yucatan and Campeche.', 'archeo' ) ) . '</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
);
