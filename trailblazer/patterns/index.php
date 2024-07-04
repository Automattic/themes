<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: index
 * Slug: trailblazer/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"10vh"}},"layout":{"type":"default"}} -->
<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":[]}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"60%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:0;flex-basis:60%"><!-- wp:post-title {"level":1,"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"5%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:0;flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:35%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"››","showMoreOnNewLine":false,"excerptLength":33} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small","fontFamily":"libre-franklin"} -->
<p class="has-libre-franklin-font-family has-small-font-size" style="font-style:normal;font-weight:700"><?php echo __('·', 'trailblazer');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","className":"no-underline"} /--></div>
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
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->