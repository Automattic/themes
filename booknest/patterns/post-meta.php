<?php
/**
 * Title: post-meta
 * Slug: booknest/post-meta
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Post Meta Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small","fontFamily":"chivo-mono"} -->
<p class="has-base-color has-text-color has-link-color has-chivo-mono-font-family has-small-font-size"><?php esc_html_e('By', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small","fontFamily":"chivo-mono"} -->
<p class="has-base-color has-text-color has-link-color has-chivo-mono-font-family has-small-font-size"><?php esc_html_e('·', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} /-->

<!-- wp:post-terms {"term":"category","prefix":"—   ","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} /-->

<!-- wp:post-terms {"term":"post_tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} /--></div>
<!-- /wp:group -->