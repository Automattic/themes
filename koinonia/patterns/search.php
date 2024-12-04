<?php
/**
 * Title: search
 * Slug: koinonia/search
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Fixed Header"},"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:template-part {"slug":"header","area":"header","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Search"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:search {"showLabel":false,"placeholder":"  Search...","buttonText":"SEARCH","buttonPosition":"button-inside","buttonUseIcon":true} /-->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:query-title {"type":"search","align":"wide"} /-->

<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"metadata":{"name":"Post wrapper"},"align":"wide","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"dimensions":{"minHeight":"100%"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="border-radius:10px;min-height:100%;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"metadata":{"name":"QL copy"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide"} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'koinonia');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->