<?php
/**
 * Header with site logo and title on left and button on right block pattern
 */
return array(
	'title'      => __( 'Header with site logo and title on left and button on right', 'livro' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--large, 10rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 10rem)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":true} /-->

					<!-- wp:site-title {"style":{"spacing":{"padding":{"top":"0.35ch"}},"typography":{"textTransform":"uppercase"}}} /--></div>
					<!-- /wp:group -->

					<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"overlayMenu":"always","overlayBackgroundColor":"background","overlayTextColor":"foreground","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"x-large"} -->

					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group -->',
);
