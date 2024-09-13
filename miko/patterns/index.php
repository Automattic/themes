<?php
/**
 * Title: index
 * Slug: miko/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"4.5vw","left":"4.5vw","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:4.5vw;padding-bottom:var(--wp--preset--spacing--60);padding-left:4.5vw"><!-- wp:navigation {"ref":2274,"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"small"} /-->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"30vw","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"fontSize":"medium"} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"small"} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"0.88rem"},"color":{"text":"#e6e6e6"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>No posts found.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"backgroundColor":"primary","textColor":"background"} -->
<div class="wp-block-column has-background-color has-primary-background-color has-text-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"}},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-gu-kssn-16241275-scaled.jpg","id":2453,"dimRatio":20,"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom left","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"2.25rem","right":"2.25rem"}}},"textColor":"foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-left has-foreground-color has-text-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:2.25rem;padding-bottom:var(--wp--preset--spacing--80);padding-left:2.25rem;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2453" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-gu-kssn-16241275-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:site-title /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->