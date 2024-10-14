<?php
/**
 * Title: Pre-Header CTA
 * Slug: bain-marie/pre-header-cta
 * Categories: featured, call to action
 * Inserter: yes
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"metadata":{"name":"Pre-Header CTA"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<p class="has-text-align-center has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e('My recipes, your inbox', 'bain-marie');?> 🍲</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small","fontFamily":"jost"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Sign up', 'bain-marie');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->