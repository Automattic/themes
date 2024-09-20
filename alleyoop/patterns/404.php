<?php
/**
 * Title: 404
 * Slug: alleyoop/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1vh","margin":{"top":"10vh","bottom":"15vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:10vh;margin-bottom:15vh"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="padding-top:0rem;padding-bottom:0rem"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.88rem","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:0.88rem;font-style:normal;font-weight:600"><?php esc_html_e('That’s a 404 page', 'alleyoop');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase"}}} -->
<h1 class="wp-block-heading" id="oops-that-page-can-t-be-found" style="text-transform:uppercase"><?php esc_html_e('Airball...', 'alleyoop');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase"}}} -->
<h1 class="wp-block-heading" id="oops-that-page-can-t-be-found" style="text-transform:uppercase"><?php esc_html_e('The page can’t be found.', 'alleyoop');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Sorry about it, but nothing was found at this location.', 'alleyoop');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Maybe try a search?', 'alleyoop');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div>
<!-- /wp:group -->