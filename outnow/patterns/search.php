<?php
/**
 * Title: search
 * Slug: outnow/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header","align":"full"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1rem","bottom":"5rem","right":"2rem","left":"2rem"},"blockGap":"2rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:1rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"33.3%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.3%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"3rem","padding":{"right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo __('Search', 'outnow');?></h1>
<!-- /wp:heading -->

<!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"border":{"width":"0px","style":"none","radius":"2px"}},"backgroundColor":"contrast","textColor":"base"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":""} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:query {"queryId":9,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"5rem"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:5rem"><!-- wp:post-featured-image {"aspectRatio":"16/9","width":"100%","height":"15rem","style":{"color":[]}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"letterSpacing":"0rem","fontSize":"2.4rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem"}},"fontFamily":"libre-franklin"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem"}},"fontFamily":"libre-franklin"} -->
<p class="has-libre-franklin-font-family" style="font-size:0.8rem;letter-spacing:0.02rem"><?php echo __('·', 'outnow');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem"}},"fontFamily":"libre-franklin"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->