<?php
/**
 * Title: Post Meta
 * Slug: mpho/post-meta
 * Categories: post meta
 * Block Types: core/post-date, core/post-author-name
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0.26rem"},"typography":{"fontSize":"1.2rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="font-size:1.2rem"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'by', 'The word linking the post title and the post author.', 'mpho' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group -->
