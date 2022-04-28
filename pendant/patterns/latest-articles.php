<?php
/**
 * Title: Latest Articles
 * slug: pendant/latest-articles
 * categories: featured, query
 */
?>

<!-- wp:group {"layout":{"inherit":true},"style":{"spacing":{"padding":{"top":"2em"}}}} -->
<div class="wp-block-group" style="padding-top:2em"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":4,"fontSize":"large"} -->
<h4 class="has-large-font-size"><?php echo  esc_html__( 'Latest Articles', 'pendant' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'Read All', 'pendant' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"style":{"spacing":{"margin":{"top":"0"}}},"query":{"perPage":"4","pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2},"layout":{"inherit":true}} -->
<div class="wp-block-query" style="margin-top:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"1.5em"}}}} -->
<div class="wp-block-group alignwide" style="padding-bottom:1.5em"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","bottom":"2em"}}}} -->
<div class="wp-block-group" style="padding-top:2em;padding-bottom:2em"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"16em"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->