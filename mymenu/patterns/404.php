<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: 404
 * Slug: mymenu/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"6vh","bottom":"6vh"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="min-height:50vh;margin-top:0;margin-bottom:0;padding-top:6vh;padding-bottom:6vh"><!-- wp:group {"metadata":{"name":"Content Wrapper"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Page Title"},"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","className":"wp-block-heading"} -->
<h1 class="wp-block-heading alignwide has-text-align-left"><?php esc_html_e('We\'re sorry!', 'mymenu');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60","metadata":{"name":"L"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Search"},"align":"full","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignfull"><!-- wp:paragraph -->
<p><?php esc_html_e('We are apparently out of that item. What about a new selection?', 'mymenu');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->