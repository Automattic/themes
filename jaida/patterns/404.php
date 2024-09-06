<?php
/**
 * Title: 404
 * Slug: jaida/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"secondary-header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"16vh","bottom":"16vh"}}},"layout":{"type":"constrained","wideSize":"1400px"}} -->
<main class="wp-block-group" style="margin-top:16vh;margin-bottom:16vh"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","className":"wp-block-heading"} -->
<h1 class="wp-block-heading alignwide has-text-align-left" id="oops-that-page-can-t-be-found"><?php esc_html_e('Oops! That page can’t be found.', 'jaida');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'jaida');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search..."} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->