<?php
/**
 * Title: 404 content
 * Slug: lettre/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontWeight":"700","lineHeight":"1","fontStyle":"normal"}},"className":"has-text-align-center","fontSize":"large"} -->
<h2 class="has-text-align-center has-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php echo esc_html__( 'This page could not be found.', 'lettre'); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( ' Maybe try a search?', 'lettre' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'lettre' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php echo esc_html__( 'Search', 'lettre' ); ?>","align":"center","style":{"border":{"radius":"100px"}},"borderColor":"primary","backgroundColor":"primary"} /--></div>
<!-- /wp:group -->
