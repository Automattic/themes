<?php
/**
 * Title: index
 * Slug: cubico/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isUserOverlayColor":true,"contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}},"color":{"gradient":"linear-gradient(0deg,rgba(3,2,2,0.65) 28%,rgba(3,2,2,0) 100%)"},"dimensions":{"minHeight":"4vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(0deg,rgba(3,2,2,0.65) 28%,rgba(3,2,2,0) 100%);min-height:4vh;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:post-date {"textAlign":"left","format":"M j, Y","isLink":true} /-->

<!-- wp:post-title {"textAlign":"left","level":1,"isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2vh","bottom":"2vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:2vh;padding-bottom:2vh"><!-- wp:query-pagination {"align":"wide"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cubico');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->