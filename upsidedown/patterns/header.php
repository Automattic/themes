<?php
/**
 * Title: Default header
 * Slug: upsidedown/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"layout":{"inherit":true,"type":"constrained","contentSize":"1200px"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size">
    <!-- wp:spacer {"height":"3.2rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div style="margin-top:0px;margin-bottom:0px;height:3.2rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"30px","left":"30px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
        <!-- wp:column {"width":"50%","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
        <div class="wp-block-column" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;flex-basis:50%">
            <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":{"top":"30px","left":"30px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
            <div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                <!-- wp:column {"width":"50%","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.4"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
                <div class="wp-block-column" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-style:normal;font-weight:400;line-height:1.4;flex-basis:50%">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"1rem","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
                        <!-- wp:site-title {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"lineHeight":1.4,"letterSpacing":"0px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"small"} /-->

                        <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"0px"}}} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                <div class="wp-block-column" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
                        <!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}},"className":"is-style-logos-only"} -->
                        <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
                            <!-- wp:social-link {"url":"github.com","service":"github"} /-->

                            <!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->
                        </ul>
                        <!-- /wp:social-links -->

                        <!-- wp:paragraph -->
                        <p><?php echo esc_html__( 'Explore my side projects and work using', 'upsidedown' ); ?>&nbsp;<a rel="noreferrer noopener" href="https://www.wordpress.org" target="_blank"><span style="text-decoration: underline;"><?php echo esc_html__( 'this link', 'upsidedown' ); ?></span></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"25%","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
        <div class="wp-block-column" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;flex-basis:25%"></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"25%","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.4"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
        <div class="wp-block-column" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-style:normal;font-weight:400;line-height:1.4;flex-basis:25%">
            <!-- wp:paragraph -->
            <p><span style="text-decoration: underline;"><?php echo esc_html__( 'Upsidedown', 'upsidedown' ); ?></span>&nbsp;<?php echo esc_html__( 'is a WordPress theme design that brings blog posts rising above inverted header and footer components.', 'upsidedown' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"3.2rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div style="margin-top:0px;margin-bottom:0px;height:3.2rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->