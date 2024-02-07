<?php
/**
 * Title: Post title
 * Slug: nook/post-title
 * Inserter: no
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"elements":{"link":{"color":{"text":"#11181fa6"}}},"color":{"text":"#11181fa6"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left","fontSize":"small"}} -->
<div class="wp-block-group has-text-color has-link-color has-small-font-size" style="color:#11181fa6"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Published by', 'nook' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":"","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'on', 'Preposition: Refers to the post publish date', 'nook' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->