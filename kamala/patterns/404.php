<?php
/**
 * Title: 404
 * Slug: kamala/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading" id="page-not-found"><?php esc_html_e('Page Not Found', 'kamala');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'kamala');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'kamala' ); ?>","showLabel":false,"buttonText":"<?php echo esc_attr_x( 'Search', 'search form label', 'kamala' ); ?>","buttonUseIcon":false,"style":{"border":{"radius":"100px"}},"fontSize":"medium"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
