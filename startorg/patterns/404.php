<?php
/**
 * Title: 404
 * Slug: startorg/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-global","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"},"padding":{"right":"4vw","left":"4vw"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60);padding-right:4vw;padding-left:4vw"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","fontSize":"x-large"} -->
<h1 class="wp-block-heading alignwide has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php esc_html_e('Oops! That page can’t be found.', 'startorg');?></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'startorg');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonUseIcon":true,"style":{"border":{"radius":"100px","width":"0px","style":"none"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"backgroundColor":"secondary","fontSize":"small"} /-->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-global","tagName":"footer"} /-->
