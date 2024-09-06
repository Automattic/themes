<?php
/**
 * Title: home
 * Slug: brute/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"},"blockGap":"0px","padding":{"top":"0rem","bottom":"0rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0rem;margin-bottom:0rem;padding-top:0rem;padding-bottom:0rem"><!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0rem","left":"0rem"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);flex-basis:70%"><!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide"><?php esc_html_e('BLOG', 'brute');?></h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"constrained"}} -->
<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"top":"0rem","left":"0rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:15%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"color":[]}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","padding":{"top":"1rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:1rem"><!-- wp:post-title {"level":1,"isLink":true} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:5%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false} -->
<!-- wp:query-pagination-previous {"label":"PREV"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"NEXT"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"1%","style":{"border":{"left":{"width":"1px"}}}} -->
<div class="wp-block-column" style="border-left-width:1px;flex-basis:1%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"3%","style":{"border":{"color":null,"style":null,"width":null,"top":[],"right":[],"bottom":[],"left":{"width":"1px","style":"solid"}}}} -->
<div class="wp-block-column" style="border-left-style:solid;border-left-width:1px;flex-basis:3%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);flex-basis:25%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /--></div>
<!-- /wp:group -->