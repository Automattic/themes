<?php
/**
 * Title: post-meta
 * Slug: streamer/post-meta
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Post meta wrapper"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"no-underline"} /-->

<!-- wp:group {"metadata":{"name":"Author and date"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"blockGap":"var:preset|spacing|20"}},"textColor":"secondary","layout":{"type":"flex"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color"><!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"0.2em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('By', 'streamer');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('·', 'streamer');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"none"}},"textColor":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Tags"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-secondary-color has-text-color has-x-small-font-size"><?php esc_html_e('Tags:', 'streamer');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","style":{"spacing":{"padding":{"top":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->