<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: search
 * Slug: brightblog/search
 * Inserter: no
 */
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"margin":{"top":"0rem","bottom":"0rem"},"blockGap":{"top":"0rem","left":"0rem"}},"border":{"color":null,"style":null,"width":null,"top":{"color":"var:preset|color|secondary","style":"solid","width":"4rem"},"right":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-columns alignfull" style="border-top-color:var(--wp--preset--color--secondary);border-top-style:solid;border-top-width:4rem;margin-top:0rem;margin-bottom:0rem;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:column {"width":"20%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-coral-dream-1"}}}},"backgroundColor":"white","textColor":"custom-coral-dream-1","layout":{"type":"default"}} -->
<div class="wp-block-column has-custom-coral-dream-1-color has-white-background-color has-text-color has-background has-link-color" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;flex-basis:80%"><!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"metadata":{"name":"Content Wrapper"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Search Title"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"search"} /-->

<!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50","metadata":{"name":"M"}} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-date {"style":{"spacing":{"blockGap":"1rem"}}} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"small"},"spacing":{"blockGap":"1rem"}},"fontFamily":"rubik"} -->
<p class="has-rubik-font-family" style="font-size:small"><?php esc_html_e('·', 'brightblog');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"blockGap":"1rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read more","showMoreOnNewLine":false,"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"full"} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'brightblog');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-pages"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->