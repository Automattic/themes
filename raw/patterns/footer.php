<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: Default footer
 * Slug: raw/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"},"border":{"top":{"width":"1px","style":"solid"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-style:solid;border-top-width:1px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%","style":{"border":{"top":{"width":"8px","style":"solid"}},"spacing":{"padding":{"top":"40px"}}}} -->
<div class="wp-block-column" style="border-top-style:solid;border-top-width:8px;padding-top:40px;flex-basis:50%"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Upper Ground, South Bank — London SE1 9PX</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px"}}}} -->
<div class="wp-block-column" style="padding-top:48px"><!-- wp:group {"style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"none","letterSpacing":"1px"}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="letter-spacing:1px;text-transform:none">
<?php
    /* Translators: WordPress link. */
    $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'rawsecond' ) ) . '" rel="nofollow">WordPress</a>';
    echo sprintf(
        esc_html__( 'Designed with %1$s', 'rawsecond' ),
        $wordpress_link
    );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontSize":"0.9rem"}}} -->
<p style="font-size:0.9rem;letter-spacing:1px;text-transform:uppercase"><a href="https://tumblr.com" target="_blank" rel="noreferrer noopener">Tumblr</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontSize":"0.9rem"}}} -->
<p style="font-size:0.9rem;letter-spacing:1px;text-transform:uppercase"><a rel="noreferrer noopener" href="https://instagram.com" target="_blank">Instagram</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontSize":"0.9rem"}}} -->
<p style="font-size:0.9rem;letter-spacing:1px;text-transform:uppercase"><a href="https://facebook.com" target="_blank" rel="noreferrer noopener">Facebook</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"4rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:4rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->