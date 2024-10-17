<?php
/**
 * Title: post-meta
 * Slug: booknest/post-meta
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small","fontFamily":"chivo-mono"} -->
<p class="has-chivo-mono-font-family has-small-font-size"><?php esc_html_e('By', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"small","fontFamily":"chivo-mono"} -->
<p class="has-chivo-mono-font-family has-small-font-size"><?php esc_html_e('·', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"isLink":true,"fontSize":"small"} /-->

<!-- wp:post-terms {"term":"category","prefix":"— ","fontSize":"small"} /-->

<!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->