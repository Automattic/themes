<?php
/**
 * Apostrophe functions and definitions
 *
 * @package Apostrophe 2
 */

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function apostrophe_2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'apostrophe_2_content_width', 723 );
}
add_action( 'after_setup_theme', 'apostrophe_2_content_width', 0 );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
if ( ! function_exists( 'apostrophe_2_setup' ) ) :
	function apostrophe_2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'apostrophe-2', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add wide styles support for Gutenberg
		add_theme_support( 'align-wide' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add custom colors to Gutenberg
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'apostrophe-2' ),
					'slug'  => 'black',
					'color' => '#404040',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'apostrophe-2' ),
					'slug'  => 'dark-gray',
					'color' => '#686868',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'apostrophe-2' ),
					'slug'  => 'medium-gray',
					'color' => '#999999',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'apostrophe-2' ),
					'slug'  => 'light-gray',
					'color' => '#d9d9d9',
				),
				array(
					'name'  => esc_html__( 'White', 'apostrophe-2' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__( 'Blue', 'apostrophe-2' ),
					'slug'  => 'blue',
					'color' => '#159ae7',
				),
				array(
					'name'  => esc_html__( 'Dark Blue', 'apostrophe-2' ),
					'slug'  => 'dark-blue',
					'color' => '#362e77',
				),
			)
		);

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
		set_post_thumbnail_size( 450, 450, true );
		add_image_size( 'apostrophe-2-featured', 930, 450, true );
		add_image_size( 'apostrophe-2-mini', 60, 60, true );
		add_image_size( 'apostrophe-2-gallery', 550, 550, true );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Header Menu', 'apostrophe-2' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-list',
				'comment-form',
				'search-form',
				'gallery',
				'caption',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'apostrophe_2_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Enable support for custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 300,
				'width'       => 1030,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif; // apostrophe_2_setup
add_action( 'after_setup_theme', 'apostrophe_2_setup' );

/**
 * Adjust content width for full-width page template
 */
function apostrophe_2_adjusted_content_width() {
	global $content_width;

	if ( is_page_template( 'templates/full-width-page.php' ) ||
			( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) ) {
		$content_width = 1060; /* pixels */
	}
}
add_action( 'template_redirect', 'apostrophe_2_adjusted_content_width', 0 );

/**
 * Register lots of widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function apostrophe_2_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary', 'apostrophe-2' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Secondary', 'apostrophe-2' ),
			'id'            => 'sidebar-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Tertiary', 'apostrophe-2' ),
			'id'            => 'sidebar-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar', 'apostrophe-2' ),
			'id'            => 'sidebar-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'apostrophe_2_widgets_init' );

/**
 * Load all Google fonts used in theme
 */
function apostrophe_2_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by PT Serif, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$pt_serif = _x( 'on', 'PT Serif font: on or off', 'apostrophe-2' );

	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$open_sans = _x( 'on', 'Open Sans font: on or off', 'apostrophe-2' );

	if ( 'off' !== $pt_serif || 'off' !== $open_sans ) :
		$font_families = array();

		if ( 'off' !== $pt_serif ) {
			$font_families[] = 'PT Serif:400,400italic,700,700italic';
		}

		if ( 'off' !== $open_sans ) {
			$font_families[] = 'Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic';
		}

		/**
		 * A filter to enable child themes to add/change/omit font families.
		 * 
		 * @param array $font_families An array of font families to be imploded for the Google Font API
		 */
		$font_families = apply_filters( 'included_google_font_families', $font_families );

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext,cyrillic' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	endif;
	return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function apostrophe_2_scripts() {

	// Gutenberg styles
	wp_enqueue_style( 'apostrophe-2-blocks', get_template_directory_uri() . '/css/blocks.css' );

	wp_enqueue_style( 'apostrophe-2-style', get_stylesheet_uri(), array(), '20140520' );
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/css/genericons.css', array(), '20131222' );
	wp_enqueue_style( 'apostrophe-2-fonts', apostrophe_2_fonts_url(), array(), null );

	wp_enqueue_script( 'apostrophe-2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20150605', true );
	wp_enqueue_script( 'apostrophe-2-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20161104', true );
	wp_enqueue_script( 'apostrophe-2', get_template_directory_uri() . '/js/apostrophe.js', array( 'jquery' ), '20150226', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script(
		'apostrophe-2-navigation',
		'screenReaderText',
		array(
			'expand'   => esc_html__( 'expand child menu', 'apostrophe-2' ),
			'collapse' => esc_html__( 'collapse child menu', 'apostrophe-2' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'apostrophe_2_scripts' );

/**
 * Gutenberg Editor Styles
 */
function apostrophe_2_editor_styles() {
	wp_enqueue_style( 'apostrophe-2-editor-block-style', get_template_directory_uri() . '/css/editor-blocks.css' );
	wp_enqueue_style( 'apostrophe-2-fonts', apostrophe_2_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'apostrophe_2_editor_styles' );

/**
 * Use a specific size for the gallery shortcode.
 *
 * Unless a size is explicitly provided in the shortcode,
 * use a size registered with the theme if the number of columns
 * is more than a single one.
 */
function apostrophe_2_shortcode_atts_gallery( $out, $pairs, $atts ) {
	if ( empty( $atts['size'] ) && $out['columns'] >= 2 ) {
		$out['size'] = 'apostrophe-2-gallery';
	}
	return $out;
}
add_filter( 'shortcode_atts_gallery', 'apostrophe_2_shortcode_atts_gallery', 10, 3 );

/**
 * Add a body class to indicate when the user is viewing the site via the Customizer.
 * This allows us to hide the star-to-tag-as-featured-content buttons, since they're
 * largely irrelevant here, and may confuse users.
 */
function apostrophe_2_body_class( $classes ) {

	if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
		$classes[] = 'apostrophe-2-no-sidebar';
	}

	if ( function_exists( 'jetpack_social_menu' ) && get_theme_mod( 'apostrophe_2_mobile_social' ) == 1 ) {
		$classes[] = 'show-mobile-social-menu';
	}

	return $classes;
}
add_filter( 'body_class', 'apostrophe_2_body_class' );

/**
 * Remove the "home" link from the default menu.
 */
function apostrophe_2_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'apostrophe_2_page_menu_args' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Featured post stuff
 */
require get_template_directory() . '/inc/featured-posts.php';
