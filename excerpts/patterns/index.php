<?php
/**
 * Title: index
 * Slug: excerpts/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5vh","right":"1.5rem","bottom":"5vh","left":"1.5rem"},"margin":{"top":"0rem","bottom":"0rem"},"blockGap":"5vh"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0rem;margin-bottom:0rem;padding-top:5vh;padding-right:1.5rem;padding-bottom:5vh;padding-left:1.5rem"><!-- wp:columns {"verticalAlignment":"top","align":"full","style":{"spacing":{"blockGap":{"top":"0rem"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"10vh"}}} -->
<!-- wp:post-title {"level":1} /-->

<!-- wp:post-excerpt {"moreText":"Read more.","showMoreOnNewLine":false,"excerptLength":20,"style":{"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0.5rem","margin":{"top":"2vh"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignfull" style="margin-top:2vh"><!-- wp:post-date {"format":"M j","fontSize":"large"} /-->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo __('·', 'excerpts');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","fontSize":"large"} /-->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo __('·', 'excerpts');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-time-to-read {"fontSize":"large"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:query-pagination {"style":{"typography":{"fontSize":"3.2rem"}},"layout":{"type":"flex","verticalAlignment":"center","justifyContent":"left"}} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"5%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:25%"><!-- wp:template-part {"slug":"about"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->