<?php
/**
 * Title: footer
 * Slug: psychedeli/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Contrast Color Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"},"bottom":{"width":"1px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-right-width:1px;border-bottom-width:1px;border-left-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Footer Stack"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:site-title {"textAlign":"center"} /-->

<!-- wp:spacer {"height":"0px","metadata":{"name":"Spacer M"},"style":{"layout":{"selfStretch":"fixed","flexSize":"clamp(1rem, 2vw, 2rem)"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#1e1551","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"bluesky"} /-->

<!-- wp:social-link {"url":"#","service":"tumblr"} /-->

<!-- wp:social-link {"url":"#","service":"mastodon"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:site-tagline {"textAlign":"center"} /-->

<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s', 'psychedeli' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->