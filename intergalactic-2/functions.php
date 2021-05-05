<?php
/**
 * Intergalactic 2 functions and definitions
 *
 * @package Intergalactic 2
 */

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function intergalactic_2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'intergalactic_2_content_width', 1000 );
}
add_action( 'after_setup_theme', 'intergalactic_2_content_width', 0 );


if ( ! function_exists( 'intergalactic_2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function intergalactic_2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Intergalactic 2, use a find and replace
		 * to change 'intergalactic-2' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'intergalactic-2', get_template_directory() . '/languages' );

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

		/**
		 * Gutenberg wide and full images support
		 */
		add_theme_support( 'align-wide' );

		// Add custom colors to Gutenberg
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'intergalactic-2' ),
					'slug'  => 'black',
					'color' => '#222222',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'intergalactic-2' ),
					'slug'  => 'dark-gray',
					'color' => '#333333',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'intergalactic-2' ),
					'slug'  => 'light-gray',
					'color' => '#cccccc',
				),
				array(
					'name'  => esc_html__( 'White', 'intergalactic-2' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__( 'Purple', 'intergalactic-2' ),
					'slug'  => 'purple',
					'color' => '#81699b',
				),
				array(
					'name'  => esc_html__( 'Dark Purple', 'intergalactic-2' ),
					'slug'  => 'dark-purple',
					'color' => '#553a72',
				),
				array(
					'name'  => esc_html__( 'Dark Green', 'intergalactic-2' ),
					'slug'  => 'dark-green',
					'color' => '#557d73',
				),
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'intergalactic-2-large', '1440', '960', false );

		// Enable support for custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 400,
				'width'       => 1200,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Slide-Out Menu', 'intergalactic-2' ),
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

		// Setup the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'intergalactic_2_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif; // intergalactic_2_setup
add_action( 'after_setup_theme', 'intergalactic_2_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function intergalactic_2_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'intergalactic-2' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'intergalactic-2' ),
			'id'            => 'sidebar-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'intergalactic-2' ),
			'id'            => 'sidebar-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'intergalactic-2' ),
			'id'            => 'sidebar-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}
add_action( 'widgets_init', 'intergalactic_2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function intergalactic_2_scripts() {
	wp_enqueue_style( 'intergalactic-2-style', get_stylesheet_uri() );

	// Gutenberg styles
	wp_enqueue_style( 'intergalactic-2-blocks', get_template_directory_uri() . '/blocks.css' );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	wp_enqueue_script( 'intergalactic-2-script', get_template_directory_uri() . '/js/intergalactic-2.js', array( 'jquery' ), '20170428', true );

	wp_enqueue_script( 'intergalactic-2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'intergalactic-2-lato', intergalactic_2_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'intergalactic_2_scripts' );

/**
 * Gutenberg Editor Styles
 */
function intergalactic_2_editor_styles() {
	wp_enqueue_style( 'intergalactic-2-editor-block-style', get_template_directory_uri() . '/editor-blocks.css' );
	wp_enqueue_style( 'intergalactic-2-lato', intergalactic_2_fonts_url() );
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.3' );
}
add_action( 'enqueue_block_editor_assets', 'intergalactic_2_editor_styles' );

/**
 * Register Google Fonts
 */
function intergalactic_2_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Lato, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$arimo = esc_html_x( 'on', 'Lato font: on or off', 'intergalactic-2' );

	if ( 'off' !== $arimo ) {
		$font_families   = array();
		$font_families[] = 'Lato:300,400,700,300italic,400italic,700italic&subset=latin,latin-ext';

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

	return $fonts_url;

}

if ( ! function_exists( 'intergalactic_2_continue_reading_link' ) ) :
	/**
	 * Returns an ellipsis and "Continue reading" plus off-screen title link for excerpts
	 */
	function intergalactic_2_continue_reading_link() {
		return '<a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( 'Read More <span class="screen-reader-text">%1$s</span>', 'intergalactic-2' ), esc_attr( strip_tags( get_the_title() ) ) ) . '</a>';
	}
endif; // intergalactic_2_continue_reading_link

/**
 * Always display a Read More link when using the_excerpt()
 */
function intergalactic_2_excerpt_more( $output ) {
	return $output . intergalactic_2_continue_reading_link();
}
add_filter( 'the_excerpt', 'intergalactic_2_excerpt_more' );

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
