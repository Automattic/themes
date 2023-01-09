<?php
/**
 * Footer with menu
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Footer with menu', 'blockbase' ),
	'categories' => array( 'blockbase' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex"}} -->
	<div class="wp-block-group"><!-- wp:site-title {"fontSize":"small"} /-->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><meta charset="utf-8">Proudly Powered by <a rel="nofollow" href="https://wordpress.org">WordPress</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":"true","orientation":"horizontal"}} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
