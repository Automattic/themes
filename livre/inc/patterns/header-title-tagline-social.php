<?php
/**
 * Header with site title, tagline, and social link block pattern
 */
return array(
	'title'      => __( 'Header with site title, tagline, and social link', 'livre' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--large, 10rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 10rem)"><!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"overlayMenu":"always","overlayBackgroundColor":"background","overlayTextColor":"foreground","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"x-large"} -->

					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation -->

					<!-- wp:group -->
					<div class="wp-block-group"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}}} /-->

					<!-- wp:site-tagline {"textAlign":"center","fontSize":"x-small"} /--></div>
					<!-- /wp:group -->

					<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","iconBackgroundColor":"background","iconBackgroundColorValue":"var(--wp--preset--color--background)","layout":{"type":"flex","justifyContent":"right"}} -->
					<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
					<!-- /wp:social-links --></div>
					<!-- /wp:group -->',
);
