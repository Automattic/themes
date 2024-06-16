<?php
/**
 * Title: Instagram Gallery
 * Slug: cakely/gallery-instagram-gallery
 * Categories: gallery
 * Viewport width: 1488
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0px","bottom":"0px"}},"border":{"top":{"color":"var:preset|color|primary","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-width:1px;margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"medium"} -->
	<h2 class="wp-block-heading alignwide has-primary-color has-text-color has-link-color has-medium-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><a href="https://www.instagram.com/gateauthemedemo/"><?php echo esc_html__( 'Follow us on Instagram', 'cakely' ); ?></a></h2>
	<!-- /wp:heading -->

	<!-- wp:jetpack/instagram-gallery {"accessToken":"29955274","instagramUser":"gateauthemedemo","columns":6,"count":6,"spacing":4,"align":"wide"} -->
	<div class="wp-block-jetpack-instagram-gallery alignwide"><a href="https://www.instagram.com/gateauthemedemo/" rel="noopener noreferrer" target="_blank">https://www.instagram.com/gateauthemedemo/</a></div>
	<!-- /wp:jetpack/instagram-gallery -->
</div>
<!-- /wp:group -->
