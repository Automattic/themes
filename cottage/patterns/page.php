<?php
/**
 * Title: page
 * Slug: cottage/page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cottage_background-scaled.jpg","id":31,"source":"file","title":"cottage_background"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"level":1,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","lock":{"move":false,"remove":true},"style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-content {"lock":{"move":false,"remove":true},"layout":{"type":"constrained","justifyContent":"center"}} /-->

<!-- wp:template-part {"slug":"comments"} /--></main>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->