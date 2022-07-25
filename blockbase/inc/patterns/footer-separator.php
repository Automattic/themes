<?php
/**
 * Footer with menu and separator
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Footer with menu and separator', 'blockbase' ),
	'categories' => array( 'blockbase' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group" style="padding-top:60px"><!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"20px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="padding-bottom:20px"><!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><meta charset="utf-8"><strong>Proudly Powered by <a rel="nofollow" href="https://wordpress.org">WordPress</a></strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:navigation {"itemsJustification":"center","overlayMenu":"never","className":"social-links"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
