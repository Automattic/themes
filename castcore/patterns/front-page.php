<?php
/**
 * Title: front-page
 * Slug: castcore/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:cover {"overlayColor":"primary","minHeight":20,"minHeightUnit":"vh","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"},"padding":{"bottom":"0rem","top":"0rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="margin-top:0rem;margin-bottom:0rem;padding-top:0rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--40);min-height:20vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:query {"queryId":0,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"taxQuery":{"category":[],"post_tag":[]},"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"default"}} -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50"},"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50)"><!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"fontSize":"4rem"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","height":"","style":{"color":[],"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"},"blockGap":"5rem","padding":{"top":"5rem","bottom":"5rem","left":"1rem","right":"1rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0rem;margin-bottom:0rem;padding-top:5rem;padding-right:1rem;padding-bottom:5rem;padding-left:1rem"><!-- wp:query {"queryId":0,"query":{"perPage":"9","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[],"post_tag":[]},"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"5rem"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"5%","left":"5%"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","height":"","scale":"contain","style":{"color":[]}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"none","fontSize":"2.6rem","letterSpacing":"-0.03rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.2rem"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":30} /-->

<!-- wp:read-more {"content":"Listen ‣","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","fontSize":"0.8rem"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"0rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="margin-top:3rem;margin-bottom:0rem"><!-- wp:query-pagination {"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"},"blockGap":"6rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"3rem"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"3rem","padding":{"right":"2rem","bottom":"3rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="padding-right:2rem;padding-bottom:3rem"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Learn about where WordPress is going and how you can get involved.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Explore WordPress with Josepha Haden, the project’s executive director, and guests. Learn about where WordPress is going, how we’ll get there, and how you can get involved. Join us today and help democratize publishing!</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"secondary","iconColorValue":"#342e38","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"1rem"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://wordpress.org","service":"tumblr"} /-->

<!-- wp:social-link {"url":"https://wordpress.org","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://wordpress.org","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://wordpress.org","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.3%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:33.3%"><!-- wp:group {"style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image {"id":824,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/IMG_NohoSpaceNYC.jpg" alt="" class="wp-image-824" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->