<?php
/**
 * Title: Site Notice
 * Slug: cakely/banner-site-notice
 * Categories: banner
 * Viewport width: 1488
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|base"}},"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small","fontFamily":"josefin-sans"} -->
	<p class="has-text-align-center has-josefin-sans-font-family has-small-font-size" style="text-transform:uppercase">&#9733;&#9733;&#9733; <?php
		$tel_link = '<a href="' . esc_url( __( 'tel:0123456789', 'cakely' ) ) . '" rel="nofollow">(012)345-6789</a>';
			echo sprintf(
				esc_html__( 'Order by 4pm for next day delivery・%1$s', 'cakely' ),
				$tel_link
			);?> &#9733;&#9733;&#9733;</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
