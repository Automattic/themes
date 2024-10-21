<?php
/**
 * Title: single
 * Slug: goodskin/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:cover {"overlayColor":"custom-background","isUserOverlayColor":true,"isDark":false,"metadata":{"name":"Post Top Section"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-custom-background-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","align":"full"} /-->

<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignfull" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:post-title /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:separator {"className":"is-style-wide","style":{"layout":{"selfStretch":"fixed","flexSize":"80px"}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"top":"0","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"5%","style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50"},"blockGap":"0"}}} -->
<div class="wp-block-column" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0;flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"720px","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--50);flex-basis:720px"><!-- wp:group {"lock":{"move":false,"remove":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-content {"lock":{"move":false,"remove":true},"align":"full","layout":{"type":"default"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%","style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50"},"blockGap":"0"}}} -->
<div class="wp-block-column" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0;flex-basis:5%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Post Navigation"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"top":{"width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group alignfull" style="border-top-width:1px;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"0.6em","textTransform":"uppercase","letterSpacing":"0.04em"}},"fontFamily":"archivo"} -->
<p class="has-text-align-left has-archivo-font-family" style="font-size:0.6em;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e('Previous Post', 'goodskin');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-navigation-link {"type":"previous","showTitle":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.6em","textTransform":"uppercase","letterSpacing":"0.04em"}},"fontFamily":"archivo"} -->
<p class="has-archivo-font-family" style="font-size:0.6em;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e('Next Post', 'goodskin');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-navigation-link {"textAlign":"right","label":"","showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Comments Section"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|70"},"padding":{"bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:0;padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"5%","style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50"},"blockGap":"0"}}} -->
<div class="wp-block-column" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0;flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"720px"} -->
<div class="wp-block-column" style="flex-basis:720px"><!-- wp:template-part {"slug":"comments"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%","style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50"},"blockGap":"0"}}} -->
<div class="wp-block-column" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0;flex-basis:5%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
 