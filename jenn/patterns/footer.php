<?php
/**
 * Title: footer
 * Slug: jenn/footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-small-font-size"><?php echo wp_kses_post( __ ('123 Example St. Los Angeles, CA 12345<br>(555) 555-5555 · <a href="#">info@example.com</a>', 'jenn') );?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"mail"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:spacer {"height":"0px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"flexSize":"26px","selfStretch":"fixed"}}} -->
<div style="margin-top:0;margin-bottom:0;height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.7em"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color" style="font-size:0.7em"><?php echo wp_kses_post( __ ('Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a> ', 'jenn') );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
