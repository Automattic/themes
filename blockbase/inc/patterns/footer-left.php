<?php
/**
 * Left aligned footer
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Left aligned footer', 'blockbase' ),
	'categories' => array( 'blockbase' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull" style="padding-top:30px;padding-bottom:30px">
	<!-- wp:navigation {"fontSize":"small"} /-->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:site-title {"fontSize":"small"} /-->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-text-align-left has-small-font-size">Proudly Powered by <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
