<?php
/**
 * Title: single
 * Slug: inversum/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->

<!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30)"><!-- wp:group {"metadata":{"name":"Content wrapper"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-title {"level":1,"isLink":true} /-->

<!-- wp:group {"metadata":{"name":"Post Meta"},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Written in', 'inversum');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('by', 'inversum');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Content and comments"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"90%"} -->
<div class="wp-block-column" style="flex-basis:90%"><!-- wp:post-content {"layout":{"type":"constrained","justifyContent":"left"}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Tags', 'inversum');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-terms {"term":"post_tag","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Categories', 'inversum');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-terms {"term":"category","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:comments {"align":"wide"} -->
<div class="wp-block-comments alignwide"><!-- wp:comments-title /-->

<!-- wp:comment-template {"fontSize":"small"} -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"},"color":{"duotone":["#000000","#ffffff"]}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"style":{"spacing":{"margin":{"bottom":"1.4rem"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous {"label":"Older"} /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next {"label":"Newer"} /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-purple-heart"}}}},"backgroundColor":"custom-robin-egg-blue","textColor":"custom-purple-heart","fontSize":"small"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:post-featured-image {"align":"full","style":{"color":[]}} /-->