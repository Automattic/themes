<?php
/**
 * Title: Posts list
 * Slug: vivre/posts-list
 * Inserter: no
 */

?>

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">

<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"bottom":{"width":"1px"}}}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"lineHeight":1},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:separator {"className":"alignfull"} -->
<hr class="wp-block-separator has-alpha-channel-opacity alignfull"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem"}}}} -->
<div class="wp-block-group" style="padding-top:1rem"><!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<!-- wp:query-pagination-numbers /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /--></div>
<!-- /wp:group -->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
