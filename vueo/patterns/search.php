<?php
/**
 * Title: search
 * Slug: vueo/search
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-pages"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide"><!-- wp:columns {"metadata":{"name":"Search"},"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:search {"label":"<?php esc_html_e('Search', 'vueo');?>","showLabel":false,"placeholder":" <?php esc_html_e('Search', 'vueo');?>","width":100,"widthUnit":"%","buttonText":"<?php esc_html_e('Search', 'vueo');?>","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":30,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:query-title {"type":"search"} /-->

<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":6}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"","height":"","style":{"color":[]}} /-->

<!-- wp:group {"metadata":{"name":"Post template text"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-title {"isLink":true,"fontSize":"small"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600","letterSpacing":"-1px"}}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'vueo');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-pages"} /-->