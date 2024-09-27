<?php
/**
 * Title: 404
 * Slug: raconteur/404
 * Inserter: no
 */
?>
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":"60px","style":{"border":{"right":{"width":"1px"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="border-right-width:1px;flex-basis:60px"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:template-part {"slug":"header","area":"header"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|70"},"dimensions":{"minHeight":"90vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="min-height:90vh;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e('Oops... That page can’t be found.', 'raconteur');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'raconteur');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search","buttonText":"","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"60px","style":{"border":{"left":{"width":"1px"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="border-left-width:1px;flex-basis:60px"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:template-part {"slug":"navbar"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->