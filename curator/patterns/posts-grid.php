<?php
/**
 * Title: Posts grid
 * Slug: curator/posts-grid
 * Categories: featured, query
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:pattern {"slug":"curator/post-terms-and-date"} /-->

<!-- wp:post-title {"isLink":true,"textColor":"foreground"} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
