<?php
/**
 * Title: home
 * Slug: castcore/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"isUserOverlayColor":true,"minHeight":340,"gradient":"default-gradient","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"border":{"left":{"color":"var:preset|color|base","width":"20px"},"top":[],"right":{"color":"var:preset|color|base","width":"20px"},"bottom":[]},"elements":{"heading":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="border-right-color:var(--wp--preset--color--base);border-right-width:20px;border-left-color:var(--wp--preset--color--base);border-left-width:20px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-default-gradient-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":0,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"default"}} -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"63.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:63.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"isLink":true} /-->

<!-- wp:group {"metadata":{"name":"Date and category"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1"><?php esc_html_e('·', 'castcore');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"2.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2.5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","height":"","style":{"color":[],"spacing":{"padding":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Podcasts"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":"9","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"61.66%","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:61.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.2rem"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"Listen ⇢","showMoreOnNewLine":false,"excerptLength":50} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"61.66%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:61.66%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","height":"","style":{"color":[]}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"About"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|quaternary","width":"20px"},"top":[],"right":[],"left":[]}},"gradient":"hard-95-gradient"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom has-hard-95-gradient-gradient-background has-background" style="border-bottom-color:var(--wp--preset--color--quaternary);border-bottom-width:20px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"bottom","width":"61.66%","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:61.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e('Meet the podcast host, Naomi Ellis.', 'castcore');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Join Naomi\'s warm insights that turn complex biographies into relatable stories that inspire and educate the public.', 'castcore');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://distributed.blog/podcast#subscribe"><?php esc_html_e('Subscribe Now', 'castcore');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"5%","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"33.33%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hand-man-person-woman-hair-female-676098.jpg" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->