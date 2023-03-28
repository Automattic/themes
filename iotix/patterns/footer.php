<?php
/**
 * Title: Default footer
 * Slug: iotix/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>


<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}}}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
<!-- wp:group {"layout":{"type":"constrained"},"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"0px"}}}} --><div class="wp-block-group alignwide" style="padding-top:80px;padding-bottom:0px">

    <!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"width":"30%"} -->
    <div class="wp-block-column" style="flex-basis:30%"><!-- wp:site-title /-->

    <!-- wp:site-tagline /--></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"10%"} -->
    <div class="wp-block-column" style="flex-basis:10%"></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"top"} -->
    <div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":4} -->
    <h4><strong><?php echo esc_html__( 'Product', 'iotix' ); ?></strong></h4>
    <!-- /wp:heading -->

    <!-- wp:navigation {"overlayMenu":"never","align":"wide","layout":{"type":"flex","flexWrap":"wrap","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"top"} -->
    <div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":4} -->
    <h4><strong><?php echo esc_html__( 'Company', 'iotix' ); ?></strong></h4>
    <!-- /wp:heading -->

    <!-- wp:navigation {"overlayMenu":"never","align":"wide","layout":{"type":"flex","flexWrap":"wrap","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"top"} -->
    <div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":4} -->
    <h4><strong><?php echo esc_html__( 'Resources', 'iotix' ); ?></strong></h4>
    <!-- /wp:heading -->

    <!-- wp:navigation {"overlayMenu":"never","align":"wide","layout":{"type":"flex","flexWrap":"wrap","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"},"align":"wide","style":{"typography":{"fontSize":"0.8rem"},"spacing":{"blockGap":"var:preset|spacing|20"}}} --><div class="wp-block-group alignwide" style="font-size:0.8rem">
        <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"0.8rem"}},"textColor":"primary"} -->
        <p class="has-text-align-left" style="font-size:0.8rem"><?php
            /* Translators: WordPress link. */
            $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'adventurer' ) ) . '" rel="nofollow">WordPress</a>';
            echo sprintf(
                esc_html__( 'Designed with %1$s', 'adventurer' ),
                $wordpress_link
            );
        ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->
    </div><!-- /wp:group -->
</div><!-- /wp:group -->
</div><!-- /wp:group -->