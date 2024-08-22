<?php
/**
 * Title: Header
 * Slug: dark-academia/header
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/header-background.jpg","source":"file","title":"header-background"},"backgroundPosition":"50% 100%"}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"dimensions":{"minHeight":"100vh"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}}},"textColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
	<div class="wp-block-group has-base-color has-text-color has-link-color" style="min-height:100vh;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"3px"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"style":{"layout":{"selfStretch":"fixed","flexSize":"500px"}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
