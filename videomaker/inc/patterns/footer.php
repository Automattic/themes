<?php
/**
 * Footer with a vertical menu
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Footer with a vertical menu', 'blockbase' ),
	'categories' => array( 'videomaker' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":"true"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"space-between"},"style":{"spacing":{"padding":{"top":"30px","bottom":"min(30px, 5vw)"}}}} -->
		<div class="wp-block-group alignwide" style="padding-top: 30px;padding-bottom: min(30px, 5vw)">	<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"typography":{"textTransform":"uppercase"},"spacing":{"blockGap":"0px"}}} /-->
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
