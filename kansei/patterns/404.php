<?php
/**
 * Title: 404
 * Slug: kansei/404
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:100vh;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","style":{"dimensions":{"minHeight":"75vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="min-height:75vh"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80)"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:700"><?php esc_html_e('Oops, we lost you...', 'kansei');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Type to search","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group -->