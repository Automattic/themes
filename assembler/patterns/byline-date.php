<?php
/**
 * Title: Byline and Date Post Meta
 * Slug: assembler/byline-date
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.26rem","padding":{"bottom":"20px"}},"typography":{"fontSize":"x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-bottom:20px;font-size:x-small"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php echo esc_html_x( 'Published by', 'assembler' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":"","fontSize":"x-small"} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php echo esc_html_x( 'on', 'Preposition: Refers to the post publish date', 'assembler' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"isLink":true} /--></div>
<!-- /wp:group -->
