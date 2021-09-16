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
	'content'    => '<!-- wp:pullquote {"backgroundColor":"primary","textColor":"background"} -->
	<figure class="wp-block-pullquote has-background-color has-primary-background-color has-text-color has-background"><blockquote><p>“' . esc_html( 'Amazonite, Ametrine, Beryl, Dioptase, Howlite, Jade, and Ruby.', 'geologist' ) . '”</p><cite>Sarah Edwards</cite></blockquote></figure>
	<!-- /wp:pullquote -->',
);
