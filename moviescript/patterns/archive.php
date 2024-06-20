<?php
/**
 * Title: archive
 * Slug: moviescript/archive
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0vh","bottom":"0vh"},"blockGap":"7.5vh","padding":{"top":"10vh","bottom":"2.5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0vh;margin-bottom:0vh;padding-top:10vh;padding-bottom:2.5rem"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"0px","left":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"28.33%"} -->
<div class="wp-block-column" style="flex-basis:28.33%"><!-- wp:query-title {"type":"archive","fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":18,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"7.5vh"}}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"textAlign":"center","isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem","padding":{"top":"1rem"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:1rem"><!-- wp:post-date {"format":"M j, Y g:i A","isLink":true,"fontSize":"small"} /-->

<!-- wp:post-terms {"term":"category","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.5vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:2.5vh"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo __('   *   *   *', 'moviescript');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:1rem"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->