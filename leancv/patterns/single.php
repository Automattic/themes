<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: single
 * Slug: leancv/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns {"metadata":{"categories":["hidden"]},"align":"full","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"margin":{"top":"0rem","bottom":"0rem"},"blockGap":{"top":"0rem","left":"0rem"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0rem;margin-bottom:0rem;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:column {"verticalAlignment":"stretch","width":"65%","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"background","textColor":"primary"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-primary-color has-background-background-color has-text-color has-background has-link-color" style="flex-basis:65%"><!-- wp:group {"style":{"spacing":{"blockGap":"3rem","padding":{"right":"1.5rem","left":"1.5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:1.5rem;padding-left:1.5rem"><!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:post-title {"level":1} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false}} -->
<main class="wp-block-group"><!-- wp:post-content {"lock":{"move":false,"remove":false},"layout":{"type":"constrained"}} /-->

<!-- wp:template-part {"slug":"post-meta"} /--></main>
<!-- /wp:group -->

<!-- wp:comments {"style":{"spacing":{"margin":{"top":"4.5rem"}}},"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:4.5rem"><!-- wp:comments-title {"showPostTitle":false,"showCommentsCount":false} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"3rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-bottom:3rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":40,"style":{"color":[]}} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:comment-author-name /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0.5em"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"isLink":false} /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous {"label":"Older"} /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next {"label":"Newer"} /-->
<!-- /wp:comments-pagination -->

<!-- wp:spacer {"height":"4rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:4rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-comments-form /-->

<!-- wp:spacer {"height":"4rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:4rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:comments -->

<!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"35%","lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;flex-basis:35%"><!-- wp:group {"metadata":{"categories":["hidden"]},"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"right":"0px","top":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/mary-shelley_samueljstump.jpg","id":7,"dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"right":"0rem","left":"0rem","top":"0px","bottom":"0px"},"margin":{"top":"0rem","bottom":"0rem"}},"color":[]}} -->
<div class="wp-block-cover alignfull" style="margin-top:0rem;margin-bottom:0rem;padding-top:0px;padding-right:0rem;padding-bottom:0px;padding-left:0rem;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/mary-shelley_samueljstump.jpg" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->