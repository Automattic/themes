<?php
/**
 * Title: front-page
 * Slug: alleyoop/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-with-sticky-post","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1vh","margin":{"top":"10vh","bottom":"10vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:10vh;margin-bottom:10vh"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="padding-top:0rem;padding-bottom:0rem"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"0.88rem","fontStyle":"normal","fontWeight":"700"}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:0.88rem;font-style:normal;font-weight:700"><?php esc_html_e('Latest Posts', 'alleyoop');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.88rem","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:0.88rem;font-style:normal;font-weight:700"><a href="#" ><?php esc_html_e('View all', 'alleyoop');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"enhancedPagination":true,"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"5vh","top":"5vh"}},"border":{"top":{"width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-top-width:2px;padding-top:5vh;padding-bottom:5vh"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xxx-large"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":40} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing found. Please try again with some different keywords.', 'alleyoop');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontSize":"x-large","layout":{"type":"default"}} -->
<div class="wp-block-group has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div>
<!-- /wp:group -->
