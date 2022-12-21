<?php
/**
 * Lettre functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lettre
 * @since Lettre 1.0
 */


if ( ! function_exists( 'lettre_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Lettre 1.0
	 *
	 * @return void
	 */
	function lettre_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'lettre_support' );

if ( ! function_exists( 'lettre_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Lettre 1.0
	 *
	 * @return void
	 */
	function lettre_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'lettre-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Add styles inline.
		wp_add_inline_style( 'lettre-style', lettre_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'lettre-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'lettre_styles' );

if ( ! function_exists( 'lettre_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Lettre 1.0
	 *
	 * @return void
	 */
	function lettre_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', lettre_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'lettre_editor_styles' );


if ( ! function_exists( 'lettre_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions lettre_styles() and lettre_editor_styles() above.
	 *
	 * @since Lettre 1.0
	 *
	 * @return string
	 */
	function lettre_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Newsreader';
			font-weight: 200 800;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Newsreader.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Newsreader';
			font-weight: 200 800;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Newsreader-italic.woff2' ) . "') format('woff2');
		}
		";

	}

endif;

if ( ! function_exists( 'lettre_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Lettre 1.0
	 *
	 * @return void
	 */
	function lettre_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/assets/fonts/Newsreader.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/assets/fonts/Newsreader-italic.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'lettre_preload_webfonts' );
