<?php
/**
 * Header wide
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Header wide', 'blockbase' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"className":"gapless-group","layout":{"inherit":"true"}} -->
	<div class="wp-block-group gapless-group">
	<!-- wp:group {"align":"wide","className":"site-header","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"padding":{"bottom":"var(--wp--custom--gap--vertical)","top":"var(--wp--custom--gap--vertical)"}}}} -->
	<div class="wp-block-group site-header alignwide" style="padding-bottom:var(--wp--custom--gap--vertical);padding-top:var(--wp--custom--gap--vertical)">

		<!-- wp:group {"className":"site-brand","layout":{"type":"flex"}} -->
		<div class="wp-block-group site-brand">
			<!-- wp:site-logo {"width":64} /-->

			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:site-title /-->
				<!-- wp:site-tagline /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"__unstableLocation":"primary","__unstableSocialLinks":"social","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}}} /-->

	</div>
	<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
	',
);


