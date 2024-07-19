<?php
/**
 * Title: header-with-sticky-post
 * Slug: cottage/header-with-sticky-post
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:cover {"url":"\u003c?php echo esc_url( get_stylesheet_directory_uri() ); ?\u003e/assets/images/site_logo.png","useFeaturedImage":true,"dimRatio":60,"isUserOverlayColor":true,"minHeight":60,"minHeightUnit":"vh","customGradient":"linear-gradient(180deg,rgba(0,0,0,0.74) 0%,rgba(0,0,0,0) 37%,rgb(0,0,0) 90%)","contentPosition":"center center","style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|60"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--60);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0.74) 0%,rgba(0,0,0,0) 37%,rgb(0,0,0) 90%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"60vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignwide" style="min-height:60vh"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:site-title {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:navigation {"align":"wide","style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide has-base-color has-text-color has-link-color"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"0px"}},"fontSize":"small","fontFamily":"source-sans-3"} -->
<p class="has-source-sans-3-font-family has-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:0px"><?php esc_html_e('Featured', 'cottage');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->