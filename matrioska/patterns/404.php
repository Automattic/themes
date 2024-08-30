<?php
/**
 * Title: 404
 * Slug: matrioska/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"5rem","margin":{"top":"5rem","bottom":"10rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:5rem;margin-bottom:10rem"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"textAlign":"left","level":1} -->
<h1 class="wp-block-heading has-text-align-left" id="oops-that-page-can-t-be-found"><?php echo __('Oops!<br>The page can’t<br>be found.', 'matrioska');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}}} -->
<p style="font-size:1.5rem"><?php echo __('It looks like nothing was found at this location. Maybe try a search?', 'matrioska');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search...","buttonPosition":"button-inside","buttonUseIcon":true} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->