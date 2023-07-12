<?php
/**
 * Title: Byline and Date Post Meta
 * Slug: creatio/byline-date
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.26rem","padding":{"bottom":"20px"}},"typography":{"fontSize":"0.7rem","textTransform":"uppercase","letterSpacing":"0.03rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-bottom:20px;font-size:0.7rem;letter-spacing:0.03rem;text-transform:uppercase"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Published by', 'creatio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":""} /-->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'on', 'Preposition: Refers to the post publish date', 'creatio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"isLink":true} /--></div>
<!-- /wp:group -->