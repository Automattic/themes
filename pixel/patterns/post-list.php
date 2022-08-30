<?php
/**
 * Title: Posts list
 * Slug: pixel/posts-list
 * Inserter: no
 */

?>

<!-- wp:query {"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"main","displayLayout":{"type":"list","columns":3},"layout":{"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"layout":{"type":"constrained"},"style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"33px","right":"33px","bottom":"33px","left":"33px"}}},"borderColor":"primary","className":"pixel-shadow"} -->
<div class="wp-block-group pixel-shadow has-border-color has-primary-border-color" style="border-width:2px;padding-top:33px;padding-right:33px;padding-bottom:33px;padding-left:33px"><!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase","fontSize":"12px"}}} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /-->

<!-- wp:template-part {"slug":"post-meta","theme":"themes/pixel"} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query -->
