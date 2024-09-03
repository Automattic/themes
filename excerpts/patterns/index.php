<?php
/**
 * Title: index
 * Slug: excerpts/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0vh"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"90%"} -->
<div class="wp-block-column" style="flex-basis:90%"><!-- wp:post-excerpt {"moreText":"Read more.","showMoreOnNewLine":false,"excerptLength":50,"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0.5rem","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:post-date {"format":"M j","fontSize":"large"} /-->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e('·', 'excerpts');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","fontSize":"large"} /-->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e('·', 'excerpts');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-time-to-read {"fontSize":"large"} /--></div>
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

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->