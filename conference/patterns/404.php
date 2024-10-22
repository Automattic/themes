<?php
/**
 * Title: 404
 * Slug: conference/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"dimensions":{"minHeight":"40vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:40vh"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php esc_html_e('🫥', 'conference');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php esc_html_e('Oops! This page can’t be found.', 'conference');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'conference');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"placeholder":"Search","buttonText":"","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Footer for Pages"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:0"><!-- wp:template-part {"slug":"footer-news","align":"wide"} /-->

<!-- wp:template-part {"slug":"footer-pages","align":"wide"} /--></div>
<!-- /wp:group -->