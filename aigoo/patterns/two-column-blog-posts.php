<?php
/**
 * Title: Two Column Blog Posts
 * Slug: aigoo/blog-posts
 * Categories: posts
 * Insterter: yes
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|tertiary","width":"1px"},"right":{},"left":{}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-width:1px;margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"left","fontSize":"x-large"} -->
<p class="has-text-align-left has-x-large-font-size"><em>Top Stories</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":4,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"taxQuery":{"category":[13]}}} -->
<div class="wp-block-query"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":30,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":600,"contentPosition":"bottom center","isDark":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"right":"5vw","left":"5vw","top":"5vh","bottom":"5vh"}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center has-base-color has-text-color has-link-color" style="padding-top:5vh;padding-right:5vw;padding-bottom:5vh;padding-left:5vw;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} /-->

<!-- wp:post-date {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:post-template /--></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":15,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|30"},"padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"#dedede","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-bottom-color:#dedede;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"22px","lineHeight":"1.2"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->