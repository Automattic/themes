<?php
/**
 * Sketch functions and definitions
 *
 * @package Sketch
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 764; /* pixels */
}

if ( ! function_exists( 'sketch_content_width' ) ) :

	function sketch_content_width() {
		global $content_width;

		if ( is_page_template( 'fullwidth-page.php' ) || ! is_active_sidebar( 'sidebar-1' ) ) {
			$content_width = 1091;
		}
	}

endif;
add_action( 'template_redirect', 'sketch_content_width' );

if ( ! function_exists( 'sketch_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sketch_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sketch, use a find and replace
		 * to change 'sketch' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'sketch', get_template_directory() . '/languages' );

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

		add_image_size( 'sketch-landscape', '800', '600', true );
		add_image_size( 'sketch-portrait', '800', '1067', true );
		add_image_size( 'sketch-square', '800', '800', true );

		add_image_size( 'sketch-featured', '1092', '400', true );
		add_image_size( 'sketch-site-logo', '300', '300' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'sketch' ),
				'social'  => __( 'Social Links', 'sketch' ),
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
				'sketch_custom_background_args',
				array(
					'default-color' => 'eeeeee',
					'default-image' => '',
				)
			)
		);

		/**
		 * Add support for Eventbrite.
		 * See: https://wordpress.org/plugins/eventbrite-api/
		 */
		add_theme_support( 'eventbrite' );

			// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Orange', 'sketch' ),
					'slug'  => 'orange',
					'color' => '#f68060',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'sketch' ),
					'slug'  => 'dark-gray',
					'color' => '#333',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'sketch' ),
					'slug'  => 'medium-gray',
					'color' => '#999',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'sketch' ),
					'slug'  => 'light-gray',
					'color' => '#eee',
				),
				array(
					'name'  => esc_html__( 'White', 'sketch' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
			)
		);
	}
endif; // sketch_setup
add_action( 'after_setup_theme', 'sketch_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sketch_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'sketch' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}
add_action( 'widgets_init', 'sketch_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sketch_scripts() {
	wp_enqueue_style( 'sketch-style', get_stylesheet_uri() );
	wp_enqueue_style( 'sketch-lato', sketch_fonts_url(), array(), null );

	// Block stylesheets
	wp_enqueue_style( 'sketch-block-style', get_template_directory_uri() . '/css/blocks.css', array( 'sketch-style' ), '20181018' );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	if ( sketch_has_featured_posts( 2 ) && is_page_template( 'portfolio-page.php' ) ) {
		wp_enqueue_script( 'sketch-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ), '20150811', true );
		wp_enqueue_script( 'sketch-script', get_template_directory_uri() . '/js/sketch.js', array( 'jquery' ), '20140530', true );

	}
	wp_enqueue_script( 'sketch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) {
		wp_enqueue_script( 'sketch-portfolio', get_template_directory_uri() . '/js/portfolio.js', array( 'jquery' ), '20150708', true );
	}

	wp_enqueue_script( 'sketch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sketch_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 */
function sketch_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'sketch-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css' );

	// Font styles.
	wp_enqueue_style( 'sketch-fonts', sketch_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'sketch_block_editor_styles' );

/**
 * Register Google Fonts
 */
function sketch_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Lato, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$lato = _x( 'on', 'Lato font: on or off', 'sketch' );

	if ( 'off' !== $lato ) {
		$font_families   = array();
		$font_families[] = 'Lato:300,400,700,300italic,400italic,700italic';

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

/**
 * Enqueue Google Fonts for custom headers
 */
function sketch_admin_scripts() {

	wp_enqueue_style( 'sketch-lato', sketch_fonts_url(), array(), null );

}
add_action( 'admin_print_styles-appearance_page_custom-header', 'sketch_admin_scripts' );


/**
 * Determine and return the appropriate thumbnail size
 */
function sketch_post_thumbnail_class() {

	if ( 'portrait' == get_theme_mod( 'sketch_portfolio_thumbnail' ) ) :
		$thumbsize = 'sketch-portrait';
	elseif ( 'square' == get_theme_mod( 'sketch_portfolio_thumbnail' ) ) :
		$thumbsize = 'sketch-square';
	else :
		$thumbsize = 'sketch-landscape';
	endif;

	if ( ! has_post_thumbnail() ) {
		$thumbsize .= ' no-thumbnail';
	}

	return $thumbsize;
}

/**
 * Use a pipe for Eventbrite meta separators.
 */
function sketch_eventbrite_meta_separator() {
	return '<span class="sep"> | </span>';
}
add_filter( 'eventbrite_meta_separator', 'sketch_eventbrite_meta_separator' );

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
