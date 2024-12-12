<?php
/**
 * Title: 404
 * Slug: leancv/404
 * Inserter: no
 */
?>
<!-- wp:columns {"metadata":{"categories":["hidden"]},"align":"full","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"margin":{"top":"0rem","bottom":"0rem"},"blockGap":{"top":"0rem","left":"0rem"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0rem;margin-bottom:0rem;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:column {"verticalAlignment":"stretch","width":"65%","metadata":{"name":"Content Wrapper"}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:65%"><!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"metadata":{"name":"Error"},"style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:heading {"textAlign":"left","level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Oops! That page%1$scan’t be found.', 'leancv' ), '<br>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('You can try a search:', 'leancv');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Search"},"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:search {"showLabel":false,"buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"top":{"color":"var:preset|color|primary","style":"solid"},"right":{"color":"var:preset|color|primary","style":"solid"},"bottom":{"color":"var:preset|color|primary","style":"solid"},"left":{"color":"var:preset|color|primary","style":"solid"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /--></main>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"35%","lock":{"move":false,"remove":false},"metadata":{"name":"Portrait Wrapper"},"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;flex-basis:35%"><!-- wp:group {"metadata":{"name":"Pinned Portrait Container"},"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"profile-pic"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->