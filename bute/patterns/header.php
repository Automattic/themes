<?php
/**
 * Title: Default header
 * Slug: bute/header
 * Categories: header
 * Block Types: core/template-part/header
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"textColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull has-contrast-color has-text-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:site-title /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:social-links {"iconColor":"contrast","size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

				<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->

				<!-- wp:social-link {"url":"https://tumblr.com/","service":"tumblr"} /-->
			</ul>
			<!-- /wp:social-links -->

			<!-- wp:navigation {"overlayMenu":"always","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"fontSize":"xx-large"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
