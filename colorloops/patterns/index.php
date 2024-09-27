<?php
/**
 * Title: index
 * Slug: colorloops/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","align":"full","style":{"dimensions":{"minHeight":"1px"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="min-height:1px"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:query-title {"type":"archive","align":"wide"} /-->

<!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"bottom":{"width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast"} -->
<div class="wp-block-columns alignwide has-contrast-color has-text-color has-link-color" style="border-bottom-width:1px;margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"stretch","width":"220px"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:220px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","width":"","height":"","style":{"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":"unset"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":""} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem","margin":{"bottom":"2rem"},"padding":{"right":"1.5rem"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:2rem;padding-right:1.5rem"><!-- wp:post-terms {"term":"category","textAlign":"left","separator":" . "} /-->

<!-- wp:post-date {"textAlign":"left","format":"M j.Y","isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'colorloops');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></main>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->