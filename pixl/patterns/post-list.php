<?php
/**
 * Title: Posts list
 * Slug: pixl/post-list
 * Inserter: no
 */

?>

<!-- wp:query {"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"main","displayLayout":{"type":"list"},"layout":{"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"layout":{"type":"constrained"},"style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"borderColor":"primary","className":"pixl-shadow"} -->
<div class="wp-block-group pixl-shadow has-border-color has-primary-border-color" style="border-width:2px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase","fontSize":"12px"}}} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /-->

<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"14px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontSize":"14px","textTransform":"lowercase"}}} /--></div>
<!-- /wp:group -->

</div><!-- /wp:group -->
<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query -->
