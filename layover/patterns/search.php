<?php
/**
 * Title: search
 * Slug: layover/search
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Content Wrapper"},"style":{"dimensions":{"minHeight":"100vh"}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="min-height:100vh"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Search Block"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:search {"showLabel":false,"placeholder":" SEARCH","width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":5,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:query-title {"type":"search","textAlign":"center","level":2} /-->

<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"8rem"}}} -->
<!-- wp:group {"metadata":{"name":"Post template wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"40%"} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"1rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:1rem"><!-- wp:post-excerpt {"textAlign":"center","excerptLength":25,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"metadata":{"name":"Pagination"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"large","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"PREV"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"NEX"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'layover');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div>
<!-- /wp:group -->