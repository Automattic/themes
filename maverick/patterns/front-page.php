<?php
/**
 * Title: front-page
 * Slug: maverick/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5vh","bottom":"5vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:5vh;padding-bottom:5vh"><!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"align":"wide"} -->
<main class="wp-block-group alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"10vh"}},"layout":{"type":"default"}} -->
<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":[]}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"66.7%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:0;flex-basis:66.7%"><!-- wp:post-title {"level":1,"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.3%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.3%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"››","showMoreOnNewLine":false,"excerptLength":27} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small","fontFamily":"libre-franklin"} -->
<p class="has-libre-franklin-font-family has-small-font-size" style="font-style:normal;font-weight:700"><?php echo __('·', 'maverick');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->