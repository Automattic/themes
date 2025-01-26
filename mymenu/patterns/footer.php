<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: footer
 * Slug: mymenu/footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0vh","bottom":"6vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0vh;padding-bottom:6vh"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"1px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns alignwide has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"65%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:65%"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( '📱 555 123-4567%1$s📍 123 Main Street, Anytown, NJ, US', 'mymenu' ), '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:25%"><!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fixed","flexSize":"90%"}}} -->
<p class="has-text-align-left">
	Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:10%"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"#1d1d1d","size":"has-small-icon-size","style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"space-between"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"spotify"} /-->

<!-- wp:social-link {"url":"#","service":"instagram","label":"Instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->