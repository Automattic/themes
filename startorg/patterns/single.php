<?php
/**
 * Title: single
 * Slug: startorg/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-global","tagName":"header"} /-->

<!-- wp:group {"lock":{"move":false,"remove":true},"style":{"spacing":{"blockGap":"60px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"4vw","left":"4vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:4vw;padding-left:4vw"><!-- wp:template-part {"slug":"post-meta"} /-->

<!-- wp:post-title {"style":{"typography":{"fontSize":"2.6rem"}}} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"1.5rem","lineHeight":"1.4"}},"textColor":"contrast"} /-->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-featured-image {"align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"right":"4vw","left":"4vw"}}}} -->
<main class="wp-block-group" style="padding-right:4vw;padding-left:4vw"><!-- wp:post-content {"lock":{"move":false,"remove":true},"layout":{"type":"constrained"}} /--></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10vh","bottom":"10vh","right":"4vw","left":"4vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:10vh;padding-right:4vw;padding-bottom:10vh;padding-left:4vw"><!-- wp:heading {"align":"wide","style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading alignwide" style="font-size:1.6rem"><?php esc_html_e('More from the blog', 'startorg');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":10,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"14px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-global","tagName":"footer"} /-->