<?php
/**
 * Title: search
 * Slug: dossier/search
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide"><!-- wp:template-part {"slug":"wording","align":"wide"} /-->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:query-title {"type":"search","showSearchTerm":false,"align":"wide","fontSize":"medium"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:search {"showLabel":false,"placeholder":"  Search","width":100,"widthUnit":"%","buttonText":"","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":8,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","enhancedPagination":true,"align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","width":"","height":"","style":{"border":{"radius":"2px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"none","lineHeight":"1.3","fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} /-->

<!-- wp:post-date {"format":"M j, Y","isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"wide"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="text-transform:uppercase"><?php esc_html_e('No results.', 'dossier');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again using some different keywords or publish your first post.', 'dossier');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:query-no-results --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-minimal"} /-->