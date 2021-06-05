<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package Seedlet
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 */
function seedlet_jetpack_setup() {
	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'author-bio' => true,
	) );
}
add_action( 'after_setup_theme', 'seedlet_jetpack_setup' );
