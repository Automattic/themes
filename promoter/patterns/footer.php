<?php
/**
 * Title: Default footer
 * Slug: promoter/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","right":"2rem","bottom":"2.5rem","left":"2rem"}},"border":{"top":{"width":"1px","style":"dotted"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:0.5rem;padding-right:2rem;padding-bottom:2.5rem;padding-left:2rem"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#00000a","size":"has-small-icon-size","style":{"typography":{"letterSpacing":"-0.02rem"}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="letter-spacing:-0.02rem"><!-- wp:social-link {"url":"tumblr.com","service":"tumblr"} /-->

<!-- wp:social-link {"url":"mastodon.com","service":"mastodon"} /-->

<!-- wp:social-link {"url":"devianart.com","service":"deviantart"} /-->

<!-- wp:social-link {"url":"behance.com","service":"behance"} /-->

<!-- wp:social-link {"url":"linkedin.com","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"textTransform":"uppercase","fontSize":"0.9rem","letterSpacing":"-0.02rem"}}} -->
<p class="has-text-align-right" style="font-size:0.9rem;letter-spacing:-0.02rem;text-transform:uppercase">
    <?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'promoter' ) ) . '" rel="nofollow">WordPress</a>';
        echo sprintf(
            esc_html__( 'Designed with %1$s', 'promoter' ),
            $wordpress_link
        );
    ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->