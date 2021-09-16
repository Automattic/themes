<?php
/**
 * Two posts with features images in a query block.
 *
 * @package Geologist
 */

return array(
	'title'      => __( 'Quote', 'geologist' ),
	'categories' => array( 'geologist' ),
	'blockTypes' => array( 'core/quote' ),
	'content'    => '<!-- wp:quote -->
	<blockquote class="wp-block-quote"><p>' . esc_html__( 'Amazonite, Ametrine, Beryl, Dioptase, Howlite, Jade, and Ruby.', 'geologist' ) . '”</p><cite>' . __( 'Sarah Edwards' ) . '</cite></blockquote>
	<!-- /wp:quote -->',
);
