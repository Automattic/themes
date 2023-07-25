<?php
/**
 * Title: Default footer
 * Slug: carnation/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"#0000001a","style":"solid","width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"backgroundColor":"foreground","textColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-color has-foreground-background-color has-text-color has-background has-link-color" style="border-top-color:#0000001a;border-top-style:solid;border-top-width:1px;padding-top:0px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center","width":"33.34%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.34%"><!-- wp:navigation {} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.34%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.34%"><!-- wp:site-logo {"width":72,"align":"center"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#fefaf8","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"full","className":"is-style-default"} -->
<hr class="wp-block-separator alignfull has-alpha-channel-opacity is-style-default"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8em"}}} -->
<p class="has-text-align-center" style="font-size:0.8em"><?php
                /* Translators: WordPress link. */
                $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'carnation' ) ) . '" rel="nofollow">WordPress</a>';
                echo sprintf(
                    esc_html__( 'Designed with %1$s', 'carnation' ),
                    $wordpress_link
                );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->