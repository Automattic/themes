<?php
/**
 * Title: search
 * Slug: excerpts/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","align":"full"} -->
<div class="wp-block-columns alignfull are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"5vh"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:5vh"><!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:query-title {"type":"search"} /-->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"10vh"}}} -->
<!-- wp:post-title {"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"moreText":"More.","showMoreOnNewLine":false,"excerptLength":30,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":1.3999999999999999}},"textColor":"primary","fontSize":"large"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-date {"format":"M j"} /-->

<!-- wp:post-terms {"term":"category","prefix":"·  "} /-->

<!-- wp:paragraph -->
<p><?php esc_html_e('·', 'excerpts');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-time-to-read /--></div>
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
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:25%"><!-- wp:template-part {"slug":"sidebar","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->