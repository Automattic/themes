<?php
/**
 * Title: index
 * Slug: massimo/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header-pages","area":"uncategorized","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"2.1rem"}}}} -->
<div class="wp-block-group alignwide" style="padding-bottom:2.1rem"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textColor":"primary"} -->
<h2 class="wp-block-heading has-primary-color has-text-color"><?php esc_html_e('coming next on', 'massimo');?></h2>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('the Little Theatre', 'massimo');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e('Subscriptions and Propaganda Office&lt;br&gt;Canyon Fort Street, 6, Mainland', 'massimo');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"full"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.7rem","bottom":"2.1rem"}},"border":{"color":null,"style":null,"width":null,"top":{"color":"var:preset|color|primary","style":"solid","width":"1.4rem"},"right":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-style:solid;border-top-width:1.4rem;padding-top:0.7rem;padding-bottom:2.1rem"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":1}}} /-->

<!-- wp:post-date {"format":"M j","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-excerpt {"moreText":"more ›","showMoreOnNewLine":false,"excerptLength":70} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"2.1rem","bottom":"2.1rem"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:2.1rem;margin-bottom:2.1rem"><!-- wp:query-pagination {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"4rem"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->