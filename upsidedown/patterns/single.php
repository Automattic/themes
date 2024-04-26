<?php
/**
 * Title: Single
 * slug: upsidedown/single
 * inserter: no
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
    <!-- wp:post-featured-image {"align":"full","style":{"spacing":{"padding":{"right":"2.5%","left":"2.5%","top":"0px","bottom":"40px"}},"color":{"duotone":["#000000","#ffffff"]}}} /-->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0%","bottom":"0px","left":"0px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
    <div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0%;padding-bottom:0px;padding-left:0px">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
            <!-- wp:spacer {"height":"20px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
            <div style="margin-top:0px;margin-bottom:0px;height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:post-title {"level":1,"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

            <!-- wp:spacer {"height":"20px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
            <div style="margin-top:0px;margin-bottom:0px;height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex"}} -->
                <div class="wp-block-group alignwide">
                    <!-- wp:paragraph -->
                    <p><?php echo esc_html__( 'Written in', 'upsidedown' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-date {"format":"F j, Y"} /-->

                    <!-- wp:paragraph -->
                    <p><?php echo esc_html__( 'by', 'upsidedown' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"align":"wide","layout":{"type":"flex"}} -->
                <div class="wp-block-group alignwide">
                    <!-- wp:post-terms {"term":"category"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"60px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:post-content {"layout":{"type":"default"}} /-->

        <!-- wp:spacer {"height":"40px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
            <p style="font-style:normal;font-weight:700"><?php echo esc_html__( 'Tags', 'upsidedown' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:post-terms {"term":"post_tag"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"120px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:120px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"align":"wide","style":{"spacing":[],"border":{"top":{"width":"2px"}}},"layout":{"inherit":true,"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group alignwide" style="border-top-width:2px">
            <!-- wp:spacer {"height":"60px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
            <div style="margin-top:0px;margin-bottom:0px;height:60px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:comments -->
                <div class="wp-block-comments">
                    <!-- wp:comments-title /-->

                    <!-- wp:comment-template {"fontSize":"small"} -->
                    <!-- wp:columns -->
                    <div class="wp-block-columns">
                        <!-- wp:column {"width":"40px"} -->
                        <div class="wp-block-column" style="flex-basis:40px">
                            <!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"},"color":{"duotone":["#000000","#ffffff"]}}} /-->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column">
                            <!-- wp:comment-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

                            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
                            <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
                                <!-- wp:comment-date /-->
                                <!-- wp:comment-edit-link /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:comment-content {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

                            <!-- wp:comment-reply-link {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"bottom":"1.4rem"}}}} /-->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                <!-- /wp:comment-template -->

                <!-- wp:comments-pagination {"style":{"typography":{"fontSize":"1.2rem"}}} -->
                    <!-- wp:comments-pagination-previous /-->
                    <!-- wp:comments-pagination-numbers /-->
                    <!-- wp:comments-pagination-next /-->
                <!-- /wp:comments-pagination -->

                <!-- wp:spacer {"height":"40px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:post-comments-form {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-purple-heart"}}}},"backgroundColor":"custom-robin-egg-blue","textColor":"custom-purple-heart","fontSize":"small"} /-->

                <!-- wp:spacer {"height":"120px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:120px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
            </div>
            <!-- /wp:comments -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
