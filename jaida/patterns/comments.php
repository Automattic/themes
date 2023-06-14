<?php
/**
 * Title: Comments
 * slug: jaida/comments
 * inserter: no
 */

?>

<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:comments-title {"level":3} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":40,"style":{"spacing":{"margin":{"top":"0.5em"}},"border":{"radius":"100px"}}} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:comment-author-name {"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"0.9rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0.5em"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"format":"F j, Y \\a\\t g:i a","isLink":false,"style":{"typography":{"fontSize":"0.9rem"}}} /-->

<!-- wp:comment-edit-link {"style":{"typography":{"fontSize":"0.9rem"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"style":{"typography":{"fontSize":"0.9rem"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous {"fontSize":"small"} /-->

<!-- wp:comments-pagination-next {"fontSize":"small"} /-->
<!-- /wp:comments-pagination -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-comments-form /-->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:comments -->
