<?php
/**
 * Rebalance functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rebalance
 */

if ( ! function_exists( 'rebalance_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	function rebalance_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rebalance, use a find and replace
		 * to change 'rebalance' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rebalance', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add custom colors to Gutenberg
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'rebalance' ),
					'slug'  => 'black',
					'color' => '#000000',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'rebalance' ),
					'slug'  => 'dark-gray',
					'color' => '#666666',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'rebalance' ),
					'slug'  => 'medium-gray',
					'color' => '#999999',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'rebalance' ),
					'slug'  => 'light-gray',
					'color' => '#cccccc',
				),
				array(
					'name'  => esc_html__( 'White', 'rebalance' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__( 'Red', 'rebalance' ),
					'slug'  => 'red',
					'color' => '#f35029',
				),
				array(
					'name'  => esc_html__( 'Dark Red', 'rebalance' ),
					'slug'  => 'dark-red',
					'color' => '#aa2e11',
				),
			)
		);

		/**
		 * Add support for core custom logo (replaces JetPack functionality)
		 * - also see fallback in inc/jetpack.php
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 80,
				'width'       => 80,
				'flex-width'  => true,
				'header-text' => array(
					'site-title',
					'site-description',
				),
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 720, 1200 );
		add_image_size( 'rebalance-archive', 560, 9999 );

		/*
		 * This theme uses wp_nav_menu() in one location.
		 */
		register_nav_menus(
			array(
				'header' => esc_html__( 'Header Menu', 'rebalance' ),
				'social' => esc_html__( 'Social Menu', 'rebalance' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'rebalance_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
	}
endif; // rebalance_setup
add_action( 'after_setup_theme', 'rebalance_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rebalance_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rebalance_content_width', 1140 );
}
add_action( 'after_setup_theme', 'rebalance_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rebalance_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'rebalance' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rebalance_widgets_init' );

/**
 * Add Google webfonts
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function rebalance_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Lora, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$rubik = esc_html_x( 'on', 'Rubik font: on or off', 'rebalance' );

	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$libre_baskerville = esc_html_x( 'on', 'Libre Baskerville font: on or off', 'rebalance' );

	if ( 'off' !== $rubik || 'off' !== $libre_baskerville ) {
		$font_families = array();

		if ( 'off' !== $rubik ) {
			$font_families[] = 'Rubik:400,500,700,900,400italic,700italic';
		}

		if ( 'off' !== $libre_baskerville ) {
			$font_families[] = 'Libre Baskerville:700,900,400italic';
		}

		/**
		 * A filter to enable child themes to add/change/omit font families.
		 *
		 * @param array $font_families An array of font families to be imploded for the Google Font API
		 */
		$font_families = apply_filters( 'included_google_font_families', $font_families );

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function rebalance_scripts() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'rebalance-fonts', rebalance_fonts_url(), array(), null );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/font-awesome.css', array(), '20151022' );

	wp_enqueue_style( 'rebalance-style', get_stylesheet_uri() );

	// Gutenberg styles
	wp_enqueue_style( 'rebalance-blocks', get_template_directory_uri() . '/blocks.css' );

	/**
	 * Scripts
	 */
	wp_enqueue_script( 'columnlist', get_template_directory_uri() . '/js/columnlist.js', array( 'jquery' ), '20151120', true );

	wp_enqueue_script( 'rebalance-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151112', true );

	wp_enqueue_script( 'rebalance-theme-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery', 'columnlist', 'masonry' ), '20151130', true );
	wp_localize_script(
		'rebalance-theme-scripts',
		'Rebalance',
		array(
			'is_rtl' => ( 'rtl' == get_option( 'text_direction' ) ) ? 1 : 0,
		)
	);

	wp_enqueue_script( 'rebalance-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151112', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script(
		'rebalance-navigation',
		'rebalanceScreenReaderText',
		array(
			'expand'   => esc_html__( 'expand child menu', 'rebalance' ),
			'collapse' => esc_html__( 'collapse child menu', 'rebalance' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'rebalance_scripts' );

/**
 * Gutenberg Editor Styles
 */
function rebalance_editor_styles() {
	wp_enqueue_style( 'rebalance-block-style', get_template_directory_uri() . '/blocks.css' );
	wp_enqueue_style( 'rebalance-editor-block-style', get_template_directory_uri() . '/editor-blocks.css' );
	wp_enqueue_style( 'rebalance-fonts', rebalance_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'rebalance_editor_styles' );

/**
 * Check whether the browser supports JavaScript
 */
function rebalance_html_js_class() {
	echo '<script>document.documentElement.className = document.documentElement.className.replace("no-js","js");</script>' . "\n";
}
add_action( 'wp_head', 'rebalance_html_js_class', 1 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
