<?php
/**
 * Canard functions and definitions
 *
 * @package Canard
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 720; /* pixels */
}

if ( ! function_exists( 'canard_content_width' ) ) {
	function canard_content_width() {
		global $content_width;

		if ( is_page() ) {
			$content_width = 869;
		}
	}
}
add_action( 'template_redirect', 'canard_content_width' );

if ( ! function_exists( 'canard_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function canard_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Canard, use a find and replace
		 * to change 'canard' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'canard', get_template_directory() . '/languages' );

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
		add_image_size( 'canard-post-thumbnail', 870, 773, true );
		add_image_size( 'canard-featured-content-thumbnail', 915, 500, true );
		add_image_size( 'canard-single-thumbnail', 1920, 768, true );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add custom colors to Gutenberg
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'canard' ),
					'slug'  => 'black',
					'color' => '#222222',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'canard' ),
					'slug'  => 'dark-gray',
					'color' => '#555555',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'canard' ),
					'slug'  => 'medium-gray',
					'color' => '#777777',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'canard' ),
					'slug'  => 'light-gray',
					'color' => '#dddddd',
				),
				array(
					'name'  => esc_html__( 'White', 'canard' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__( 'Red', 'canard' ),
					'slug'  => 'red',
					'color' => '#d11415',
				),
			)
		);

		// This theme uses wp_nav_menu() in four locations.
		register_nav_menus(
			array(
				'primary'   => __( 'Primary Location', 'canard' ),
				'secondary' => __( 'Secondary Location', 'canard' ),
				'footer'    => __( 'Footer Location', 'canard' ),
				'social'    => __( 'Social Location', 'canard' ),
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
				'link',
				'gallery',
			)
		);

		add_theme_support( 'editor-styles' );
		add_editor_style(
			array(
				'style.css',
				'blocks.css',
				'editor-blocks.css',
				canard_pt_serif_playfair_display_font_url(),
				canard_lato_inconsolata_fonts_url(),
				'/genericons/genericons.css',
			)
		);
	}
endif; // canard_setup
add_action( 'after_setup_theme', 'canard_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function canard_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'canard' ),
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
			'name'          => __( 'Footer', 'canard' ),
			'id'            => 'sidebar-2',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'canard_widgets_init' );

/**
 * Register Lato and Inconsolata fonts.
 *
 * @return string
 */
function canard_lato_inconsolata_fonts_url() {
	$fonts_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	$lato = _x( 'on', 'Lato font: on or off', 'canard' );

	/* translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	$inconsolata = _x( 'on', 'Inconsolata font: on or off', 'canard' );

	if ( 'off' !== $lato || 'off' !== $inconsolata ) {
		$font_families = array();

		if ( 'off' !== $lato ) {
			$font_families[] = 'Lato:400,700,400italic,700italic';
		}

		if ( 'off' !== $inconsolata ) {
			$font_families[] = 'Inconsolata:400,700';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url  = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Register PT Serif and Playfair Display fonts.
 *
 * @return string
 */
function canard_pt_serif_playfair_display_font_url() {
	$fonts_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by PT Serif, translate this to 'off'. Do not translate into your own language.
	 */
	$pt_serif = _x( 'on', 'PT Serif font: on or off', 'canard' );

	/* translators: If there are characters in your language that are not supported
	 * by Playfair Display, translate this to 'off'. Do not translate into your own language.
	 */
	$playfair_display = _x( 'on', 'Playfair Display font: on or off', 'canard' );

	if ( 'off' !== $pt_serif || 'off' !== $playfair_display ) {
		$font_families = array();

		if ( 'off' !== $pt_serif ) {
			$font_families[] = 'PT Serif:400,700,400italic,700italic';
		}

		if ( 'off' !== $playfair_display ) {
			$font_families[] = 'Playfair Display:400,700,400italic,700italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'cyrillic,latin,latin-ext' ),
		);
		$fonts_url  = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function canard_scripts() {

	// Gutenberg styles
	wp_enqueue_style( 'canard-blocks', get_template_directory_uri() . '/blocks.css' );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.3' );

	wp_enqueue_style( 'canard-pt-serif-playfair-display', canard_pt_serif_playfair_display_font_url() );

	wp_enqueue_style( 'canard-lato-inconsolata', canard_lato_inconsolata_fonts_url() );

	wp_enqueue_style( 'canard-style', get_stylesheet_uri() );

	wp_enqueue_script( 'canard-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20150507', true );

	wp_enqueue_script( 'canard-featured-content', get_template_directory_uri() . '/js/featured-content.js', array( 'jquery' ), '20150507', true );

	wp_enqueue_script( 'canard-header', get_template_directory_uri() . '/js/header.js', array(), '20150908', true );

	wp_enqueue_script( 'canard-search', get_template_directory_uri() . '/js/search.js', array( 'jquery' ), '20150507', true );

	if ( ( is_single() && ( ( has_post_thumbnail() && canard_jetpack_featured_image_display() ) && ( ! has_post_format() || has_post_format( 'aside' ) || has_post_format( 'image' ) || has_post_format( 'gallery' ) ) ) ) || ( is_page() && has_post_thumbnail() && canard_jetpack_featured_image_display() ) ) {
		wp_enqueue_script( 'canard-single-thumbnail', get_template_directory_uri() . '/js/single-thumbnail.js', array( 'jquery' ), '20150416', true );
	}

	if ( is_singular() ) {
		wp_enqueue_script( 'canard-single', get_template_directory_uri() . '/js/single.js', array( 'jquery' ), '20150507', true );
	}

	if ( is_active_sidebar( 'sidebar-1' ) ) {
		wp_enqueue_script( 'canard-sidebar', get_template_directory_uri() . '/js/sidebar.js', array(), '20150429', true );
	}

	if ( is_home() || is_archive() || is_search() ) {
		wp_enqueue_script( 'canard-posts', get_template_directory_uri() . '/js/posts.js', array( 'jquery' ), '20150507', true );
	}

	wp_enqueue_script( 'canard-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'canard_scripts' );

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
