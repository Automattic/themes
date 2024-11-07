<?php
/**
 * Title: search
 * Slug: downtown/search
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":" Search","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":30,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:query-title {"type":"search"} /-->

<!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","width":"","height":"","style":{"color":[]}} /-->

<!-- wp:group {"metadata":{"name":"QL copy text"},"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category","separator":" × "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600","letterSpacing":"-1px"}}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'downtown');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->