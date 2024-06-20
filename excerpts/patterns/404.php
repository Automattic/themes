<?php
/**
 * Title: 404
 * Slug: excerpts/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5vh","right":"1.5rem","bottom":"5vh","left":"1.5rem"},"margin":{"top":"0rem","bottom":"0rem"},"blockGap":"5vh"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0rem;margin-bottom:0rem;padding-top:5vh;padding-right:1.5rem;padding-bottom:5vh;padding-left:1.5rem"><!-- wp:columns {"verticalAlignment":"top","align":"full","style":{"spacing":{"blockGap":{"top":"0rem"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0%","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"4rem"},"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:4rem;padding-top:0px;padding-right:0%;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":1,"align":"full"} -->
<h1 class="wp-block-heading alignfull has-text-align-left" id="oops-that-page-can-t-be-found"><?php echo __('Oops! Sorry.<br>No page in here...', 'excerpts');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo __('It looks like nothing was found at this location. Maybe try a search?', 'excerpts');?></p>
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