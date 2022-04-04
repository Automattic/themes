<?php
/**
 * Title: 404 content
 * Slug: archeo/hidden-404
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"100","lineHeight":"1"}},"className":"has-text-align-center"} -->
<h2 class="has-text-align-center" style="font-size:clamp(4rem, 40vw, 20rem);font-weight:100;line-height:1"><?php echo esc_html( _x( '404', 'Error code for a webpage that is not found.', 'archeo' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'This page could not be found. Maybe try a search?', 'archeo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"1em"} -->
<div style="height:1em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"<?php esc_html_e( 'Search', 'archeo' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_html_e( 'Search', 'archeo' ); ?>","buttonUseIcon":true,"align":"center"} /-->

<!-- wp:spacer {"height":"2em"} -->
<div style="height:2em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
