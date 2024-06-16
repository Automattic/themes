<?php
/**
 * Title: Byline and Date Post Meta
 * Slug: craftfully/byline-date
 * Inserter: no
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"typography":{"fontSize":"x-small"},"elements":{"link":{"color":{"text":"#11181fa6"}}},"color":{"text":"#11181fa6"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group alignwide has-text-color has-link-color" style="color:#11181fa6;font-size:x-small"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php echo esc_html_x( 'Published by', 'craftfully' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":"","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php echo esc_html_x( 'on', 'Preposition: Refers to the post publish date', 'craftfully' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /--></div>
<!-- /wp:group -->