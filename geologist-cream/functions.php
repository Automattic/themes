<?php
/**
 * Geologist functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Geologist
 * @since Geologist 1.0
 */


if ( ! function_exists( 'geologist_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Geologist 1.0
	 *
	 * @return void
	 */
	function geologist_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'geologist', get_template_directory() . '/languages' );
	}

endif;

add_action( 'after_setup_theme', 'geologist_support' );
