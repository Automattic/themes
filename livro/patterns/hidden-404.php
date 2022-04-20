<?php
/**
 * Title: 404 content
 * Slug: livro/hidden-404
 * Inserter: no
 */
?>

<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"200","lineHeight":"1"}},"className":"has-text-align-center"} -->
<h2 class="has-text-align-center" style="font-size:clamp(4rem, 40vw, 20rem);font-weight:200;line-height:1"><?php echo esc_html( _x( '404', 'Error code for a webpage that is not found.', 'livro' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'This page could not be found. Maybe try a search?', 'livro' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'livro' ); ?>","showLabel":false,"width":50,"widthUnit":"%","buttonText":"<?php echo esc_html__( 'Search', 'livro' ); ?>","buttonUseIcon":true,"align":"center"} /-->
