<?php
/**
 * Title: Traditional header with color background
 * Slug: stewart/header-traditional-background
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--custom--margin--horizontal, 30px)","bottom":"40px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--margin--horizontal, 30px);padding-bottom:40px"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":64} /-->

<!-- wp:site-title /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"layout":{"type":"flex","orientation":"horizontal"}} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":100} -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
<!-- /wp:group -->
