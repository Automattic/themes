<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: 404
 * Slug: leancv/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns {"metadata":{"categories":["hidden"]},"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"2rem","left":"2rem"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70"},"blockGap":"4rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"5rem","lineHeight":"1.25"}}} -->
<h1 class="wp-block-heading has-text-align-left" id="oops-that-page-can-t-be-found" style="font-size:5rem;line-height:1.25"><?php echo __('Oops! That page<br>can’t be found.', 'leancv');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('You can try a search:', 'leancv');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:search {"showLabel":false,"buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"top":{"color":"var:preset|color|primary","style":"solid"},"right":{"color":"var:preset|color|primary","style":"solid"},"bottom":{"color":"var:preset|color|primary","style":"solid"},"left":{"color":"var:preset|color|primary","style":"solid"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"35%","lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;flex-basis:35%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"profile-pic"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->