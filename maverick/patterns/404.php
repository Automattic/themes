<?php
/**
 * Title: 404
 * Slug: maverick/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10vh","bottom":"10vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:10vh;padding-bottom:10vh"><!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<main class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase"}}} -->
<h1 class="wp-block-heading" style="text-transform:uppercase"><?php echo __('This is a<br>404 error.', 'maverick');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('This page is not here. It looks like nothing was found at this location', 'maverick');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"5vh","bottom":"10vh"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:5vh;margin-bottom:10vh"><!-- wp:search {"showLabel":false,"placeholder":"SEARCH","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->