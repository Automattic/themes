<?php
/**
 * Title: search
 * Slug: leancv/search
 * Inserter: no
 */
?>
<!-- wp:columns {"metadata":{"categories":["hidden"]},"align":"full","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"margin":{"top":"0rem","bottom":"0rem"},"blockGap":{"top":"0rem","left":"0rem"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0rem;margin-bottom:0rem;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:column {"verticalAlignment":"stretch","width":"65%","metadata":{"name":"Content Wrapper"}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:65%"><!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:template-part {"slug":"header"} /-->

<!-- wp:query {"queryId":8,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:query-title {"type":"search"} /-->

<!-- wp:post-template {"style":{"spacing":{"blockGap":"4.5rem"}},"layout":{"type":"constrained"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"120px","height":"120px"} /-->

<!-- wp:post-title {"level":1,"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","margin":{"top":"1rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:1rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read.","showMoreOnNewLine":false} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"var:preset|spacing|60","metadata":{"name":"Spacer L"}} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('No results found.', 'leancv');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"footer"} /--></main>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"35%","lock":{"move":false,"remove":false},"metadata":{"name":"Portrait Wrapper"},"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;flex-basis:35%"><!-- wp:group {"metadata":{"name":"Pinned Portrait Container"},"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"profile-pic"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->