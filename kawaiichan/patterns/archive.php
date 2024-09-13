<?php
/**
 * Title: archive
 * Slug: kawaiichan/archive
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-lean"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10vh","padding":{"top":"5vh","bottom":"15vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:5vh;padding-bottom:15vh"><!-- wp:query-title {"type":"archive","textAlign":"center"} /-->

<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"10vh"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"overlayColor":"base","isUserOverlayColor":true,"minHeight":25,"minHeightUnit":"rem","contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:25rem"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"25rem"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:25rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffe5f4","#ffe5f4"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/sub-elipses_2_top.png" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffe5f4","#ffe5f4"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/sub-elipses_2_bot.png" alt="" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-date {"textAlign":"center","isLink":true,"fontSize":"small"} /-->

<!-- wp:post-excerpt {"textAlign":"center","moreText":"Read more."} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->