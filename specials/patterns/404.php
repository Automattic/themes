<?php
/**
 * Title: 404
 * Slug: specials/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0vh","bottom":"0vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0vh;margin-bottom:0vh"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"2px"}},"border":{"bottom":{"width":"2px"},"top":[],"right":[],"left":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-bottom-width:2px;padding-bottom:2px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"4vh","top":"8vh","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"4vh"},"border":{"left":{"width":"1px"},"right":{"width":"1px"},"bottom":{"width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-right-width:1px;border-bottom-width:1px;border-left-width:1px;padding-top:8vh;padding-right:var(--wp--preset--spacing--50);padding-bottom:4vh;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"fontSize":"4rem"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-left" style="font-size:4rem"><?php echo __('sorry!', 'specials');?></h1>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo __('We are apparently out of that item, or the page you are looking for doesn\'t exist.', 'specials');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('What do you think about a new selection?', 'specials');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:search {"showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->