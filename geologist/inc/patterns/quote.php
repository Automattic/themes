<?php
/**
 * Two posts with features images in a query block.
 *
 * @package Geologist
 */

return array(
	'title'      => __( 'Quote', 'geologist' ),
	'categories' => array( 'geologist' ),
	'blockTypes' => array( 'core/pullquote' ),
	'content'    => '<!-- wp:pullquote {"textColor":"background","className":"has-background-color has-primary-background-color has-text-color has-background"} -->
	<figure class="wp-block-pullquote has-background-color has-primary-background-color has-text-color has-background"><blockquote class="has-text-color has-background-color"><p>“' . esc_html__( 'Amazonite, Ametrine, Beryl, Dioptase, Howlite, Jade, and Ruby.', 'geologist' ) . '”</p><cite>' . esc_html__( 'Sarah Edwards', 'geologist' ) . '</cite></blockquote></figure>
	<!-- /wp:pullquote -->'
);
