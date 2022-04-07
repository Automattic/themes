<?php
/**
 * Title: 404 content
 * Slug: remote/hidden-404-content
 * Inserter: no
 */
?>
<!-- wp:heading {"style":{"typography":{"fontSize":"min(max(42px, 5vw), 72px)","fontWeight":"100","lineHeight":"1"}},"className":"has-text-align-center"} -->
<h2 class="has-text-align-center" style="font-size:min(max(42px, 5vw), 72px);font-weight:100;line-height:1"><?php echo esc_html( _x( '404', 'Error code for a webpage that is not found.', 'remote' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'This page could not be found. Maybe try a search?', 'remote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"1em"} -->
<div style="height:1em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'remote' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php echo esc_html__( 'Search', 'remote' ); ?>","buttonUseIcon":true,"align":"center"} /-->

<!-- wp:spacer {"height":"2em"} -->
<div style="height:2em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
