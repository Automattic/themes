<?php
/**
 * Title: Default footer
 * Slug: craftfully/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|foreground","style":"dashed","width":"1px"},"right":[],"bottom":{"color":"var:preset|color|foreground","style":"dashed","width":"1px"},"left":[]}},"backgroundColor":"accent-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-3-background-color has-background" style="border-top-color:var(--wp--preset--color--foreground);border-top-style:dashed;border-top-width:1px;border-bottom-color:var(--wp--preset--color--foreground);border-bottom-style:dashed;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title /-->

<!-- wp:navigation {"ref":1489,"overlayMenu":"never","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"300","letterSpacing":"0px"}},"fontFamily":"system-font"} /-->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"primary","iconBackgroundColorValue":"#11181F","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"pinterest"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"mail"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem"}}} -->
<p style="font-size:0.8rem">
    <?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'craftfully' ) ) . '" rel="nofollow">WordPress</a>';
        echo sprintf(
            esc_html__( 'Designed with %1$s', 'craftfully' ),
            $wordpress_link
        );
    ?>
</p>
<!-- /wp:paragraph -->