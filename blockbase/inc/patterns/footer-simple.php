<?php
/**
 * Simple footer
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Simple footer', 'blockbase' ),
	'categories' => array( 'blockbase' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","right":"0px","bottom":"30px","left":"0px"}}}} -->
		<div class="wp-block-group" style="padding-top:80px;padding-right:0px;padding-bottom:30px;padding-left:0px">
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Proudly Powered by <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
