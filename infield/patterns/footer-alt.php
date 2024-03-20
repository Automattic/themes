<?php
/**
 * Title: Footer Alternative
 * Slug: infield/footer-alt
 * Categories: footer
 * Block Types: core/template-part/footer
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}},"heading":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"accent-1","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-accent-1-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:site-title {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"textColor":"base"} /-->

<!-- wp:separator {"align":"wide","className":" double-hr"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity  double-hr"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"style":{"border":{"right":{"color":"#ffffff33","width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="border-right-color:#ffffff33;border-right-width:1px;padding-right:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'About', 'infield' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php echo esc_html__( 'A passionate baseball fan blog celebrating America\'s favorite pastime.', 'infield' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"right":{"color":"#ffffff33","width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="border-right-color:#ffffff33;border-right-width:1px;padding-right:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Topics', 'infield' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:categories {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"fontSize":"x-small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Follow Us', 'infield' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","showLabels":true,"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","orientation":"vertical"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-visible-labels has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook","label":"Facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram","label":"Instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/stripes-bg.png","source":"file","title":"Vertical Stripes Background"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'infield' ) ) . '" rel="nofollow">WordPress</a>';
        echo sprintf(
            esc_html__( 'Designed with %1$s', 'infield' ),
            $wordpress_link
        );
    ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->