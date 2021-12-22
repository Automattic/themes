<?php
/**
 * Footer with Search Block
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Footer with Search Block', 'blockbase' ),
	'categories' => array( 'blockbase' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}}} -->
		<div class="wp-block-group" style="padding-top:80px;padding-bottom:30px">
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"30px"}}}} -->
			<div class="wp-block-group" style="padding-bottom:30px"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","className":"is-style-small-search"} /--></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Proudly Powered by <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
