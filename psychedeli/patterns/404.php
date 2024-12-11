<?php
/**
 * Title: 404
 * Slug: psychedeli/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"dimensions":{"minHeight":"50vh"}},"gradient":"default-gradient","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-default-gradient-gradient-background has-background" style="min-height:50vh;margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Contrast Color Wrapper"},"align":"wide","style":{"border":{"left":{"width":"1px"},"right":{"width":"1px"}},"spacing":{"padding":{"right":"4px","left":"4px"}},"dimensions":{"minHeight":"50vh"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;min-height:50vh;padding-right:4px;padding-left:4px"><!-- wp:group {"metadata":{"name":"Base Color Wrapper"},"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|70","margin":{"top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}},"dimensions":{"minHeight":"50vh"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="border-right-width:1px;border-left-width:1px;min-height:50vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"metadata":{"name":"404 Copy"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center" id="oops-that-page-can-t-be-found"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Oops! That page%1$scan’t be found.', 'psychedeli' ), '<br>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'psychedeli');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Footer wrapper"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /--></div>
<!-- /wp:group -->