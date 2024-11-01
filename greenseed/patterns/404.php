<?php
/**
 * Title: 404
 * Slug: greenseed/404
 * Inserter: no
 */
?>
<!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"name":"404 Page Content"},"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:group {"align":"full","className":"overlay","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group alignfull overlay" style="min-height:100vh;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

<!-- wp:spacer {"height":"0px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"flexSize":"5.06rem","selfStretch":"fixed"}}} -->
<div style="margin-top:0;margin-bottom:0;height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Page Not Found"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","align":"full"} -->
<h2 class="wp-block-heading alignfull has-text-align-left" id="oops-that-page-can-t-be-found"><?php esc_html_e('Page not found.', 'greenseed');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'greenseed');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'Search input field placeholder text', 'greenseed' ); ?>","style":{"border":{"radius":"0px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"flexSize":"5.06rem","selfStretch":"fixed"}}} -->
<div style="margin-top:0;margin-bottom:0;height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
