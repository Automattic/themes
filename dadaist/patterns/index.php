<?php
/**
 * Title: index
 * Slug: dadaist/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"wide"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<!-- wp:group {"metadata":{"name":"Halftone Wrapper Red"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_1.png","id":10435,"source":"file","title":"dada_haltfone-tex_1"},"backgroundSize":"720px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Query loop copy"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"4vh","right":"var:preset|spacing|50","left":"var:preset|spacing|40","bottom":"4vh"},"margin":{"top":"2vh"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="margin-top:2vh;padding-top:4vh;padding-right:var(--wp--preset--spacing--50);padding-bottom:4vh;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0vh","left":"0vh"},"padding":{"top":"0vh","bottom":"0vh","left":"0vh","right":"0vh"}}}} -->
<div class="wp-block-columns" style="padding-top:0vh;padding-right:0vh;padding-bottom:0vh;padding-left:0vh"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-excerpt {"textAlign":"left","moreText":"Read more.","showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"metadata":{"name":"Post Image and Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"color":{"duotone":"var:preset|duotone|bw"}}} /-->

<!-- wp:group {"metadata":{"name":"Post Meta Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0.22rem","bottom":"0.22rem"}}},"backgroundColor":"base","layout":{"type":"flex"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:0.22rem;padding-bottom:0.22rem"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('·', 'dadaist');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"wide"} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dadaist');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /-->