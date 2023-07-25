<?php
/**
 * Title: Alternative Home Page
 * Slug: overlaid/page-home-alt
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/overlayer-bg_musk.png","id":332,"hasParallax":true,"dimRatio":0,"minHeight":100,"minHeightUnit":"%","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"},"blockGap":"0px"}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-parallax has-background-color has-text-color" style="margin-top:0rem;margin-bottom:0rem;min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div role="img" class="wp-block-cover__image-background wp-image-332 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/overlayer-bg_musk.png)"></div><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","align":"wide"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:query {"queryId":0,"query":{"perPage":"100","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"post_tag":[],"category":[19]},"parents":[]},"tagName":"main","displayLayout":{"type":"list"},"align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":1,"isLink":true,"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:spacer {"height":"0.5rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:0.5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"textAlign":"center","excerptLength":20,"style":{"typography":{"textTransform":"none"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"8rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:8rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /--></div></div>
<!-- /wp:cover -->
