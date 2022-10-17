<?php
/**
 * Skatepark functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Skatepark
 * @since Skatepark 1.0
 */

 /**
 * Add class to body if post/page has a featured image.
 */
function skatepark_add_featured_image_class( $classes ) {
	global $post;
	if ( isset( $post->ID ) && get_the_post_thumbnail( $post->ID ) ) {
		$classes[] = 'has-featured-image';
	}
	return $classes;
}
add_filter( 'body_class', 'skatepark_add_featured_image_class' );

if ( ! function_exists( 'skatepark_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Skatepark 1.0
	 *
	 * @return void
	 */
	function skatepark_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'skatepark' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'skatepark_support' );

if ( ! function_exists( 'skatepark_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Skatepark 1.0
	 *
	 * @return void
	 */
	function skatepark_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'skatepark-style',
			get_template_directory_uri() . '/assets/theme.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Add styles inline.
		wp_add_inline_style( 'skatepark-style', skatepark_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'skatepark-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'skatepark_styles' );

if ( ! function_exists( 'skatepark_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Skatepark 1.0
	 *
	 * @return void
	 */
	function skatepark_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', skatepark_get_font_face_styles() );

		add_editor_style(
			get_template_directory_uri() . '/assets/theme.css'
		);

	}

endif;

add_action( 'admin_init', 'skatepark_editor_styles' );


if ( ! function_exists( 'skatepark_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions skatepark_styles() and skatepark_editor_styles() above.
	 *
	 * @since Skatepark 1.0
	 *
	 * @return string
	 */
	function skatepark_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Red Hat Display';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/red-hat-display-regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Red Hat Display';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/red-hat-display-500.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Red Hat Display';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/red-hat-display-700.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Red Hat Display';
			font-weight: 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/red-hat-display-900.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Red Hat Display';
			font-weight: 400;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/red-hat-display-italic.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Red Hat Display';
			font-weight: 500;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/red-hat-display-500italic.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Red Hat Display';
			font-weight: 700;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/red-hat-display-700italic.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Red Hat Display';
			font-weight: 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/red-hat-display-900italic.woff2' ) . "') format('woff2');
		}
		";

	}

endif;

if ( ! function_exists( 'skatepark_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-weight: 400,700, font-style: normal) is preloaded here since that font is always relevant.
	 * The other fonts are only needed if the user changed style or weight of the fonts,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Skatepark 1.0
	 *
	 * @return void
	 */
	function skatepark_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/red-hat-display-regular.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/red-hat-display-700.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'skatepark_preload_webfonts' );

/**
 * Registers block patterns and categories.
 *
 * @since Skatepark 1.0
 *
 * @return void
 */
function skatepark_register_block_pattern_categories() {

	//Needed until https://github.com/WordPress/gutenberg/issues/39500 is fixed.
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'skatepark' ) ),
		'columns'  => array( 'label' => __( 'Columns', 'skatepark' ) ),
		'images'   => array( 'label' => __( 'Images', 'skatepark' ) ),
		'text'     => array( 'label' => __( 'Text', 'skatepark' ) ),
		'query'    => array( 'label' => __( 'Query', 'skatepark' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Skatepark 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'skatepark_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

}
add_action( 'init', 'skatepark_register_block_pattern_categories', 9 );

