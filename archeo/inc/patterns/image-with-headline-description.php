<?php
/**
 * Image with headline and description
 */
return array(
	'title'      => __( 'Image with headline and description', 'archeo' ),
	'categories' => array( 'featured', 'images' ),
	'content'    => '<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:media-text {"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/chahk.gif","mediaType":"image","mediaWidth":64,"verticalAlignment":"top","className":"remove-outer-spacing"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-top remove-outer-spacing" style="grid-template-columns:64% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/chahk.gif" alt="' . esc_attr__( 'Chahk: rain deity', 'archeo' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textAlign":"right","style":{"typography":{"fontSize":"clamp(64px, 6vw, 100px)","lineHeight":"1","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"48px"}}}} -->
	<h2 class="has-text-align-right" id="chahk-raindeity" style="font-size:clamp(64px, 6vw, 100px);line-height:1;margin-bottom:48px;text-transform:uppercase">' . wp_kses_post( __( 'Chahk:<br>Rain<br>deity', 'archeo' ) ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":""} -->
	<div class="wp-block-column"><!-- wp:paragraph {"align":"right","fontSize":"small"} -->
	<p class="has-text-align-right has-small-font-size">' . esc_html__( 'Chaahk is shown here clutching his axe, ready to strike rain and thunder from the clouds. This sculpture was likely created in the Puuc hills of Yucatan and Campeche.', 'archeo' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
);
