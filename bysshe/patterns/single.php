<?php
/**
 * Title: single
 * Slug: bysshe/single
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="min-height:100vh;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"tagName":"header","metadata":{"categories":["hidden"],"patternName":"bysshe/header"},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<header class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} /-->

<!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right has-xxx-small-font-size" style="line-height:1.3"><?php esc_html_e('• •', 'bysshe');?></p>
<!-- /wp:paragraph --></header>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"50px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained","contentSize":"550px"}} -->
<main class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:post-featured-image {"width":"36px","height":"300px"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->

<!-- wp:spacer {"height":"50px","style":{"layout":[]}} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-content {"layout":{"type":"default"}} /--></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"footer","layout":{"type":"default"}} -->
<footer class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j Y","isLink":true,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","lineHeight":"1.3","fontWeight":"400"}},"fontSize":"xxx-small"} /-->

<!-- wp:post-navigation-link {"textAlign":"left","type":"previous"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"tagName":"footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<footer class="wp-block-group"><!-- wp:post-navigation-link {"textAlign":"right"} /-->

<!-- wp:paragraph {"align":"right","className":"no-underline","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right no-underline has-xxx-small-font-size" style="font-style:normal;font-weight:400;line-height:1.3;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s', 'bysshe' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></footer>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></footer>
<!-- /wp:group --></div>
<!-- /wp:group -->