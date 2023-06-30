<?php
/**
 * Title: Default footer
 * Slug: screenplay/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:spacer {"height":"8rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:8rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"border":{"top":{"width":"1px"}},"spacing":{"padding":{"top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="border-top-width:1px;padding-top:8px;padding-bottom:8px"><!-- wp:column {"verticalAlignment":"center","width":"33.3%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.3%"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"golos-text"} -->
<p class="has-text-align-left has-golos-text-font-family" style="font-size:16px;font-style:normal;font-weight:500">
    <?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'screenplay' ) ) . '" rel="nofollow">WordPress</a>';
        echo sprintf(
            esc_html__( 'Designed with %1$s', 'screenplay' ),
            $wordpress_link
        );
    ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"golos-text"} -->
<p class="has-text-align-left has-golos-text-font-family" style="font-size:16px;font-style:normal;font-weight:500"><?php echo esc_html__( 'This is a sample to spark your creativity. Enjoy.', 'screenplay' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"tumblr.com","service":"tumblr"} /-->

<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"facebook.com","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"8rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:8rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
