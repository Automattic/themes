<?php
/**
 * Title: archive
 * Slug: beep/archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:template-part {"slug":"navigation"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|80","bottom":"0","left":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:0;padding-left:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0"><?php esc_html_e('$archive =', 'beep');?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive"} /-->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color" style="margin-left:0"><?php esc_html_e(';', 'beep');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main"} -->
<main class="wp-block-query"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:post-date {"format":"y.m.d h:i","isLink":true,"style":{"spacing":{"margin":{"right":"0","left":"var:preset|spacing|50"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></main>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->