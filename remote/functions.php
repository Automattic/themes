<?php
/**
 * Remote functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Remote
 * @since Remote 1.0
 */


if ( ! function_exists( 'remote_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Remote 1.0
	 *
	 * @return void
	 */
	function remote_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'remote_support' );

if ( ! function_exists( 'remote_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Remote 1.0
	 *
	 * @return void
	 */
	function remote_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'remote-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Add styles inline.
		wp_add_inline_style( 'remote-style', remote_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'remote-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'remote_styles' );

if ( ! function_exists( 'remote_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Remote 1.0
	 *
	 * @return void
	 */
	function remote_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', remote_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'remote_editor_styles' );


if ( ! function_exists( 'remote_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions remote_styles() and remote_editor_styles() above.
	 *
	 * @since Remote 1.0
	 *
	 * @return string
	 */
	function remote_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'DM Sans';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/DMSans-Regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'DM Sans';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/DMSans-Bold.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'DM Sans';
			font-weight: 400;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/DMSans-Italic.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'DM Sans';
			font-weight: 700;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/DMSans-BoldItalic.woff2' ) . "') format('woff2');
		}
		";

	}

endif;

if ( ! function_exists( 'remote_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-weight: 100,400, font-style: normal) is preloaded here since that font is always relevant.
	 * The other fonts are only needed if the user changed style or weight of the fonts,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Remote 1.0
	 *
	 * @return void
	 */
	function remote_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/DMSans-Regular.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'remote_preload_webfonts' );

/**
 * Block Patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';
