<?php
/**
 * Gazette functions and definitions
 *
 * @package Gazette
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 720; /* pixels */
}

if ( ! function_exists( 'gazette_content_width' ) ) {
	function gazette_content_width() {
		global $content_width;

		if ( is_page() ) {
			$content_width = 869;
		}
	}
}
add_action( 'template_redirect', 'gazette_content_width' );

if ( ! function_exists( 'gazette_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gazette_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Gazette, use a find and replace
		 * to change 'gazette' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'gazette', get_template_directory() . '/languages' );

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
		add_image_size( 'gazette-post-thumbnail', 720, 426, true );
		add_image_size( 'gazette-post-thumbnail-square', 720, 720, true );
		add_image_size( 'gazette-featured-content-thumbnail', 960, 540, true );
		add_image_size( 'gazette-single-thumbnail', 1920, 768, true );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Location', 'gazette' ),
				'social'  => __( 'Social Location', 'gazette' ),
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
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'image',
				'video',
				'link',
				'gallery',
			)
		);

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Blue', 'gazette' ),
					'slug'  => 'blue',
					'color' => '#3863c1',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'gazette' ),
					'slug'  => 'dark-gray',
					'color' => '#222',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'gazette' ),
					'slug'  => 'medium-gray',
					'color' => '#777',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'gazette' ),
					'slug'  => 'light-gray',
					'color' => '#ddd',
				),
				array(
					'name'  => esc_html__( 'White', 'gazette' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
			)
		);
	}
endif; // gazette_setup
add_action( 'after_setup_theme', 'gazette_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function gazette_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'gazette' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'gazette' ),
			'id'            => 'sidebar-2',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gazette_widgets_init' );

/**
 * Register Lato and Inconsolata fonts.
 *
 * @return string
 */
function gazette_lato_inconsolata_fonts_url() {
	$fonts_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	$lato = _x( 'on', 'Lato font: on or off', 'gazette' );

	/* translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	$inconsolata = _x( 'on', 'Inconsolata font: on or off', 'gazette' );

	if ( 'off' !== $lato || 'off' !== $inconsolata ) {
		$font_families = array();

		if ( 'off' !== $lato ) {
			$font_families[] = 'Lato:400,700,900,400italic,700italic,900italic';
		}

		if ( 'off' !== $inconsolata ) {
			$font_families[] = 'Inconsolata:400,700';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ), // add extra subset
		);
		$fonts_url  = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Register Lora font.
 *
 * @return string
 */
function gazette_lora_font_url() {
	$lora_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Lora, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Lora font: on or off', 'gazette' ) ) {
		$query_args = array(
			'family' => urlencode( 'Lora:400,700,400italic,700italic' ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$lora_font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $lora_font_url;
}

/**
 * Enqueue scripts and styles.
 */
function gazette_scripts() {
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.3' );

	wp_enqueue_style( 'gazette-lora', gazette_lora_font_url() );

	wp_enqueue_style( 'gazette-lato-inconsolata', gazette_lato_inconsolata_fonts_url() );

	wp_enqueue_style( 'gazette-style', get_stylesheet_uri() );

	// Block stylesheets
	wp_enqueue_style( 'gazette-block-style', get_template_directory_uri() . '/css/blocks.css', array( 'gazette-style' ), '20181018' );

	wp_enqueue_script( 'gazette-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20150507', true );

	wp_enqueue_script( 'gazette-featured-content', get_template_directory_uri() . '/js/featured-content.js', array( 'jquery' ), '20150507', true );

	wp_enqueue_script( 'gazette-header', get_template_directory_uri() . '/js/header.js', array( 'jquery' ), '20150507', true );

	wp_enqueue_script( 'gazette-search', get_template_directory_uri() . '/js/search.js', array( 'jquery' ), '20150507', true );

	if ( ( is_single() && ( ( gazette_has_post_thumbnail() && gazette_jetpack_featured_image_display() ) && ( ! has_post_format() || has_post_format( 'aside' ) || has_post_format( 'image' ) || has_post_format( 'gallery' ) ) ) ) || ( is_page() && has_post_thumbnail() && gazette_jetpack_featured_image_display() ) ) {
		wp_enqueue_script( 'gazette-single-thumbnail', get_template_directory_uri() . '/js/single-thumbnail.js', array( 'jquery' ), '20150416', true );
	}

	if ( is_singular() ) {
		wp_enqueue_script( 'gazette-single', get_template_directory_uri() . '/js/single.js', array( 'jquery' ), '20150507', true );
	}

	if ( is_singular() && is_active_sidebar( 'sidebar-1' ) ) {
		wp_enqueue_script( 'gazette-sidebar', get_template_directory_uri() . '/js/sidebar.js', array(), '20150429', true );
	}

	if ( is_home() || is_archive() || is_search() ) {
		wp_enqueue_script( 'gazette-posts', get_template_directory_uri() . '/js/posts.js', array( 'jquery' ), '20150507', true );
	}

	wp_enqueue_script( 'gazette-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gazette_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 */
function gazette_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'gazette-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css' );
	// Custom fonts.
	wp_enqueue_style( 'gazette-lato-inconsolata', gazette_lato_inconsolata_fonts_url(), array(), null );
	// Genericons.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.3' );
}
add_action( 'enqueue_block_editor_assets', 'gazette_block_editor_styles' );

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
