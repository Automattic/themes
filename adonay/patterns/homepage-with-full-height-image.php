<?php
/**
 * Title: Homepage with a full height image
 * Slug: adonay/homepage-with-a-full-height-image
 * Categories: page
 * Inserter: yes
 */
?>
<!-- wp:columns {"lock":{"move":false,"remove":true},"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.3"},"spacing":{"margin":{"right":"var:preset|spacing|80"}}}} -->
<p style="margin-right:var(--wp--preset--spacing--80);line-height:1.3"><?php echo wp_kses_post( __ ('I’m a photographer and art director based in Manchester, United Kingdom. When I’m not shooting weddings and portraits, you can find me posting on <a href="#">Instagram</a>. Currently available for hire.', 'adonay') );?></p>
<!-- /wp:paragraph --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ('<a href="#">Get in Touch</a> ', 'adonay') );?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ('<a href="#">Instagram</a> ', 'adonay') );?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ('<a href="#">X</a> ', 'adonay') );?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ('<a href="#">Youtube</a> ', 'adonay') );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/adonay_image-1-scaled.jpg","dimRatio":0,"overlayColor":"base","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom right","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"color":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-right" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/adonay_image-1-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-right" style="font-size:14px"><?php echo wp_kses_post( __ ('Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a> ', 'adonay') );?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
