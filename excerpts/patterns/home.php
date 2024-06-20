<?php
/**
 * Title: home
 * Slug: excerpts/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"right":"1.5rem","left":"1.5rem"},"margin":{"top":"0rem","bottom":"0rem"},"blockGap":"0rem"}},"backgroundColor":"primary","textColor":"background","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0rem;margin-bottom:0rem;padding-right:1.5rem;padding-left:1.5rem"><!-- wp:group {"align":"full","style":{"position":{"type":"sticky","top":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color"><!-- wp:template-part {"slug":"header-home","area":"uncategorized"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5vh","bottom":"10vh"},"margin":{"top":"0rem","bottom":"0rem"},"blockGap":"0rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0rem;margin-bottom:0rem;padding-top:5vh;padding-bottom:10vh"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"blockGap":"15vh"}},"textColor":"background"} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0vh"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"90%"} -->
<div class="wp-block-column" style="flex-basis:90%"><!-- wp:post-excerpt {"moreText":"Read more.","showMoreOnNewLine":false,"excerptLength":80,"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0.5rem","margin":{"top":"2vh"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignfull" style="margin-top:2vh"><!-- wp:post-date {"format":"M j","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large"} -->
<p class="has-background-color has-text-color has-link-color has-large-font-size"><?php echo __('·', 'excerpts');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large"} -->
<p class="has-background-color has-text-color has-link-color has-large-font-size"><?php echo __('·', 'excerpts');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-time-to-read {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","verticalAlignment":"center","justifyContent":"left"}} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-home","area":"uncategorized"} /--></div>
<!-- /wp:group -->