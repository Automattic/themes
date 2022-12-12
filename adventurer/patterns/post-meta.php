<?php
/**
 * Title: Post Meta
 * Slug: adventurer/post-meta
 * Categories: post meta
 * Block Types: core/post-date, core/post-author-name
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
    <!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"0.8rem","textTransform":"uppercase","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /-->

    <!-- wp:paragraph -->
    <p>&nbsp;&nbsp;&nbsp;</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","letterSpacing":"1px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}}} -->
    <p style="font-size:0.8rem;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Written by:', 'adventurer' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontSize":"0.8rem","textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} /-->
</div>
<!-- /wp:group -->