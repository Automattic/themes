<?php
/**
 * Title: header
 * Slug: booknest/header
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Header Wrapper"},"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"var:preset|spacing|70","metadata":{"name":"XL"}} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Header Row"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"metadata":{"name":"Site title"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":{"topLeft":"10px","topRight":"0px","bottomLeft":"10px","bottomRight":"0px"}},"layout":{"selfStretch":"fit","flexSize":null}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-top-left-radius:10px;border-top-right-radius:0px;border-bottom-left-radius:10px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:site-title {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} /-->

<!-- wp:group {"metadata":{"name":"Detail"},"style":{"border":{"radius":{"topLeft":"5px","topRight":"0px","bottomLeft":"5px","bottomRight":"0px"}},"layout":{"selfStretch":"fixed","flexSize":"0.5rem"},"dimensions":{"minHeight":"15px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0.22rem","right":"0.22rem"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-top-left-radius:5px;border-top-right-radius:0px;border-bottom-left-radius:5px;border-bottom-right-radius:0px;min-height:15px;padding-top:0;padding-right:0.22rem;padding-bottom:0;padding-left:0.22rem"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color has-link-color"><?php esc_html_e('.', 'booknest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"icon":"menu","layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->