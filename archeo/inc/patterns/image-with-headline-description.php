<?php
/**
 * Image with headline and description
 */
return array(
	'title'      => __( 'Image with headline and description', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"5vw","bottom":"0","left":"5vw"}}}} -->
	<div class="wp-block-group alignfull" style="padding-top:0;padding-right:5vw;padding-bottom:0;padding-left:5vw"><!-- wp:media-text {"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/chahk.png","mediaType":"image","mediaWidth":64,"verticalAlignment":"top"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-top" style="grid-template-columns:64% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/chahk.png" alt="' . esc_attr__( 'Chahk: rain deity', 'archeo' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textAlign":"right","style":{"typography":{"fontSize":"clamp(64px, 6vw, 100px)","lineHeight":"1","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"48px"}}}} -->
	<h2 class="has-text-align-right" id="chahk-raindeity" style="font-size:clamp(64px, 6vw, 100px);line-height:1;margin-bottom:48px;text-transform:uppercase">' . wp_kses_post( __( 'Chahk:<br>Rain<br>deity', 'archeo' ) ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"right","fontSize":"small"} -->
	<p class="has-text-align-right has-small-font-size">' . wp_kses_post( __( 'Chaahk is shown here clutching <br>his axe, ready to strike rain <br>thunder and rain from the <br>clouds. This sculpture was <br>likely created in the Puuc hills<br>of Yucatan and Campeche.', 'archeo' ) ) . '</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
);
