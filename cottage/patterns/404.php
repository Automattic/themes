<?php
/**
 * Title: 404
 * Slug: cottage/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cottage_background-scaled.jpg","id":31,"source":"file","title":"cottage_background"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

<!-- wp:group {"tagName":"main","templateLock":"insert","lock":{"move":false,"remove":true},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"dimensions":{"minHeight":"400px"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="min-height:400px;margin-top:0px;margin-bottom:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size" id="oops-that-page-can-t-be-found"><?php esc_html_e('Oops! That page can’t be found.', 'cottage');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'cottage');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->