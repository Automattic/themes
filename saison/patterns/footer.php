<?php
/**
 * Title: Default footer
 * Slug: saison/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--60)","bottom":"var(--wp--preset--spacing--60)"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"yelp"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.7rem"}}} -->
<p class="has-text-align-center" style="font-size:0.7rem">
	<?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'saison' ) ) . '" rel="nofollow">WordPress</a>';
        echo sprintf(
            esc_html__( 'Designed with %1$s', 'saison' ),
            $wordpress_link
        );
    ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->