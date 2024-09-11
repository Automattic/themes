<?php
/**
 * Title: search
 * Slug: message/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"","margin":{"top":"0vh","bottom":"0vh"},"padding":{"top":"0vh","right":"0vh","bottom":"0vh","left":"0vh"}},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0vh;margin-bottom:0vh;padding-top:0vh;padding-right:0vh;padding-bottom:0vh;padding-left:0vh"><!-- wp:template-part {"slug":"header-pages","area":"uncategorized","align":"full"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"top","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-top is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"50px"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50px"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonUseIcon":true} /-->

<!-- wp:query-title {"type":"search"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:columns {"verticalAlignment":"top","isStackedOnMobile":false,"align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"50px"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50px"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:query-title {"type":"archive"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<!-- wp:columns {"verticalAlignment":"bottom","isStackedOnMobile":false,"align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"bottom","width":"50px"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50px"><!-- wp:site-logo {"width":48,"shouldSyncIcon":false,"className":"is-style-rounded"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"},"width":"1px","color":"#f2f2f21a"}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group alignwide has-border-color has-primary-background-color has-background" style="border-color:#f2f2f21a;border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-title {"level":1,"isLink":true,"className":"no-underline"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"10px"},"width":"1px","color":"#f2f2f21a"}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group alignwide has-border-color has-primary-background-color has-background" style="border-color:#f2f2f21a;border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:0px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-content /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('—', 'message');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:columns {"verticalAlignment":"bottom","isStackedOnMobile":false,"align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"bottom","width":"50px"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50px"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:query-pagination -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"64px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-left:64px"><!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('', 'message');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"footer","area":"footer"} /--></div>
<!-- /wp:group -->