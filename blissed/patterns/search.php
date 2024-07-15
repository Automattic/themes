<?php
/**
 * Title: search
 * Slug: blissed/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0rem","left":"0rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"65%","style":{"spacing":{"padding":{"top":"5vh","bottom":"5vh"}}}} -->
<div class="wp-block-column" style="padding-top:5vh;padding-bottom:5vh;flex-basis:65%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"33.3%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:33.3%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:template-part {"slug":"header","area":"header"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.6%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:66.6%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|30"}},"dimensions":{"minHeight":"30vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:30vh;margin-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":1,"fontSize":"large"} -->
<h1 class="wp-block-heading has-large-font-size"><?php echo __('Anne Brown &amp; Ashley Smith<br>are set to wed', 'blissed');?></h1>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"search"} /-->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search...","buttonText":"","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"33.3%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:33.3%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:template-part {"slug":"footer","area":"footer"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.6%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:66.6%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70","margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"5vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"10vh"}}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-date {"style":{"typography":{"textTransform":"capitalize"}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-excerpt {"moreText":"Read more \u0026rarr;","excerptLength":44} /-->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70)"><!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal","flexWrap":"nowrap"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"no-underline","fontSize":"small"} -->
<p class="no-underline has-small-font-size"><?php echo __('<a href="#">Instagram</a> / <a href="#">TikTok</a> / <a href="#">X</a>', 'blissed');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"lock":{"move":false,"remove":true},"className":"no-underline","fontSize":"small"} -->
<p class="no-underline has-small-font-size"><?php echo __('Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a>', 'blissed');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%","style":{"spacing":{"padding":{"top":"5vh","bottom":"5vh"}}}} -->
<div class="wp-block-column" style="padding-top:5vh;padding-bottom:5vh;flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"5vh"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:5vh"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/couple-photo.jpg","dimRatio":10,"overlayColor":"base","isUserOverlayColor":true,"minHeight":87.5,"minHeightUnit":"vh","layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:87.5vh"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo __('', 'blissed');?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/couple-photo.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php echo __('', 'blissed');?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->