<?php
/**
 * Title: home
 * Slug: goodskin/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Intro \u0026 Posts"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"overlayColor":"custom-background","isUserOverlayColor":true,"isDark":false,"metadata":{"name":"Intro"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-contrast-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-custom-background-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","align":"full"} /-->

<!-- wp:query {"queryId":13,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-template {"align":"full"} -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"isLink":true} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('·', 'goodskin');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name /-->

<!-- wp:separator {"className":"is-style-wide","style":{"layout":{"selfStretch":"fixed","flexSize":"80px"}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Posts"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"","height":""} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:post-date {"fontSize":"x-small"} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('·', 'goodskin');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e('Product Reviews', 'goodskin');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-product-1-1.jpg" alt="<?php esc_html_e('', 'goodskin');?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Sunsai SPF50+  Lightweight Sunscreen', 'goodskin');?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/rating-star {"rating":3,"className":"is-style-filled","align":"center"} -->
<figure class="wp-block-jetpack-rating-star is-style-filled" style="text-align:center"><span>★</span><span>★</span><span>★</span></figure>
<!-- /wp:jetpack/rating-star --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-product-2-1.jpg" alt="<?php esc_html_e('', 'goodskin');?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('ULing Wonderberry Instant Facial', 'goodskin');?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/rating-star {"rating":5,"className":"is-style-filled","align":"center"} -->
<figure class="wp-block-jetpack-rating-star is-style-filled" style="text-align:center"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></figure>
<!-- /wp:jetpack/rating-star --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-product-3-1.jpg" alt="<?php esc_html_e('', 'goodskin');?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Yiae Kize-Rouk Enlighten Illuminating Serum', 'goodskin');?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/rating-star {"rating":4,"className":"is-style-filled","align":"center"} -->
<figure class="wp-block-jetpack-rating-star is-style-filled" style="text-align:center"><span>★</span><span>★</span><span>★</span><span>★</span></figure>
<!-- /wp:jetpack/rating-star --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-product-4-1-1024x1024.jpg" alt="<?php esc_html_e('', 'goodskin');?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Anai Skin Perfecting Charcoal Mask', 'goodskin');?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/rating-star {"rating":4,"className":"is-style-filled","align":"center"} -->
<figure class="wp-block-jetpack-rating-star is-style-filled" style="text-align:center"><span>★</span><span>★</span><span>★</span><span>★</span></figure>
<!-- /wp:jetpack/rating-star --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Newsletter \u0026 Gallery"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Newsletter"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"custom-background","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"style":{"typography":{"fontSize":"4.2rem"}}} -->
<h2 class="wp-block-heading" style="font-size:4.2rem"><em><?php esc_html_e('better', 'goodskin');?></em><?php esc_html_e('skin', 'goodskin');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-large","fontFamily":"instrument-serif"} -->
<p class="has-instrument-serif-font-family has-x-large-font-size" style="line-height:1"><em><?php esc_html_e('better', 'goodskin');?></em><?php esc_html_e('skin is a monthly newsletter where I share some favorite products from the goodskin community, blog posts and news.', 'goodskin');?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/contact-form {"subject":"[goodskin] Newsletter","to":""} -->
<div class="wp-block-jetpack-contact-form">
<!-- wp:jetpack/field-email {"label":"","requiredText":"(required)","placeholder":"Your Email","borderWidth":1,"fieldBackgroundColor":"#efefea"} /-->
<!-- wp:jetpack/button {"element":"button","text":"Subscribe","lock":{"remove":true}} /-->
</div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","metadata":{"name":"Gallery"},"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-home-image-2-2.jpg" alt="<?php esc_html_e('', 'goodskin');?>" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"8vw"}},"borderColor":"base"} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-home-image-3-1.jpg" alt="<?php esc_html_e('', 'goodskin');?>" class="has-border-color has-base-border-color" style="border-width:8vw;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->