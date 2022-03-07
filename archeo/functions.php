<?php
/**
 * Archeo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Archeo
 * @since Archeo 1.0
 */


if ( ! function_exists( 'archeo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Archeo 1.0
	 *
	 * @return void
	 */
	function archeo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'archeo_support' );

if ( ! function_exists( 'archeo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Archeo 1.0
	 *
	 * @return void
	 */
	function archeo_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'archeo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'archeo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'archeo_styles' );

if ( ! function_exists( 'archeo_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-weight: 100,400, font-style: normal) is preloaded here since that font is always relevant. 
	 * The other fonts are only needed if the user changed style or weight of the fonts,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Archeo 1.0
	 *
	 * @return void
	 */
	function archeo_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/Chivo-Thin.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/Chivo-Regular.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'archeo_preload_webfonts' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
