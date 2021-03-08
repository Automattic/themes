<?php
/**
 * Penscratch 2 functions and definitions
 *
 * @package Penscratch 2
 */

if ( ! function_exists( 'penscratch_2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function penscratch_2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Penscratch 2, use a find and replace
		 * to change 'penscratch-2' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'penscratch-2', get_template_directory() . '/languages' );

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
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'penscratch-2-featured', '656', '300', true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Header', 'penscratch-2' ),
			)
		);

		add_editor_style( array( 'editor-style.css', penscratch_2_fonts_url() ) );

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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Setup the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'penscratch_2_custom_background_args',
				array(
					'default-color' => 'eeeeee',
					'default-image' => '',
				)
			)
		);

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add custom colors to Gutenberg
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Dark Green', 'penscratch-2' ),
					'slug'  => 'dark-green',
					'color' => '#1c7c7c',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'penscratch-2' ),
					'slug'  => 'dark-gray',
					'color' => '#666',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'penscratch-2' ),
					'slug'  => 'medium-gray',
					'color' => '#999',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'penscratch-2' ),
					'slug'  => 'light-gray',
					'color' => '#eee',
				),
				array(
					'name'  => esc_html__( 'White', 'penscratch-2' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
			)
		);

		add_theme_support( 'editor-styles' );
		add_editor_style(
			array(
				'style.css',
				'/css/blocks.css',
				'/css/editor-blocks.css',
				penscratch_2_fonts_url(),
			)
		);
	}
endif; // penscratch_2_setup
add_action( 'after_setup_theme', 'penscratch_2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function penscratch_2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'penscratch_2_content_width', 656 );
}
add_action( 'after_setup_theme', 'penscratch_2_content_width', 0 );

function penscratch_2_adjust_content_width() {
	global $content_width;

	if ( is_page_template( 'templates/full-width-page.php' ) ) {
		$content_width = 937;
	}
}
add_action( 'template_redirect', 'penscratch_2_adjust_content_width' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function penscratch_2_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'penscratch-2' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'penscratch-2' ),
			'id'            => 'sidebar-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'penscratch-2' ),
			'id'            => 'sidebar-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'penscratch-2' ),
			'id'            => 'sidebar-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}
add_action( 'widgets_init', 'penscratch_2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function penscratch_2_scripts() {
	wp_enqueue_style( 'penscratch-2-style', get_stylesheet_uri(), array( 'penscratch-2-reset' ) );
	wp_enqueue_style( 'penscratch-2-fonts', penscratch_2_fonts_url(), array(), null );

	// Theme reset stylesheet
	wp_enqueue_style( 'penscratch-2-reset', get_theme_file_uri( '/css/reset.css' ), array(), '1.0' );

	// Theme form styles
	wp_enqueue_style( 'penscratch-2-reset', get_theme_file_uri( '/css/forms.css' ), array(), '1.0' );

	// Theme block stylesheet.
	wp_enqueue_style( 'penscratch-2-block-style', get_theme_file_uri( '/css/blocks.css' ), array( 'penscratch-2-style' ), '1.0' );

	wp_enqueue_script( 'penscratch-2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'penscratch-2-scripts', get_template_directory_uri() . '/js/penscratch-2.js', array( 'jquery' ), '20170608', true );

	wp_enqueue_script( 'penscratch-2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'penscratch_2_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 */
function penscratch_2_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'penscratch-2-block-editor-style', get_theme_file_uri( '/css/editor-blocks.css' ) );
	// Fonts.
	wp_enqueue_style( 'penscratch-2-fonts-url', penscratch_2_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'penscratch_2_block_editor_styles' );

/**
 * Register Google Fonts
 */
function penscratch_2_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Roboto Slab, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$robotoslab = esc_html_x( 'on', 'Roboto Slab font: on or off', 'penscratch-2' );

	if ( 'off' !== $robotoslab ) {

		$font_families   = array();
		$font_families[] = 'Roboto Slab:300,400,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

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
