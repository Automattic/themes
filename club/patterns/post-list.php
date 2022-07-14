<?php
/**
 * Title: Posts list
 * Slug: club/posts-list
 * Inserter: no
 */

?>

<!-- wp:query {"queryId":27,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|foreground","width":"1px"}},"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--foreground);border-bottom-width:1px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"1em","bottom":"1em","right":"1em"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="padding-top:1em;padding-right:1em;padding-bottom:1em"><!-- wp:post-featured-image {"isLink":true,"width":"90px","height":"60px"} /-->

<!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1em","bottom":"1em"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="padding-top:1em;padding-bottom:1em"><!-- wp:post-date {"format":"M j","isLink":true} /-->

<!-- wp:read-more /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"<?php echo esc_html__( 'Add text or blocks that will display when the query returns no results.', 'club' ); ?>"} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
