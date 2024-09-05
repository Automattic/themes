<?php
/**
 * Title: 404
 * Slug: saison/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"},"padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60);padding-right:6vw;padding-left:6vw"><!-- wp:heading {"textAlign":"left","level":1,"fontSize":"large"} -->
<h1 class="wp-block-heading has-text-align-left has-large-font-size" id="oops-that-page-can-t-be-found"><?php esc_html_e('Oops! That page can’t be found.', 'saison');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'saison');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"style":{"border":{"radius":"100px"}}} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->