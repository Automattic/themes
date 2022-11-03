<?php
/**
 * Title: Recent posts
 * Slug: vivre/recent-posts
 * Categories: query
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","bottom":"3rem"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:2rem;padding-bottom:3rem">
<!-- wp:heading {"level":6} -->
<h6><?php echo esc_html__( 'Recent posts', 'vivre' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"bottom":{"width":"1px"}}}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"lineHeight":1}}} /-->

<!-- wp:separator {"className":"alignfull"} -->
<hr class="wp-block-separator has-alpha-channel-opacity alignfull"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
