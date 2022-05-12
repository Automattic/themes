<?php
/**
 * Title: Posts grid
 * Slug: remote/posts-grid
 * Categories: featured, query
 * Block Types: query
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"><!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null},"tagName":"main","displayLayout":{"type":"flex","columns":2},"align":"wide"} -->
<main class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"220px","style":{"spacing":{"margin":{"top":"0px","bottom":"30px"}}}} /-->

<!-- wp:post-date {"format":"M j"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0.3em","bottom":"20px"}},"typography":{"lineHeight":"1.17"}},"fontSize":"medium"} /-->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"32px"} -->
<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->
