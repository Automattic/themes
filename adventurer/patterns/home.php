<?php
/**
 * Title: Home
 * Slug: adventurer/home
 * Inserter: yes
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
    <!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/adventurer_coconuts.png'; ?>","id":160,"dimRatio":50,"minHeight":90,"minHeightUnit":"vh","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
    <div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-160" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/adventurer_coconuts.png'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
        <!-- wp:template-part {"slug":"header","tagName":"header"} /-->

        <!-- wp:spacer {"height":"26vh"} -->
        <div style="height:26vh" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"layout":{"type":"constrained","contentSize":"1100px"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"style":{"typography":{"letterSpacing":"1px","fontSize":"0.8rem"}},"fontFamily":"roboto"} -->
            <h2 class="wp-block-heading has-roboto-font-family" style="font-size:0.8rem;letter-spacing:1px"><?php echo esc_html__( 'GUIDED TOURS', 'adventurer' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"4.6rem"}}} -->
            <h3 class="wp-block-heading" style="font-size:4.6rem"><?php echo esc_html__( '14 days in COSTA RICA', 'adventurer' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__( 'My first guided group tour will open for booking in two weeks. The trip will take place from December 4 to December 17, 2023.', 'adventurer' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Save Your Spot', 'adventurer' ); ?></a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"26vh"} -->
        <div style="height:26vh" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div></div>
    <!-- /wp:cover -->

    <!-- wp:post-content {"lock":{"move":false,"remove":false},"layout":{"type":"constrained","contentSize":"1100px"}} /-->

    <!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
</div>
<!-- /wp:group -->