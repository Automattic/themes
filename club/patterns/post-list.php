<?php
/**
 * Title: Posts list
 * Slug: disco/posts-list
 * Inserter: no
 */

?>

<!-- wp:query {"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"main","displayLayout":{"type":"list","columns":3},"className":"disco-post-list-pattern","layout":{"inherit":false}} -->
<main class="wp-block-query disco-post-list-pattern"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1em","bottom":"1em"}}}} -->
<div class="wp-block-group" style="padding-top:1em;padding-bottom:1em"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"","layout":{"inherit":false}} -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"90px"} -->
<div class="wp-block-column" style="flex-basis:90px"><!-- wp:post-featured-image {"isLink":true,"width":"90px","height":"60px"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"","className":"post-date-container"} -->
<div class="wp-block-column post-date-container"><!-- wp:post-date {"format":"M j","isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:read-more {"content":"<?php echo esc_html__( 'Read It', 'disco' ); ?>"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"alignfull"} -->
<hr class="wp-block-separator has-alpha-channel-opacity alignfull"/>
<!-- /wp:separator -->

<!-- /wp:post-template -->

<!-- wp:paragraph {"placeholder":"<?php echo esc_html__( 'Add text or blocks that will display when the query returns no results.', 'disco' ); ?>"} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></main>

<!-- /wp:query -->
