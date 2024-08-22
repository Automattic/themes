<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: 404
 * Slug: olympique/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"},"border":{"left":{"width":"2px"},"top":[],"right":{"width":"2px"},"bottom":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-right-width:2px;border-left-width:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center" id="page-not-found"><?php esc_html_e('Page Not', 'olympique');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center" id="page-not-found"><?php esc_html_e('Found.', 'olympique');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php esc_html_e('The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'olympique');?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"border":{"radius":"2px"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"contrast","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-contrast-background-color has-background"><!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->