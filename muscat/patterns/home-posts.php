<?php
/**
 * Title: Home Page Posts 
 * Slug: muscat/home-posts
 * Categories: query
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"tagName":"main","displayLayout":{"type":"flex","columns":3},"layout":{"inherit":true}} -->
<main class="wp-block-query"><!-- wp:post-template {"align":"wide","fontSize":"medium"} -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"360px"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"large"} /-->

<!-- wp:post-date /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"align":"full","backgroundColor":"secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator alignfull has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"fontSize":"x-large"} -->
<h3 class="alignwide has-x-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( 'Is this nice? is a weekly digital publication that features artists, craftmakers and artisans.', 'muscat' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->