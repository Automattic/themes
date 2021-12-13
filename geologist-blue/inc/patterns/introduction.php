<?php
/**
 * Two posts with features images in a query block.
 *
 * @package Geologist
 */

return array(
	'title'      => __( 'Introduction', 'geologist' ),
	'categories' => array( 'geologist' ),
	'content'    => '<!-- wp:heading {"level":3} -->
	<h3>' . esc_html__( "Geologist is a blog dedicated to everything buried under the earth's surface.", 'geologist' ) . '</h3>
	<!-- /wp:heading -->',
);
