<?php
/**
 * Title: 404
 * Slug: bysshe/404
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100vh;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"tagName":"header","metadata":{"categories":["hidden"],"patternName":"bysshe/header"},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<header class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} /-->

<!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right has-xxx-small-font-size" style="line-height:1.3"><?php esc_html_e('• •', 'bysshe');?></p>
<!-- /wp:paragraph --></header>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"50px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"padding":{"right":"var:preset|spacing|80"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--80)"><!-- wp:heading {"style":{"typography":{"textTransform":"lowercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:400;text-transform:lowercase"><?php esc_html_e('Oops, we lost you...', 'bysshe');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px","style":{"layout":[]}} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Serch","showLabel":false,"placeholder":"Type to search","width":100,"widthUnit":"%","buttonUseIcon":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"50px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<footer class="wp-block-group"><!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right has-xxx-small-font-size" style="line-height:1.3"><?php esc_html_e('• •', 'bysshe');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline","style":{"typography":{"lineHeight":"1.3","textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"xxx-small"} -->
<p class="no-underline has-xxx-small-font-size" style="font-style:normal;font-weight:400;line-height:1.3;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s', 'bysshe' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></footer>
<!-- /wp:group --></div>
<!-- /wp:group -->