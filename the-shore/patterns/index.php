<?php
/**
 * Title: index
 * Slug: the-shore/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:spacer {"height":"6vh"} -->
<div style="height:6vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"post-meta"} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true} /-->

<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} /-->

<!-- wp:post-excerpt /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php echo __('There are no posts yet.', 'the-shore');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query -->

<!-- wp:spacer {"height":"6vh"} -->
<div style="height:6vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->