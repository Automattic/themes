<?php
/**
 * Title: single
 * Slug: downtown/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"metadata":{"name":"Excerpt and meta"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|60","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--60);padding-bottom:0"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;flex-basis:75%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-excerpt /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('By', 'downtown');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1","textDecoration":"underline","textTransform":"capitalize"}},"fontSize":"medium"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('— ', 'downtown');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"lineHeight":"1"}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"textTransform":"capitalize"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"10vh","bottom":"10vh"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:10vh;margin-bottom:10vh"><!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;flex-basis:75%"><!-- wp:post-title {"level":1,"align":"wide","style":{"typography":{"fontSize":"4.4rem"}}} /-->

<!-- wp:post-content {"align":"wide","layout":{"type":"default"}} /-->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"comments"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->