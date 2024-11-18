<?php
/**
 * Title: 404
 * Slug: vueo/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-pages"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="min-height:50vh"><!-- wp:group {"metadata":{"name":"Content block"},"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Wrapper"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","className":"has-text-align-center"} -->
<h1 class="wp-block-heading alignwide has-text-align-left has-text-align-center"><?php esc_html_e('Sorry, this page could not be found.', 'vueo');?></h1>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Search"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"bottom":"2.5vh","top":"2.5vh"}}},"fontSize":"small","layout":{"inherit":true,"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-small-font-size" style="padding-top:2.5vh;padding-bottom:2.5vh;font-style:normal;font-weight:500"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.3999999999999999}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e('Maybe try a search?', 'vueo');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php esc_html_e('Search', 'vueo');?>","showLabel":false,"placeholder":" <?php esc_html_e('Search', 'vueo');?>","width":100,"widthUnit":"%","buttonText":"<?php esc_html_e('Search', 'vueo');?>","buttonPosition":"button-inside","buttonUseIcon":true} /-->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-pages"} /-->
