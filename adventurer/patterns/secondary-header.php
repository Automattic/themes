<?php
/**
 * Title: Secondary header
 * Slug: adventurer/secondary-header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","top":"var:preset|spacing|60","right":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0">
        <!-- wp:site-title {"textAlign":"left"} /-->

        <!-- wp:group {"style":{"border":{"width":"0px","style":"none","radius":"2px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;border-radius:2px">
            <!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}}} /-->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"primary","textColor":"background"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button"><?php echo esc_html__( 'Donate', 'adventurer' ); ?></a></div><!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->