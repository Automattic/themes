<?php
/**
 * Title: single
 * Slug: vitrum/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"2.5vh","bottom":"15vh"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:2.5vh;padding-bottom:15vh"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"90%","style":{"spacing":{"padding":{"right":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-right:0;flex-basis:90%"><!-- wp:post-excerpt {"fontSize":"small"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Written by', 'vitrum');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"style":{"typography":{"textDecoration":"underline"}},"fontSize":"small"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('— ', 'vitrum');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('×', 'vitrum');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"90%","style":{"spacing":{"padding":{"right":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-right:0;flex-basis:90%"><!-- wp:post-title {"level":1,"isLink":true} /-->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-content {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:post-featured-image {"align":"full","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"margin":{"top":"10vh","bottom":"5vh"}}}} /-->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"right":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-right:0;flex-basis:70%"><!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"40px","left":"0px"}}}} -->
<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":48,"isLink":true,"style":{"color":[]}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:comment-author-name /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"5px","right":"0px","bottom":"5px","left":"0px"},"blockGap":"30px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:5px;padding-right:0px;padding-bottom:5px;padding-left:0px"><!-- wp:comment-date {"format":"M j","isLink":false} /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"style":{"spacing":{"margin":{"bottom":"0px"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->