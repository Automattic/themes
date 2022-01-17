<?php
/**
 * Footer with Site Title
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Footer with site title', 'blockbase' ),
	'categories' => array( 'blockbase' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group">
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}}} -->
		<div class="wp-block-group" style="padding-top:80px;padding-bottom:30px">
			<!-- wp:site-title /-->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Proudly Powered by <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
