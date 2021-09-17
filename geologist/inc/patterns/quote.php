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
	<figure class="wp-block-pullquote has-background-color has-primary-background-color has-text-color has-background"><blockquote class="has-text-color has-background-color"><p>“Amazonite, Ametrine, Beryl, Dioptase, Howlite, Jade, and Ruby.”</p><cite>Sarah Edwards</cite></blockquote></figure>
	<!-- /wp:pullquote -->'
);
