<?php
/**
 * Footer with a vertical menu
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Footer with a vertical menu', 'blockbase' ),
	'categories' => array( 'blockbase' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":"true"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"space-between"},"style":{"spacing":{"padding":{"top":"170px","bottom":"var(--wp--custom--gap--horizontal"}}}} -->
		<div class="wp-block-group alignwide" style="padding-top: 170px;padding-bottom: var(--wp--custom--gap--horizontal);">	<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:navigation {"overlayMenu":"never","__unstableLocation":"footer","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"typography":{"textTransform":"uppercase"},"spacing":{"blockGap":"0px"}}} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"footer-credit"} -->
			<div class="wp-block-group footer-credit">
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Proudly Powered by <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	',
);
