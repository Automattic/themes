<?php
/**
 * Title: home
 * Slug: streamer/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"dimensions":{"minHeight":"50vh"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="min-height:50vh;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"metadata":{"name":"Hero"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"},"padding":{"right":"5%"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--50);padding-right:5%"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e('Beyond Limits and Time, Our Legacy Unfolds.', 'streamer');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Unleash the power, conquer the game. Join us in the quest for greatness.', 'streamer');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:read-more {"content":"[[ About us ]]"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.7%"} -->
<div class="wp-block-column" style="flex-basis:66.7%"><!-- wp:query {"queryId":0,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"metadata":{"name":"Post wrapper"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"8px"},"spacing":{"blockGap":"var:preset|spacing|20"}},"backgroundColor":"tertiary","textColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-primary-color has-tertiary-background-color has-text-color has-background has-link-color" style="border-radius:8px"><!-- wp:group {"metadata":{"name":"Post Text"},"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Date and arrow"},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:group {"metadata":{"name":"Arrow"},"style":{"layout":{"selfStretch":"fixed","flexSize":"24px"},"dimensions":{"minHeight":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"4px"}},"backgroundColor":"primary","textColor":"foreground","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-foreground-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:4px;min-height:24px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1"><?php esc_html_e('↗', 'streamer');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"className":"no-underline"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":{"bottomRight":"6px"}},"spacing":{"padding":{"left":"var:preset|spacing|40"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.7%"} -->
<div class="wp-block-column" style="flex-basis:66.7%"><!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"metadata":{"name":"Post wrapper"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"8px"},"spacing":{"blockGap":"var:preset|spacing|20"}},"backgroundColor":"secondary","textColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-primary-color has-secondary-background-color has-text-color has-background has-link-color" style="border-radius:8px"><!-- wp:group {"metadata":{"name":"Post Text"},"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Date and arrow"},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:group {"metadata":{"name":"Arrow"},"style":{"layout":{"selfStretch":"fixed","flexSize":"24px"},"dimensions":{"minHeight":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"4px"}},"backgroundColor":"primary","textColor":"foreground","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-foreground-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:4px;min-height:24px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1"><?php esc_html_e('↗', 'streamer');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"className":"no-underline"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":{"bottomRight":"6px"}},"spacing":{"padding":{"left":"var:preset|spacing|40"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'streamer');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->