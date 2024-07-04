<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: home
 * Slug: trailblazer/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"10vh"}},"layout":{"type":"default"}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"textTransform":"uppercase"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontSize":"4.3rem"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} /--></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":[]}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"bottom","width":"66.7%","style":{"spacing":{"padding":{"top":"0px","right":"1rem","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:0px;padding-right:1rem;padding-bottom:0px;padding-left:0px;flex-basis:66.7%"><!-- wp:post-excerpt {"moreText":"››","showMoreOnNewLine":false,"excerptLength":35} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.3%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:0;flex-basis:33.3%"><!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo __('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'trailblazer');?></h1>
<!-- /wp:heading -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->