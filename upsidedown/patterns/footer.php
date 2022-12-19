<?php
/**
 * Title: Default footer
 * Slug: upsidedown/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size">
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
        <!-- wp:spacer {"height":"2rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"30px","left":"30px"}}}} -->
        <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
            <!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"top":"0px","right":"1.5rem","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
            <div class="wp-block-column" style="padding-top:0px;padding-right:1.5rem;padding-bottom:0px;padding-left:0px;flex-basis:75%">
                <!-- wp:paragraph -->
                <p><?php echo esc_html__( 'Blogs tend to have a very common structure. Upsidedown is not here to repeat old formulas as we, the humans, do not fit into the same boxes. This Theme Design is not here for certainty but freshness. It is here to invert things, proposing a brand new way to convey personal blogs. More than being yet another WordPress blog theme, Upsidedown is designed with the Site Editor and it is full of ambition. Maybe it is the best choice for your blog.', 'upsidedown' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
            <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:25%">
                <!-- wp:paragraph -->
                <p><a rel="noreferrer noopener" href="mailto:name@provider.com" target="_blank"><span style="text-decoration: underline;"><?php echo esc_html__( 'Email the author', 'upsidedown' ); ?></span></a>&nbsp;<?php echo esc_html__( 'and share this blog theme with your colleagues. Enjoy!', 'upsidedown' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:spacer {"height":"2rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"30px","left":"30px"}}}} -->
        <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
            <!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
            <div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:75%">
                <!-- wp:site-title {"style":{"typography":{"letterSpacing":"0px","lineHeight":1.4,"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"small"} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:25%">
                <!-- wp:paragraph -->
                <p>
                <?php
                    /* Translators: WordPress link. */
                    $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'upsidedown' ) ) . '" rel="nofollow">WordPress</a>';
                    echo sprintf(
                        esc_html__( '© Designed with %1$s', 'upsidedown' ),
                        $wordpress_link
                    );
                ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:spacer {"height":"4.8em","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:4.8em" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->