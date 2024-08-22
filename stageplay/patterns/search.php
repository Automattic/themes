<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: search
 * Slug: stageplay/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"small","fontFamily":"golos-text"} -->
<h1 class="wp-block-heading has-golos-text-font-family has-small-font-size"><?php echo __('Search', 'stageplay');?></h1>
<!-- /wp:heading -->

<!-- wp:search {"showLabel":false,"placeholder":"Start a search...","width":100,"widthUnit":"%","buttonPosition":"no-button","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","layout":{"type":"constrained"}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"search"} /-->

<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<!-- wp:group {"style":{"border":{"bottom":{"width":"1px","style":"dotted"}},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-style:dotted;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:post-title {"level":1,"isLink":true} /-->

<!-- wp:post-content {"layout":{"type":"constrained","justifyContent":"left"}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->