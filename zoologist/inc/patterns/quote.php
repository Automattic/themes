<?php
/**
 * Two posts with features images in a query block.
 *
 * @package Zoologist
 */

return array(
	'title'      => __( 'Quote', 'zoologist' ),
	'categories' => array( 'zoologist' ),
	'blockTypes' => array( 'core/pullquote' ),
	'content'    => '<!-- wp:pullquote {"textColor":"background","className":"has-background-color has-primary-background-color has-text-color has-background"} -->
	<figure class="wp-block-pullquote has-background-color has-primary-background-color has-text-color has-background"><blockquote class="has-text-color has-background-color"><p>“' . esc_html__( 'Amazonite, Ametrine, Beryl, Dioptase, Howlite, Jade, and Ruby.', 'zoologist' ) . '”</p><cite>' . esc_html__( 'Sarah Edwards', 'zoologist' ) . '</cite></blockquote></figure>
	<!-- /wp:pullquote -->'
);
