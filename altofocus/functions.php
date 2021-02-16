<?php
/**
 * components functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AltoFocus
 */

if ( ! function_exists( 'altofocus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the aftercomponentsetup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function altofocus_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on components, use a find and replace
	 * to change 'altofocus' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'altofocus', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'altofocus-thumb-image', 640, 9999, false );
	add_image_size( 'altofocus-post-featured-image', 1200, 800, false );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Top', 'altofocus' ),
	) );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 200,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'altofocus_custom_background_args', array(
		'default-color'      => 'ffffff',
		'default-image'      => '',
		'default-position-x' => 'center',
		'default-position-y' => 'center',
		'default-repeat'     => 'no-repeat',
		'default-attachment' => 'fixed',
		'default-size'       => 'cover',
		'wp-head-callback'   => 'altofocus_custom_background_cb'
	) ) );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add support for custom color scheme.
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => esc_html__( 'Orange', 'altofocus' ),
			'slug'  => 'orange',
			'color' => '#e38900',
		),
		array(
			'name'  => esc_html__( 'Dark Gray', 'altofocus' ),
			'slug'  => 'dark-gray',
			'color' => '#111',
		),
		array(
			'name'  => esc_html__( 'Medium Gray', 'altofocus' ),
			'slug'  => 'medium-gray',
			'color' => '#888',
		),
		array(
			'name'  => esc_html__( 'Light Gray', 'altofocus' ),
			'slug'  => 'light-gray',
			'color' => '#ccc',
		),
		array(
			'name'  => esc_html__( 'White', 'altofocus' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );

	add_theme_support( 'editor-styles' );
	add_editor_style( array(
		get_template_directory_uri() . '/assets/stylesheets/editor-blocks.css',
		altofocus_libre_baskerville_url(),
		altofocus_karla_url(),
	) );
}
endif;
add_action( 'after_setup_theme', 'altofocus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function altofocus_content_width() {

	$GLOBALS[ 'content_width' ] = apply_filters( 'altofocus_content_width', '770' );
}
add_action( 'after_setup_theme', 'altofocus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function altofocus_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'altofocus' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'altofocus_widgets_init' );

/**
 * Output Libre Baskerville Google Font URL
 *
 * @link   https://fonts.google.com/specimen/Libre+Baskerville/
 * @return string
 */
function altofocus_libre_baskerville_url() {

	$libre_baskerville_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Libre Baskerville, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== esc_html_x( 'on', 'Libre Baskerville font: on or off', 'altofocus' ) ) {

		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Libre Baskerville character subset specific to your language,
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = esc_html_x( 'no-subset', 'Libre Baskerville font: add new subset (greek, cyrillic, vietnamese)', 'altofocus' );

		if ( 'cyrillic' === $subset ) {

			$subsets .= ',cyrillic,cyrillic-ext';

		} elseif ( 'greek' === $subset ) {

			$subsets .= ',greek,greek-ext';

		} elseif ( 'vietnamese' === $subset ) {

			$subsets .= ',vietnamese';
		}

		$libre_baskerville_font_url = add_query_arg( 'family', 'Libre Baskerville:400,400i,700', '//fonts.googleapis.com/css' );
		$libre_baskerville_font_url = add_query_arg( 'subset', $subsets, $libre_baskerville_font_url );
	}

	return $libre_baskerville_font_url;
}

/**
 * Output Karla Google Font URL
 *
 * @link   https://fonts.google.com/specimen/Karla/
 * @return string
 */
function altofocus_karla_url() {

	$karla_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Karla SC, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== esc_html_x( 'on', 'Karla font: on or off', 'altofocus' ) ) {

		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Karla SC character subset specific to your language,
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = esc_html_x( 'no-subset', 'Karla font: add new subset (greek, cyrillic, vietnamese)', 'altofocus' );

		if ( 'cyrillic' === $subset ) {

			$subsets .= ',cyrillic,cyrillic-ext';

		} elseif ( 'greek' === $subset ) {

			$subsets .= ',greek,greek-ext';

		} elseif ( 'vietnamese' === $subset ) {

			$subsets .= ',vietnamese';
		}

		$karla_font_url = add_query_arg( 'family', 'Karla:400,400i,700', '//fonts.googleapis.com/css' );
		$karla_font_url = add_query_arg( 'subset', $subsets, $karla_font_url );
	}

	return $karla_font_url;
}

/**
 * Enqueue scripts and styles.
 */
function altofocus_scripts() {

	/*
	 * Styles
	 */

	// Libre Franklin font
	wp_enqueue_style( 'altofocus-libre-baskerville', altofocus_libre_baskerville_url(), array(), null );

	// Karla font
	wp_enqueue_style( 'altofocus-karla', altofocus_karla_url(), array(), null );

	// Stylesheet
	wp_enqueue_style( 'altofocus-style', get_stylesheet_uri() );

	// Block stylesheets
	wp_enqueue_style( 'altofocus-block-style', get_template_directory_uri() . '/assets/stylesheets/blocks.css', array( 'altofocus-style' ), '20181018' );

	/*
	 * Scripts
	 */

	// Flexslider
	wp_enqueue_script( 'altofocus-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array( 'jquery' ), '2.6.1', true );

	// Column list
	wp_enqueue_script( 'altofocus-columnlist', get_template_directory_uri() . '/assets/js/columnlist.js', array( 'jquery' ), '20151120', true );

	// Navigation
	wp_enqueue_script( 'altofocus-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array( 'jquery' ), '20170301', true );

	// Images Loaded
	wp_enqueue_script( 'altofocus-imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.js', array( 'jquery' ), '4.1.0', true );

	// Isotope
	wp_enqueue_script( 'altofocus-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array( 'jquery', 'altofocus-imagesloaded' ), '3.0.1', true );

	// Grid setup
	wp_enqueue_script( 'altofocus-grid', get_template_directory_uri() . '/assets/js/grid.js', array( 'jquery', 'altofocus-imagesloaded', 'altofocus-isotope' ), '20170301', true );

	// AltoFocus Scripts
	wp_enqueue_script( 'altofocus-theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery', 'altofocus-columnlist', 'altofocus-grid' ), '20170301', true );

	// Skip Link Focus Fix
	wp_enqueue_script( 'altofocus-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20170301', true );

	// Comment Reply Animation
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Screenreader text
	wp_localize_script( 'altofocus-navigation', 'altoFocusScreenReaderText', array(
		'expand'   => esc_html__( 'expand child menu', 'altofocus' ),
		'collapse' => esc_html__( 'collapse child menu', 'altofocus' ),
	) );

	// Flexslider text
	wp_localize_script( 'altofocus-flexslider', 'altoFocusFlexSliderText', array(
		'next'     => esc_html__( 'Next', 'altofocus' ),
		'previous' => esc_html__( 'Previous', 'altofocus' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'altofocus_scripts' );

/**
 * Check whether the browser supports JavaScript
 */
function altofocus_html_js_class() {
	echo '<script>document.documentElement.className = document.documentElement.className.replace("no-js","js");</script>'. "\n";
}
add_action( 'wp_head', 'altofocus_html_js_class', 1 );

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
