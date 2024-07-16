<?php
/**
 * Title: search
 * Slug: iotix/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"5vw","left":"5vw"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:5vw;padding-left:5vw"><!-- wp:query {"queryId":38,"query":{"perPage":15,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"search","align":"wide","style":{"spacing":{"padding":{"bottom":"20px"}}},"fontSize":"x-large"} /-->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:search {"showLabel":false,"placeholder":"<?php esc_html_e( 'Search...', 'iotix'); ?>","widthUnit":"%","buttonText":"<?php esc_html_e( 'Search', 'iotix'); ?>","style":{"border":{"radius":"100px"}},"backgroundColor":"foreground"} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'iotix');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}},"border":{"radius":"30px"}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:30px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

<!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'Read article →', 'iotix'); ?>"} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"fontSize":"medium","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide has-medium-font-size" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div>
<!-- /wp:group -->
