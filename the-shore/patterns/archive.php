<?php
/**
 * Title: archive
 * Slug: the-shore/archive
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:spacer {"height":"6vh"} -->
<div style="height:6vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"5vw","left":"5vw"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:5vw;padding-left:5vw"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-query"><!-- wp:query-title {"type":"archive","style":{"spacing":{"margin":{"bottom":"100px"}}}} /-->

<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php echo __('No posts have been found.', 'the-shore');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"6vh"} -->
<div style="height:6vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->