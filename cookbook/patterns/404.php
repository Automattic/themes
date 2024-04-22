<?php
/**
 * Title: 404
 * Slug: cookbook/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-pages","area":"header"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<main class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1} -->
<h1 class="wp-block-heading has-text-align-left" id="oops-that-page-can-t-be-found"><?php echo __('Oops! That page<br>can’t be found.', 'cookbook');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('It looks like nothing was found at this location. Maybe try a search?', 'cookbook');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"","showLabel":false,"buttonUseIcon":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->