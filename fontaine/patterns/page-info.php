<?php
/**
 * Title: Info Page
 * Slug: fontaine/page-info
 * Categories: page
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100vh"}},"backgroundColor":"theme-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-theme-5-background-color has-background" style="min-height:100vh">
	<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"className":"blending-mode","layout":{"type":"default"}} -->
	<div class="wp-block-group blending-mode">
		<!-- wp:template-part {"slug":"header","tagName":"header"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-3"},":hover":{"color":{"text":"var:preset|color|theme-4"}}}}},"backgroundColor":"theme-5","textColor":"theme-1","layout":{"type":"default"}} -->
	<main class="wp-block-group alignfull has-theme-1-color has-theme-5-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

		<!-- wp:pattern {"slug":"fontaine/text-profile"} /-->
	</main>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"position":{"type":""}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
		<!-- wp:template-part {"slug":"footer-dark","tagName":"footer"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
