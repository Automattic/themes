<?php
/**
 * Small footer
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Small footer', 'blockbase' ),
	'categories' => array( 'blockbase' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
		<div class="wp-block-group" style="padding-top:20px;padding-bottom:20px">
			<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
			<p class="has-text-align-center has-small-font-size">Proudly Powered by <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
