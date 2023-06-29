<?php
/**
 * Title: Default footer
 * Slug: bibliophile/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"0.8rem"}}} -->
<p class="has-link-color" style="font-size:0.8rem">
    <?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'bibliophile' ) ) . '" rel="nofollow">WordPress</a>';
        echo sprintf(
            esc_html__( 'This theme was designed with %1$s', 'bibliophile' ),
            $wordpress_link
        );
    ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
