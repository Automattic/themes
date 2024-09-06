<?php
/**
 * Title: 404
 * Slug: brute/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"var:preset|spacing|80","bottom":"0rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:0rem"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}},"dimensions":{"minHeight":"55vh"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="min-height:55vh;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0rem","left":"0rem"},"margin":{"top":"0rem","bottom":"0rem"},"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0rem;margin-bottom:0rem;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);flex-basis:70%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","className":"has-text-align-center","style":{"typography":{"fontSize":"6.5rem","lineHeight":"1.1"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-left has-text-align-center" style="font-size:6.5rem;line-height:1.1"><?php esc_html_e('This page was not found.', 'brute');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('Please try a new search.', 'brute');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:search {"showLabel":false,"placeholder":"Search...","widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"1%"} -->
<div class="wp-block-column" style="flex-basis:1%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /--></main>
<!-- /wp:group -->