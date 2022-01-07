<?php
/**
 * Centered header block pattern
 */
return array(
	'title'      => __( 'Centered header', 'livre' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--large, 10rem)","top":"var(--wp--custom--spacing--medium, clamp(2rem, 8vw, calc(4 * var(--wp--style--block-gap))))"}}}} -->
					<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--medium, clamp(2rem, 8vw, calc(4 * var(--wp--style--block-gap))));padding-bottom:var(--wp--custom--spacing--large, 10rem)"><!-- wp:site-title {"textAlign":"center","style":{"spacing":{"padding":{"top":"0.35ch"}},"typography":{"textTransform":"uppercase"}}} /-->

					<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"overlayMenu":"always","overlayBackgroundColor":"background","overlayTextColor":"foreground","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"x-large"} -->

					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group -->',
);
