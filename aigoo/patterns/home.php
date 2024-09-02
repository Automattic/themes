<?php
/**
 * Title: home
 * Slug: aigoo/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|contrast","style":"dotted","width":"2px"},"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:2px;margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-large","fontFamily":"gaegu"} -->
<h2 class="wp-block-heading has-text-align-left has-gaegu-font-family has-x-large-font-size" style="font-style:normal;font-weight:800">Trending</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":4,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"taxQuery":{"category":[13]}}} -->
<div class="wp-block-query"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"2rem"}}} /-->

<!-- wp:post-date {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:read-more /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-template /--></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":15,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[11]}}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|30"},"padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|contrast","style":"dotted","width":"2px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:2px;margin-bottom:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"22px","lineHeight":"1.2"}}} /-->

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

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:6vw;padding-left:6vw"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast","style":"dotted","width":"2px"},"right":[],"bottom":{"color":"var:preset|color|contrast","style":"dotted","width":"2px"},"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:dotted;border-top-width:2px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:2px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":85,"width":"80px","height":"70px","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_11-1024x650.jpg" alt="" class="wp-image-85" style="object-fit:cover;width:80px;height:70px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="#">Watch</a> <strong>BABYMONSTER</strong> by YG Entertainment Debut</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|contrast","style":"dotted","width":"2px"},"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:2px;margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","fontSize":"x-large","fontFamily":"gaegu"} -->
<h2 class="wp-block-heading has-text-align-center has-gaegu-font-family has-x-large-font-size">Must Read</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[14,7,1,8,12]}},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"22px"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":11,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[13]}},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"default","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontSize":"38px","fontStyle":"normal","fontWeight":"800"}}} /-->

<!-- wp:post-author-name /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"6vh","bottom":"6vh","left":"6vw","right":"6vw"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:6vh;padding-right:6vw;padding-bottom:6vh;padding-left:6vw"><!-- wp:heading {"textAlign":"center","fontSize":"x-large","fontFamily":"gaegu"} -->
<h2 class="wp-block-heading has-text-align-center has-gaegu-font-family has-x-large-font-size">K-Idols</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_6-scaled.jpg","id":71,"dimRatio":30,"overlayColor":"black","minHeight":260,"contentPosition":"bottom left","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"textColor":"base"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-71" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_6-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><a href="#"><em>Dang Ji-Woon</em></a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_4.png","id":62,"dimRatio":30,"overlayColor":"black","minHeight":260,"contentPosition":"bottom left","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"textColor":"base"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-62" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_4.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><a href="#"><em>Kwon Hye-ri</em></a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_8-scaled.jpg","id":74,"dimRatio":30,"overlayColor":"black","minHeight":260,"contentPosition":"bottom left","isDark":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"textColor":"base"} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-74" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_8-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><em><a href="#">ISEUL</a></em></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_7.png","id":73,"dimRatio":30,"overlayColor":"black","minHeight":260,"contentPosition":"bottom left","isDark":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"textColor":"base"} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-73" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_7.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><em><a href="#">Kim Ji-Yoo</a></em></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;padding-right:6vw;padding-left:6vw"><!-- wp:group {"align":"wide","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-style:none;border-width:0px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"width":"2px","style":"dotted"},"top":[],"right":[],"left":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-style:dotted;border-bottom-width:2px;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"fontSize":"large","fontFamily":"gaegu"} -->
<h2 class="wp-block-heading has-gaegu-font-family has-large-font-size">Search the blog</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:search {"showLabel":false,"placeholder":"\u0022BTS\u0022"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->