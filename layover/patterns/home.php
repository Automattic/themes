<?php
/**
 * Title: home
 * Slug: layover/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"http://localhost.local/wp-content/uploads/2024/08/layover_background.jpg","hasParallax":true,"dimRatio":0,"customOverlayColor":"#212121","isUserOverlayColor":true,"contentPosition":"center center","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"},"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-parallax" style="margin-top:0rem;margin-bottom:0rem;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#212121"></span><div class="wp-block-cover__image-background  has-parallax" style="background-position:50% 50%;background-image:url(http://localhost.local/wp-content/uploads/2024/08/layover_background.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","align":"wide"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"8rem"}},"layout":{"type":"default"}} -->
<!-- wp:post-title {"textAlign":"center","level":1,"isLink":true,"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:1rem;padding-bottom:1rem"><!-- wp:post-excerpt {"textAlign":"center","moreText":"More.","showMoreOnNewLine":false,"excerptLength":23} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php echo __('There are no posts available. Try creating one.', 'layover');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /--></div></div>
<!-- /wp:cover -->