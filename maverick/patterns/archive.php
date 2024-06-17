<?php
/**
 * Title: archive
 * Slug: maverick/archive
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5vh","bottom":"5vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:5vh;padding-bottom:5vh"><!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"align":"wide"} -->
<main class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive"} /-->

<!-- wp:query {"queryId":0,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"15vh"}}} -->
<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":[]}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"66.7%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:0;flex-basis:66.7%"><!-- wp:post-title {"level":1,"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.3%","style":{"spacing":{"padding":{"top":"0px","right":"1rem","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:1rem;padding-bottom:0px;padding-left:0px;flex-basis:33.3%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"››","showMoreOnNewLine":false,"excerptLength":26} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"libre-franklin"} -->
<p class="has-libre-franklin-font-family" style="font-size:0.8rem;font-style:normal;font-weight:700"><?php echo __('·', 'maverick');?></p>
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
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo __('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'maverick');?></h1>
<!-- /wp:heading -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->