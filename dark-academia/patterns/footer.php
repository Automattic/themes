<?php
/**
 * Title: Footer
 * Slug: dark-academia/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|70","top":"var:preset|spacing|70"}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"no-underline","fontSize":"x-small"} -->
		<p class="no-underline has-x-small-font-size"><?php echo __('<a href="#">Instagram</a> / <a href="#">TikTok</a> / <a href="#">X</a>', 'dark-academia');?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"lock":{"move":false,"remove":true},"className":"no-underline","fontSize":"x-small"} -->
		<p class="no-underline has-x-small-font-size"><?php echo __('Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a>', 'dark-academia');?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
