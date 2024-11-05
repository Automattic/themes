<?php
/**
 * Title: 404
 * Slug: downtown/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="min-height:50vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","className":"has-text-align-center"} -->
<h1 class="wp-block-heading alignwide has-text-align-left has-text-align-center"><?php esc_html_e('Sorry, this page could not be found.', 'downtown');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.3999999999999999}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e('Maybe try a search?', 'downtown');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"bottom":"2.5vh","top":"2.5vh"}}},"fontSize":"small","layout":{"inherit":true,"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-small-font-size" style="padding-top:2.5vh;padding-bottom:2.5vh;font-style:normal;font-weight:500"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->