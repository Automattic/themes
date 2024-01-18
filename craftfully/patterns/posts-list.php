<?php
/**
 * Title: Posts List
 * Slug: craftfully/posts-list
 * Categories: featured
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="padding-right:0;padding-left:0"><!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0;flex-basis:66.66%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}},"fontFamily":"dm-mono"} -->
<p class="has-dm-mono-font-family" style="font-size:14px"><?php echo esc_html__( 'Explore', 'craftfully' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"className":"heading-bg"} -->
<h2 class="wp-block-heading heading-bg"><?php echo esc_html__( 'Latest Posts', 'craftfully' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","enhancedPagination":true,"layout":{"type":"default"}} -->
<main class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontFamily":"dm-mono"} /-->

<!-- wp:post-title {"textAlign":"left","isLink":true,"fontSize":"medium","fontFamily":"system-font"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","theme":"craftfully"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->