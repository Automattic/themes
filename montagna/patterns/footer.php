<?php
/**
 * Title: Default footer
 * Slug: montagna/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"5vw","left":"5vw","bottom":"var:preset|spacing|50"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:5vw;padding-bottom:var(--wp--preset--spacing--50);padding-left:5vw"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:site-title {"level":0,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"0.8rem"}}} -->
<p class="has-text-align-left" style="font-size:0.8rem"><?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'montagna' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				esc_html__( 'Designed with %1$s', 'montagna' ),
				$wordpress_link
			);
		?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->