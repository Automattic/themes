<?php
/**
 * Title: Home Page - Main Query
 * Slug: carnation/home-query
 * Inserter: no
 */
?>

<!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">●</mark> <?php echo esc_html__( 'Latest Articles', 'carnation' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:query {"queryId":14,"query":{"perPage":4,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"300px","style":{"border":{"radius":"6px"},"spacing":{"margin":{"top":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"1px","fontSize":"0.8rem"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":25} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"layout":{"type":"flex","justifyContent":"space-between"},"fontSize":"medium","fontFamily":"fraunces"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->