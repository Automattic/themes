<?php
/**
 * Title: header
 * Slug: lexionic/header
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Header wrapper"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"40%","metadata":{"name":"Book Column"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","metadata":{"name":"Content Column"},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-column is-vertically-aligned-center has-background-background-color has-background" style="flex-basis:60%"><!-- wp:group {"metadata":{"name":"Navigation"},"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:group {"metadata":{"name":"Social"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"letterSpacing":"0.025rem"}},"textColor":"contrast","fontSize":"x-small","fontFamily":"albert-sans"} -->
<p class="has-contrast-color has-text-color has-link-color has-albert-sans-font-family has-x-small-font-size" style="letter-spacing:0.025rem"><?php esc_html_e('Share', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#b89062","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"goodreads"} /-->

<!-- wp:social-link {"url":"#","service":"bluesky"} /-->

<!-- wp:social-link {"url":"#","service":"amazon"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->