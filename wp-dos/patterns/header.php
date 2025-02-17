<?php
/**
 * Title: header
 * Slug: wp-dos/header
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Header Wrapper"},"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"position":{"type":""},"border":{"bottom":{"width":"1px","style":"dotted"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-style:dotted;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:columns {"verticalAlignment":"top","align":"full","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"20%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-bottom:var(--wp--preset--spacing--30);flex-basis:20%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
<p style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact%2$s', 'wp-dos' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Menu Navigation"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"left":[]}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignfull" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->