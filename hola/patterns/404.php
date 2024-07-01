<?php
/**
 * Title: 404
 * Slug: hola/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0vh"},"border":{"left":{"width":"5px"},"top":[],"right":{"width":"5px"},"bottom":{"width":"5px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-right-width:5px;border-bottom-width:5px;border-left-width:5px"><!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:spacer {"height":"6vh"} -->
<div style="height:6vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"6rem"}}} -->
<h1 class="wp-block-heading has-text-align-left" id="oops-that-page-can-t-be-found" style="font-size:6rem"><?php echo __('Oops! That page<br>can’t be found.', 'hola');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('It looks like nothing was found at this location.<br>Maybe try a search?', 'hola');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"3vh"} -->
<div style="height:3vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:spacer {"height":"9vh"} -->
<div style="height:9vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /--></div>
<!-- /wp:group -->