<?php
/**
 * Title: search
 * Slug: pierian/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}},"border":{"top":{"width":"1px"},"right":{"width":"1px"},"bottom":{"width":"1px"}}}} -->
<div class="wp-block-columns alignfull" style="border-top-width:1px;border-right-width:1px;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"stretch","width":"20%","style":{"spacing":{"padding":{"top":"0rem","right":"var:preset|spacing|50","bottom":"0rem","left":"var:preset|spacing|50"}},"border":{"left":{"width":"1px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-background-background-color has-background" style="border-left-width:1px;padding-top:0rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--50);flex-basis:20%"><!-- wp:template-part {"slug":"sidebar-left","area":"sidebar"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"60%","style":{"spacing":{"padding":{"top":"0rem","right":"var:preset|spacing|50","bottom":"0rem","left":"var:preset|spacing|50"}},"border":{"left":{"width":"1px"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-background-background-color has-background" style="border-left-width:1px;padding-top:0rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--50);flex-basis:60%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:search {"label":"","showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"0px","width":"1px"}},"borderColor":"background","fontSize":"small"} /-->

<!-- wp:query-title {"type":"search"} /-->

<!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|70"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:post-title {"level":1,"isLink":true,"align":"wide"} /-->

<!-- wp:post-content {"layout":{"type":"default"}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-pagination -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"20%","style":{"spacing":{"padding":{"top":"0rem","right":"var:preset|spacing|50","bottom":"0rem","left":"var:preset|spacing|50"}},"border":{"left":{"width":"1px"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-tertiary-background-color has-background" style="border-left-width:1px;padding-top:0rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--50);flex-basis:20%"><!-- wp:template-part {"slug":"sidebar-right","area":"sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->