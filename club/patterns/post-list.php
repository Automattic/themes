<?php
/**
 * Title: Posts list
 * Slug: club/posts-list
 * Inserter: no
 */

?>

<!-- wp:query {"queryId":27,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"list","columns":3},"className":"club-post-list-pattern","layout":{"inherit":false}} -->
<main class="wp-block-query club-post-list-pattern"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|foreground"}},"spacing":{"padding":{"top":"1em","bottom":"1em"}}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--foreground);padding-top:1em;padding-bottom:1em"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"","layout":{"inherit":false}} -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"90px"} -->
<div class="wp-block-column" style="flex-basis:90px"><!-- wp:post-featured-image {"isLink":true,"width":"90px","height":"60px"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:post-date {"format":"M j","isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"read-more-container"} -->
<div class="wp-block-column read-more-container"><!-- wp:read-more {"content":<?php echo esc_html__( 'Read It', 'club' ); ?>"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
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
