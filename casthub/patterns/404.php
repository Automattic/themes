<?php
/**
 * Title: 404
 * Slug: casthub/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"61.66%"} -->
<div class="wp-block-column" style="flex-basis:61.66%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"textTransform":"none"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-left" id="oops-that-page-can-t-be-found" style="text-transform:none"><?php esc_html_e('Oops...', 'casthub');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"textTransform":"none"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-left" id="oops-that-page-can-t-be-found" style="text-transform:none"><?php esc_html_e('This page can’t be found', 'casthub');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Search"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Try a search.', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"placeholder":"  Search...","buttonText":"SEARCH","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->