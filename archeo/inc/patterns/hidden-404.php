<?php
/**
 * 404 content.
 */
return array(
	'title'    => __( '404 content', 'archeo' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"100","lineHeight":"1"}},"className":"has-text-align-center"} -->
	<h2 class="has-text-align-center" style="font-size:clamp(4rem, 40vw, 20rem);font-weight:100;line-height:1">' . esc_html( _x( '404', 'Error code for a webpage that is not found.', 'archeo' ) ) . '</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'This page could not be found. Maybe try a search?', 'archeo' ) . '</p>
	<!-- /wp:paragraph -->
	<!-- wp:search {"label":"' . esc_html__( 'Search', 'archeo' ) . '","showLabel":false,"width":100,"widthUnit":"%","buttonText":"' . esc_html__( 'Search', 'archeo' ) . '","buttonUseIcon":true,"align":"center"} /-->',
);
