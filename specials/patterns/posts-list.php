<?php
/**
 * Title: Posts List
 * Slug: specials/posts-list
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"40px","top":"64px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:64px;padding-bottom:40px"><!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide"><?php echo esc_html__( 'Burgers', 'specials' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"40px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"border":{"bottom":{"width":"1px"}}}} -->
<div class="wp-block-group" style="border-bottom-width:1px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%","style":{"border":{"right":{"width":"1px"},"left":{"width":"1px"}},"spacing":{"padding":{"top":"12px","right":"24px","bottom":"0px","left":"24px"}}}} -->
<div class="wp-block-column" style="border-right-width:1px;border-left-width:1px;padding-top:12px;padding-right:24px;padding-bottom:0px;padding-left:24px;flex-basis:25%"><!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"0px","left":"24px"}}}} -->
<div class="wp-block-column" style="padding-top:24px;padding-right:24px;padding-bottom:0px;padding-left:24px"><!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"7.5%","style":{"border":{"left":{"width":"1px"}},"spacing":{"padding":{"top":"24px","right":"24px","bottom":"0px","left":"24px"}}}} -->
<div class="wp-block-column" style="border-left-width:1px;padding-top:24px;padding-right:24px;padding-bottom:0px;padding-left:24px;flex-basis:7.5%"><!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"40px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
