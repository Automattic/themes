<?php
/**
 * Title: Default footer
 * Slug: iotix/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5vh","right":"5vw","bottom":"10vh","left":"5vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:5vh;padding-right:5vw;padding-bottom:10vh;padding-left:5vw"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:80px;padding-bottom:0px"><!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:site-title {"textColor":"primary"} /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size"><strong><?php echo esc_html__( 'Product', 'iotix' ); ?></strong></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","align":"wide","layout":{"type":"flex","flexWrap":"wrap","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size"><strong><?php echo esc_html__( 'Company', 'iotix' ); ?></strong></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","align":"wide","layout":{"type":"flex","flexWrap":"wrap","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size"><strong><?php echo esc_html__( 'Resources', 'iotix' ); ?></strong></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","align":"wide","layout":{"type":"flex","flexWrap":"wrap","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"14vh"} -->
<div style="height:14vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","style":{"typography":{"fontSize":"0.8rem"},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group alignfull" style="font-size:0.8rem"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"0.8rem"}}} -->
<p class="has-text-align-left" style="font-size:0.8rem"><?php
    /* Translators: WordPress link. */
    $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'adventurer' ) ) . '" rel="nofollow">WordPress</a>';
    echo sprintf(
        esc_html__( 'Designed with %1$s', 'adventurer' ),
        $wordpress_link
    );
?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->