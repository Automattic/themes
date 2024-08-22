<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: post-meta
 * Slug: olympique/post-meta
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('—', 'olympique');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('by', 'olympique');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->