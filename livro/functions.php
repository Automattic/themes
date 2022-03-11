<?php
/**
 * Livro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Livro
 * @since Livro 1.0
 */


if ( ! function_exists( 'livro_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Livro 1.0
	 *
	 * @return void
	 */
	function livro_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'livro_support' );

if ( ! function_exists( 'livro_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Livro 1.0
	 *
	 * @return void
	 */
	function livro_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'livro-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'livro-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'livro_styles' );


add_action( 'admin_init', 'livro_editor_styles' );

if ( ! function_exists( 'livro_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Livro 1.0
	 *
	 * @return void
	 */
	function livro_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/Newsreader.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/Newsreader-italic.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'livro_preload_webfonts' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
