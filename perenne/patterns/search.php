<?php
/**
 * Title: search
 * Slug: perenne/search
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0px","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:query-title {"type":"search","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} /-->

<!-- wp:query {"queryId":14,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"inline-posts-loop","layout":{"type":"default"}} -->
<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"right":"var:preset|spacing|40"}}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<p style="margin-top:0px;margin-bottom:0px;line-height:1.8"><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'perenne');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:spacer {"height":"200px","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<div style="margin-top:0px;height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"<?php echo esc_html__( 'Prev', 'perenne' ); ?>"} /-->

<!-- wp:query-pagination-next {"label":"<?php echo esc_html__( 'Next', 'perenne' ); ?>"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer"} /--></main>
<!-- /wp:group -->
