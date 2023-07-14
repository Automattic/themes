<?php
/**
 * Title: Default footer
 * Slug: reverie/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"background-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group background-overlay"><!-- wp:spacer {"height":"0px"} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small","fontFamily":"newsreader"} -->
<p class="has-text-align-center has-newsreader-font-family has-small-font-size" style="font-style:normal;font-weight:400"><?php
    /* Translators: WordPress link. */
    $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'reverie' ) ) . '" rel="nofollow">WordPress</a>';
    echo sprintf(
        esc_html__( 'Designed with %1$s', 'reverie' ),
        $wordpress_link
    );
?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"95px"} -->
<div style="height:95px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"backgroundColor":"primary","className":"fixed-bottom-nav","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group fixed-bottom-nav has-primary-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"0rem","padding":{"left":"1rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-left:1rem"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal"},"spacing":{"margin":{"right":"1rem"}}},"fontSize":"medium"} /-->

<!-- wp:site-tagline {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontFamily":"newsreader"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":".8rem"},"blockGap":".5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:.8rem"><!-- wp:navigation {"overlayMenu":"always","overlayBackgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"blockGap":"0"}},"fontSize":"large","fontFamily":"newsreader"} /-->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
