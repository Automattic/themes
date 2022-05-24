<?php
/**
 * Title: Recent posts
 * Slug: curator/recent-posts
 * Categories: query
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:heading {"level":6} -->
<h6><?php echo esc_html__( 'Recent posts', 'curator' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:query {"queryId":3,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"bottom":{"width":"1px"}}}} -->
<div class="wp-block-group" style="border-bottom-width:1px"><!-- wp:post-title {"level":1,"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->