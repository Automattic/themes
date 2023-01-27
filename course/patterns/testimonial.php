<?php

/**
 * Title: Testimonial
 * Slug: course/testimonial
 * Inserter: yes
 * Categories: sensei-lms
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"120px","right":"20px","left":"20px"},"blockGap":"0px"}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:80px;padding-right:20px;padding-bottom:120px;padding-left:20px">
    <!-- wp:group {"style":{"spacing":{"padding":{"left":"20px","bottom":"0px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|tertiary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-bottom:0px;padding-left:20px">
        <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1","letterSpacing":"0.01em"},"spacing":{"padding":{"top":"0px"}}},"fontSize":"medium","fontFamily":"secondary"} -->
        <h3 class="has-secondary-font-family has-medium-font-size" style="padding-top:0px;letter-spacing:0.01em;line-height:1;text-transform:uppercase"><?php echo esc_html__( 'What students say', 'course' ); ?></h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"35px","left":"35px"},"padding":{"top":"40px"}}}} -->
    <div class="wp-block-columns" style="padding-top:40px">
        <!-- wp:column {"verticalAlignment":"bottom","width":"41%"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:41%">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px","width":"1px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial.png" alt="" style="border-width:1px;border-radius:8px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"bottom"} -->
        <div class="wp-block-column is-vertically-aligned-bottom">
            <!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"40px"}},"typography":{"lineHeight":"1"}},"fontSize":"x-large","fontFamily":"secondary"} -->
            <h2 class="has-secondary-font-family has-x-large-font-size" style="margin-bottom:40px;line-height:1;"><?php
                echo esc_html__( '“I always wanted to write, and thanks to Course, I got it right. My writing is clearer, and I can finally get my message across.”', 'course' );
                ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
            <p class="has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.02em;line-height:1">Christopher Brown</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","letterSpacing":"0.02em"},"spacing":{"padding":{"top":"10px"},"margin":{"top":"0px"}}},"className":"has-x-small-font-size","fontSize":"x-small"} -->
            <p class="has-x-small-font-size" style="margin-top:0;padding-top:10px;letter-spacing:0.02em;line-height:1"><?php echo esc_html__( 'Founder at BeautifulWriting.com', 'course' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
