<?php
/**
 * Title: Default footer
 * Slug: bibimbap/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.04em"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="letter-spacing:0.04em">
    <?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'bibimbap' ) ) . '" rel="nofollow">WordPress</a>';
        echo sprintf(
            esc_html__( 'Powered by %1$s', 'bibimbap' ),
            $wordpress_link
        );
    ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
