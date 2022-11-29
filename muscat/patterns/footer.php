<?php
/**
 * Title: Default footer
 * Slug: muscat/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-bottom:30px">
    <!-- wp:spacer {"height":"80px"} -->
    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem","letterSpacing":"-0.2px"}}} -->
    <p class="has-text-align-center" style="font-size:0.8rem;letter-spacing:-0.2px">
        <?php
            /* Translators: WordPress link. */
            $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'muscat' ) ) . '" rel="nofollow">WordPress</a>';
            echo sprintf(
                esc_html__( 'Designed with %1$s', 'muscat' ),
                $wordpress_link
            );
        ?>
    </p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->