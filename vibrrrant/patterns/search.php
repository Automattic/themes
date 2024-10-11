<?php
/**
 * Title: search
 * Slug: vibrrrant/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"backgroundColor":"contrast","textColor":"base"} -->
<div class="wp-block-column has-base-color has-contrast-background-color has-text-color has-background"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/vibrrrant-bg-image-1-scaled.jpg","dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="padding-top:0;padding-right:var(--wp--preset--spacing--70);padding-bottom:0;padding-left:var(--wp--preset--spacing--70)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background " alt="<?php echo __('', 'vibrrrant');?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/vibrrrant-bg-image-1-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","tagName":"header"} /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:100vh;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:query-title {"type":"search","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} /-->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'Search input field placeholder text', 'vibrrrant' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'Button text. Verb.', 'vibrrrant' ); ?>","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":"2"}} -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":20,"overlayColor":"black","isUserOverlayColor":true,"contentPosition":"top left","style":{"dimensions":{"aspectRatio":"1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"base","fontSize":"x-small","fontFamily":"jetbrains-mono"} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"base","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"60px","style":{"layout":[]}} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-no-results -->
<!-- wp:pattern {"slug":"vibrrrant/no-results-content"} /-->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal","verticalAlignment":"center"}} -->
<!-- wp:query-pagination-previous {"label":"Previous Page"} /-->

<!-- wp:query-pagination-next {"label":"Next Page"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:spacer {"style":{"layout":[]}} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
