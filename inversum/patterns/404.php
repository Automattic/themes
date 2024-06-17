<?php
/**
 * Title: 404
 * Slug: inversum/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6vh","bottom":"6vh"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="padding-top:6vh;padding-bottom:6vh"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"6.4rem","lineHeight":0.9}},"className":"has-text-align-center"} -->
<h2 class="wp-block-heading has-text-align-left has-text-align-center" style="font-size:6.4rem;line-height:0.9"><?php echo __('Nothing here,<br>sorry.', 'inversum');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo __('This page or post could not be found. Maybe a search would help?', 'inversum');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->