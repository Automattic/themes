<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: 404
 * Slug: trailblazer/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase"}}} -->
<h1 class="wp-block-heading" style="text-transform:uppercase"><?php echo __('This is a<br>404 error.', 'trailblazer');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('This page is not here. It looks like nothing was found at this location', 'trailblazer');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:search {"showLabel":false,"placeholder":"SEARCH","width":50,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->