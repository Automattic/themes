<?php
/**
 * Title: Post Comments
 * Slug: curator/post-comments
 * Inserter: no
 */

?>

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:post-comments-form /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"capitalize"}},"textColor":"foreground","fontSize":"x-large"} -->
<p class="has-foreground-color has-text-color has-x-large-font-size" style="text-transform:capitalize"><?php echo esc_html__( 'Comments', 'curator' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"foreground","fontSize":"x-large"} -->
<p class="has-foreground-color has-text-color has-x-large-font-size">(</p>
<!-- /wp:paragraph -->

<!-- wp:post-comments-count {"textAlign":"center","textColor":"foreground","fontSize":"x-large"} /-->

<!-- wp:paragraph {"textColor":"foreground","fontSize":"x-large"} -->
<p class="has-foreground-color has-text-color has-x-large-font-size">)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
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

<!-- wp:comment-content {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:comment-reply-link /-->

<!-- wp:comment-edit-link /--></div>
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
<!-- /wp:group -->
