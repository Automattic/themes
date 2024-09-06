<?php
/**
 * Title: 404
 * Slug: feature/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"2rem","left":"2rem"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-right:2rem;padding-left:2rem"><!-- wp:template-part {"slug":"header-pages"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"35vh"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<main class="wp-block-group" style="min-height:35vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
<div class="wp-block-group alignfull"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:70%"><!-- wp:group {"align":"full","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"left","level":1,"align":"full"} -->
<h1 class="wp-block-heading alignfull has-text-align-left" id="oops-that-page-can-t-be-found"><?php esc_html_e('Oops! No page here...', 'feature');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'feature');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:search {"showLabel":false,"placeholder":"Search...","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"30%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-pages"} /--></div>
<!-- /wp:group -->