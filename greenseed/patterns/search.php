<?php
/**
 * Title: search
 * Slug: greenseed/search
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sticky Header"},"align":"full","style":{"position":{"type":"sticky","top":"0px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background"><!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:spacer {"height":"var:preset|spacing|80","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:query-title {"type":"search","level":2} /-->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search..."} /-->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-template -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-excerpt /-->

<!-- wp:spacer {"height":"var:preset|spacing|40","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"backgroundColor":"tertiary"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing was found. Please try a search with different keywords.', 'greenseed');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"var:preset|spacing|80","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:template-part {"slug":"footer","area":"footer"} /--></div>
<!-- /wp:group -->