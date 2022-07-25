<?php
/**
 * Title: Posts list
 * Slug: club/posts-list
 * Inserter: no
 */

?>

<!-- wp:query {"queryId":27,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"list","columns":3},"className":"club-post-list-pattern","layout":{"inherit":false}} -->
<main class="wp-block-query club-post-list-pattern"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|foreground","width":"1px"}},"spacing":{"blockGap":"30px","padding":{"top":"30px","right":"0px","bottom":"30px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--foreground);border-bottom-width:1px;padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"90px","height":"60px"} /-->

<!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j","isLink":true} /-->

<!-- wp:read-more {"content":"<?php echo esc_html__( 'Read It', 'club' ); ?>"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:paragraph {"placeholder":"<?php echo esc_html__( 'Add text or blocks that will display when the query returns no results.', 'club' ); ?>"} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></main>
<!-- /wp:query -->
