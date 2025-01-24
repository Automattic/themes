<?php
/**
 * Title: 404
 * Slug: wp-dos/404
 * Inserter: no
 */
?>
<!-- wp:cover {"dimRatio":10,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"top center","isDark":false,"style":{"spacing":{"margin":{"top":"0vh","bottom":"0vh"},"padding":{"right":"5%","left":"5%","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center" style="margin-top:0vh;margin-bottom:0vh;padding-top:var(--wp--preset--spacing--70);padding-right:5%;padding-bottom:var(--wp--preset--spacing--70);padding-left:5%;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","tagName":"header","align":"wide"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Wrapper"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70","top":"var:preset|spacing|70"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<main class="wp-block-group" style="min-height:50vh;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:heading {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30"}}}} -->
<h2 class="wp-block-heading" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--30)"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element, 3. is a 'br' HTML element, 4. is a 'br' HTML element, 5. is a 'br' HTML element, 6. is a 'br' HTML element, 7. is a 'br' HTML element, 8. is a 'br' HTML element, 9. is a 'br' HTML element */ 
echo sprintf( esc_html__( '%1$s█▄─▄▄─█─▄▄─█▄─██─▄█▄─▄▄▀█%2$s██─▄███─██─██─██─███─▄─▄█%3$s▀▄▄▄▀▀▀▄▄▄▄▀▀▄▄▄▄▀▀▄▄▀▄▄▀%4$s█─▄▄─█─█─█%5$s█─██─█─▄─█%6$s▀▄▄▄▄▀▄▀▄▀%7$s█▄─▄▄─█─▄▄─█▄─██─▄█▄─▄▄▀█%8$s██─▄███─██─██─██─███─▄─▄█%9$s▀▄▄▄▀▀▀▄▄▄▄▀▀▄▄▄▄▀▀▄▄▀▄▄▀', 'wp-dos' ), '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"0%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:0%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"metadata":{"name":"Copy"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50"}},"typography":{"textDecoration":"none"}}} -->
<h1 class="wp-block-heading has-text-align-left" id="oops-that-page-can-t-be-found" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--50);text-decoration:none"><?php esc_html_e('Oops! That page can’t be found.', 'wp-dos');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location.', 'wp-dos');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Maybe try a search?', 'wp-dos');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div></div>
<!-- /wp:cover -->