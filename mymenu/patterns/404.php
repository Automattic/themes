<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: 404
 * Slug: mymenu/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"6vh","bottom":"6vh"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:6vh;padding-bottom:6vh"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","className":"wp-block-heading"} -->
<h1 class="wp-block-heading alignwide has-text-align-left"><?php esc_html_e('We\'re sorry!', 'mymenu');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"3vh","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:3vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignfull"><!-- wp:paragraph -->
<p><?php esc_html_e('We are apparently out of that item. What about a new selection?', 'mymenu');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"6vh"} -->
<div style="height:6vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->