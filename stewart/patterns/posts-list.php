<?php
/**
 * Title: Post list
 * Slug: stewart/posts-list
 * Categories: query
 * Block Types: query
 */
?>

<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":2},"layout":{"inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"huge"} /-->

<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-excerpt {"fontSize":"normal"} /-->

<!-- wp:post-date {"isLink":true,"fontSize":"extra-small"} /-->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<div class="wp-block-query-pagination"><!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /--></div>
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
