<?php
/**
 * Title: footer
 * Slug: koinonia/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Footer wrapper"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Navigation"},"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"textTransform":"none"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"horizontal","flexWrap":"wrap"}} /-->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#0b303b","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Credit line"},"align":"wide","style":{"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"style":"none","width":"0px"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px"><!-- wp:site-tagline /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s', 'koinonia' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->