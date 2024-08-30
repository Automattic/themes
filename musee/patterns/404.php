<?php
/**
 * Title: 404
 * Slug: musee/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left" id="oops-that-page-can-t-be-found"><?php echo __('Oops! That page can’t be found.', 'musee');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('It looks like nothing was found at this location.<br>Maybe try a search?', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->