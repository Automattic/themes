<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: Default footer
 * Slug: foam/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: yes
 */
?>

<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"5vw","left":"5vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:5vw;padding-left:5vw"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--60)","bottom":"var(--wp--preset--spacing--60)"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:site-title {"textAlign":"center"} /-->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"codepen"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php
/* Translators: WordPress link. */
$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'foam' ) ) . '" rel="nofollow">WordPress</a>';
echo sprintf(
esc_html__( 'Designed with %1$s', 'foam' ),
$wordpress_link
);
?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
