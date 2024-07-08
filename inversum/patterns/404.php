<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: 404
 * Slug: inversum/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"6.4rem","lineHeight":0.90000000000000002}},"className":"has-text-align-center"} -->
<h2 class="wp-block-heading has-text-align-left has-text-align-center" style="font-size:6.4rem;line-height:0.9"><?php echo __('Nothing here,<br>sorry.', 'inversum');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo __('This page or post could not be found. Maybe a search would help?', 'inversum');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"header","tagName":"header"} /-->