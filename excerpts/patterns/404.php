<?php
/**
 * Title: 404
 * Slug: excerpts/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","align":"full","style":{"spacing":{"blockGap":{"top":"0rem"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"align":"full"} -->
<h1 class="wp-block-heading alignfull has-text-align-left" id="oops-that-page-can-t-be-found"><?php esc_html_e('Oops! Sorry. There\'s no page in here...', 'excerpts');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'excerpts');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"5vh"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:5vh"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"5%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"45%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:45%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->