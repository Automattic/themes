<?php
/**
 * Title: page
 * Slug: beep/page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","layout":{"type":"default"}} -->
<main class="wp-block-group has-tertiary-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">$<?php esc_html_e('title', 'beep');?> =</p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color" style="margin-left:0">;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">$<?php esc_html_e('content', 'beep');?> = [</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|80"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--80)"><!-- wp:post-content {"lock":{"move":false,"remove":true}} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">];</p>
<!-- /wp:paragraph -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-page","tagName":"footer"} /-->
