<?php
/**
 * Title: archive
 * Slug: psychedeli/archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"gradient":"default-gradient","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-default-gradient-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Contrast Color Wrapper"},"align":"wide","style":{"border":{"left":{"width":"1px"},"right":{"width":"1px"}},"spacing":{"padding":{"right":"4px","left":"4px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-right:4px;padding-left:4px"><!-- wp:group {"metadata":{"name":"Base Color Wrapper"},"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|70","margin":{"top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="border-right-width:1px;border-left-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":14,"query":{"perPage":10,"pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:query-title {"type":"archive","textAlign":"center"} /-->

<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.3%"} -->
<div class="wp-block-column" style="flex-basis:33.3%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"%","contentPosition":"center center","isDark":false,"style":{"color":[],"dimensions":{"aspectRatio":"4/3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"75%","height":"","style":{"color":[],"border":{"radius":"50%"}}} /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"61.66%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:61.66%"><!-- wp:group {"metadata":{"name":"QL Copy"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":25} /--></div>
<!-- /wp:group -->

<!-- wp:post-date /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'psychedeli');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Footer wrapper"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /--></div>
<!-- /wp:group -->