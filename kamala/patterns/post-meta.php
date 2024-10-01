<?php
/**
 * Title: post-meta
 * Slug: kamala/post-meta
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.23em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph -->
<p><?php esc_html_e('·', 'kamala');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('by', 'kamala');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-terms {"term":"category","prefix":"in ","className":"is-style-default"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->