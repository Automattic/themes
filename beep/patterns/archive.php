<?php
/**
 * Title: archive
 * Slug: beep/archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:template-part {"slug":"navigation"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"left":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|80","top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">$<?php esc_html_e('archive', 'beep');?> =</p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive"} /-->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color" style="margin-left:0">;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:post-date {"format":"y.m.d h:i","isLink":true,"className":"nowrap","style":{"spacing":{"margin":{"right":"0","left":"var:preset|spacing|50"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'beep');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|inactive"}}},"spacing":{"margin":{"right":"1rem"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color has-link-color" style="margin-right:1rem">$<?php esc_html_e('previous', 'beep');?> =</p>
<!-- /wp:paragraph -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- /wp:query-pagination -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|inactive"}}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color has-link-color">;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|inactive"}}},"spacing":{"margin":{"right":"1rem"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color has-link-color" style="margin-right:1rem">$<?php esc_html_e('next', 'beep');?> =</p>
<!-- /wp:paragraph -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|inactive"}}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color has-link-color">;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
