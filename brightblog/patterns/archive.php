<?php
/**
 * Title: archive
 * Slug: brightblog/archive
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"margin":{"top":"0rem","bottom":"0rem"},"blockGap":{"top":"0rem","left":"0rem"}},"border":{"color":null,"style":null,"width":null,"top":{"color":"var:preset|color|secondary","style":"solid","width":"4rem"},"right":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-columns alignfull" style="border-top-color:var(--wp--preset--color--secondary);border-top-style:solid;border-top-width:4rem;margin-top:0rem;margin-bottom:0rem;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:column {"width":"20%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-coral-dream-1"}}}},"backgroundColor":"white","textColor":"custom-coral-dream-1","layout":{"type":"default"}} -->
<div class="wp-block-column has-custom-coral-dream-1-color has-white-background-color has-text-color has-background has-link-color" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;flex-basis:80%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:query-title {"type":"archive","textColor":"custom-coral-dream-1"} /-->

<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-date {"style":{"spacing":{"blockGap":"1rem"}}} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"spacing":{"blockGap":"1rem"}},"fontFamily":"rubik"} -->
<p class="has-rubik-font-family" style="font-size:1rem"><?php echo __('·', 'brightblog');?></p>
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
<!-- /wp:query-pagination --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-pages"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->