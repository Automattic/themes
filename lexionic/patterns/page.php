<?php
/**
 * Title: page
 * Slug: lexionic/page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":"40%","metadata":{"name":"Book Column"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%"><!-- wp:group {"metadata":{"name":"Book Stack"},"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:100vh;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","gradient":"hard-gradient","contentPosition":"center center","sizeSlug":"large","metadata":{"name":"Global Cover"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-hard-gradient-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-artwork_tidy.png","dimRatio":0,"isUserOverlayColor":true,"isDark":false,"sizeSlug":"full","metadata":{"name":"Insert Book Artwork"},"style":{"border":{"radius":"4px"},"shadow":"var:preset|shadow|natural","dimensions":{"aspectRatio":"2/3"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light" style="border-radius:4px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:var(--wp--preset--shadow--natural)"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-artwork_tidy.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"name":"Light and shadows"},"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-cover_shadows.png" alt="" style="aspect-ratio:2/3;object-fit:cover"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"60%","metadata":{"name":"Content Column"},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-background-background-color has-background" style="flex-basis:60%"><!-- wp:group {"metadata":{"name":"Content wrapper"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"585px","wideSize":"720px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Date and title"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"textTransform":"none"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"lock":{"move":false,"remove":false},"layout":{"type":"constrained"}} /-->

<!-- wp:spacer {"height":"var:preset|spacing|70","metadata":{"name":"Spacer XL"}} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->