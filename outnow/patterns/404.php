<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: 404
 * Slug: outnow/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header","align":"full"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1rem","bottom":"5rem","right":"2rem","left":"2rem"},"blockGap":"2rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:1rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":1} -->
<h1 class="wp-block-heading has-text-align-left" id="oops-that-page-can-t-be-found"><?php echo __('Oops...', 'outnow');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo __('404, Sorry.', 'outnow');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"1rem"}}} -->
<p style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><?php echo __('It seems like nothing was found at this location.<br>Maybe you should try a search?', 'outnow');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="font-size:0.8rem;letter-spacing:0.02rem"><!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-404"} /-->