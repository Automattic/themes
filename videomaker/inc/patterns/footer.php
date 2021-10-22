<?php
/**
 * Footer
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Footer', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column">
	<!-- wp:navigation {"orientation":"vertical","__unstableLocation":"footer","style":{"typography":{"lineHeight":"1"}}} /-->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":1.4}},"fontSize":"extra-small"} -->
	<p class="has-text-align-right has-extra-small-font-size" style="line-height:1.4">'. esc_html__( '© Gary Han 2021', 'videomaker' ) . '<br>' . esc_html__( 'Creative Director', 'videomaker' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
