<?php
/**
 * Title: search
 * Slug: lexionic/search
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":"40%","metadata":{"name":"Book Column"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%"><!-- wp:group {"metadata":{"name":"Book Stack"},"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:100vh;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:template-part {"slug":"book-cover-artwork"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"60%","metadata":{"name":"Content Column"},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-background-background-color has-background" style="flex-basis:60%"><!-- wp:group {"tagName":"main","metadata":{"name":"Content wrapper"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"585px","wideSize":"720px"}} -->
<main class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:query {"queryId":18,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"metadata":{"categories":["posts"],"patternName":"core/query-small-posts","name":"QL"},"align":"wide","layout":{"type":"constrained","contentSize":"585px","wideSize":"720px"}} -->
<div class="wp-block-query alignwide"><!-- wp:group {"metadata":{"name":"Section title"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:query-title {"type":"search"} /-->

<!-- wp:search {"showLabel":false,"placeholder":"  Search...","buttonText":"SEARCH","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"metadata":{"name":"Post template copy"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"xx-large"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","metadata":{"name":"Spacer XL"}} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|70","metadata":{"name":"Spacer XL"}} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lexionic');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /--></main>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->