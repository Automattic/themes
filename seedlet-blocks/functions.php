<?php
/**
 * Seedlet Blocks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage seedlet_blocks
 * @since 1.0.0
 */

/**
 * Enqueue scripts and styles.
 */
function seedlet_blocks_enqueue() {
	wp_enqueue_style( 'seedlet-blocks-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'seedlet_blocks_enqueue' );