<?php
/**
 * Title: Header
 * Slug: fontaine/header
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"metadata":{"categories":["header"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-1"},":hover":{"color":{"text":"var:preset|color|theme-1"}}}}},"textColor":"theme-1","layout":{"type":"default"}} -->
<div class="wp-block-group has-theme-1-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.31"}},"fontSize":"small"} /-->

			<!-- wp:site-tagline {"style":{"typography":{"lineHeight":"1.31"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap"}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
