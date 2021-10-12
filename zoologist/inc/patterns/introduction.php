<?php
/**
 * Two posts with features images in a query block.
 *
 * @package Zoologist
 */

return array(
	'title'      => __( 'Introduction', 'zoologist' ),
	'categories' => array( 'zoologist' ),
	'blockTypes' => array( 'core/cover', 'core/header' ),
	'content'    => '<!-- wp:heading {"level":3} -->
	<h3>' . esc_html__( "Zoologist is a blog dedicated to everything buried under the earth's surface.", 'zoologist' ) . '</h3>
	<!-- /wp:heading -->',
);
