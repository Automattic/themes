<?php
/**
 * Title: Post Comments
 * Slug: vivre/post-comments
 * Inserter: no
 */

?>

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:post-comments-form /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3>Comments (</h3>
<!-- /wp:heading -->

<!-- wp:post-comments-count {"fontSize":"x-large"} /-->

<!-- wp:heading {"level":3} -->
<h3>)</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:comments-query-loop -->
<div class="wp-block-comments-query-loop"><!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"isLink":false,"fontSize":"large","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:comment-date {"isLink":false,"style":{"typography":{"fontStyle":"italic","fontWeight":"200"}},"textColor":"foreground"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content {"fontSize":"medium","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"20px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:comment-reply-link {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination --></div>
<!-- /wp:comments-query-loop --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
