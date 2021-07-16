<?php
/**
 * Listen to the podcast.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Listen to the podcast', 'quadrat' ),
	'categories' => array( 'quadrat' ),
	'content'    => '<!-- wp:heading {"textAlign":"center","level":4} -->
		<h4 class="has-text-align-center">' . esc_html__( 'Listen to the podcast', 'quadrat' ) . '</h4>
		<!-- /wp:heading -->

		<!-- wp:audio {"id":102} -->
		<figure class="wp-block-audio"><audio controls src="' . get_stylesheet_directory_uri() . '/assets/quadrat.mp3"></audio></figure>
		<!-- /wp:audio -->

		<!-- wp:paragraph {"align":"center","fontSize":"tiny"} -->
		<p class="has-text-align-center has-tiny-font-size">' . sprintf( wp_kses( __( 'Listen on <a href="%1$s">Apple Podcasts</a>, <a href="%2$s">Spotify</a>.', 'quadrat' ), array( 'a' => array( 'href' => array() ) ) ), '/', '/' ) . '</p>
		<!-- /wp:paragraph -->',
);
