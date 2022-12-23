<?php
/**
 * Title: A 404 page
 * Slug: upsidedown/404
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px","padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px">
    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
        <!-- wp:spacer {"height":"60px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"6.4rem","lineHeight":0.9}},"className":"has-text-align-center"} -->
        <h2 class="has-text-align-left has-text-align-center" style="font-size:6.4rem;line-height:0.9"><?php echo esc_html__( 'Nothing here,', 'upsidedown' ); ?><br><?php echo esc_html__( 'sorry.', 'upsidedown' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:spacer {"height":"40px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php echo esc_html__( 'This page or post could not be found. Maybe a search would help?', 'upsidedown' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'upsidedown' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php echo esc_html__( 'Search', 'upsidedown' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"border":{"width":"0px","style":"none"}}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"60px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->
