<?php
/**
 * Title: 404
 * Slug: perenne/404
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.4"><?php esc_html_e('Oops! That page can’t be found.', 'perenne');?></p>
<!-- /wp:paragraph --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group -->