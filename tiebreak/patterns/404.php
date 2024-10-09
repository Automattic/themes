<?php
/**
 * Title: 404
 * Slug: tiebreak/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-right:6vw;padding-left:6vw"><!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"2vh"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:2vh"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found" style="font-style:italic;font-weight:400"><?php esc_html_e('Oops! That page can’t be found.', 'tiebreak');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'tiebreak');?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"tiebreak/search-field"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
