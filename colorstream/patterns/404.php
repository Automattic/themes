<?php
/**
 * Title: 404
 * Slug: colorstream/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="min-height:50vh;margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left" id="oops-that-page-can-t-be-found"><?php esc_html_e('Oops! That page can’t be found.', 'colorstream');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'colorstream');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:search {"showLabel":false,"placeholder":"Search","width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->