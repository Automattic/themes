<?php
/**
 * Publication functions and definitions
 *
 * @package Publication
 */

/**
 * Publication only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'publication_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	function publication_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Publication, use a find and replace
		 * to change 'publication' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'publication', get_template_directory() . '/languages' );

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
					'name'  => esc_html__( 'Black', 'publication' ),
					'slug'  => 'black',
					'color' => '#222',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'publication' ),
					'slug'  => 'dark-gray',
					'color' => '#474f53',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'publication' ),
					'slug'  => 'medium-gray',
					'color' => '#a5a29d',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'publication' ),
					'slug'  => 'light-gray',
					'color' => '#eeece8',
				),
				array(
					'name'  => esc_html__( 'White', 'publication' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__( 'Orange', 'publication' ),
					'slug'  => 'orange',
					'color' => '#ef7d0b',
				),
				array(
					'name'  => esc_html__( 'Dark Orange', 'publication' ),
					'slug'  => 'dark-orange',
					'color' => '#9c8012',
				),
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 144, 144, true );
		add_image_size( 'publication-hero', 2000, 1500, true );
		add_image_size( 'publication-navigation', 1055, 132, true );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'publication' ),
				'social'  => esc_html__( 'Social Menu', 'publication' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'publication_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
	}
endif; // publication_setup
add_action( 'after_setup_theme', 'publication_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function publication_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'publication_content_width', 672 );
}
add_action( 'after_setup_theme', 'publication_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function publication_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar One', 'publication' ),
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
			'name'          => esc_html__( 'Sidebar Two', 'publication' ),
			'id'            => 'sidebar-2',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'publication_widgets_init' );

/**
 * Register Lato and Neuton fonts.
 *
 * @return string
 */
function publication_lato_neuton_fonts_url() {
	$fonts_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	$lato = _x( 'on', 'Lato font: on or off', 'publication' );

	/* translators: If there are characters in your language that are not supported
	 * by Neuton, translate this to 'off'. Do not translate into your own language.
	 */
	$neuton = _x( 'on', 'Neuton font: on or off', 'publication' );

	if ( 'off' !== $lato || 'off' !== $neuton ) {
		$font_families = array();

		if ( 'off' !== $lato ) {
			$font_families[] = 'Lato:400,700,400italic,700italic';
		}

		if ( 'off' !== $neuton ) {
			$font_families[] = 'Neuton:400,700,400italic,700italic';
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
 * Register Oswald and Inconsolata fonts.
 *
 * @return string
 */
function publication_oswald_inconsolata_fonts_url() {
	$fonts_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Oswald, translate this to 'off'. Do not translate into your own language.
	 */
	$oswald = _x( 'on', 'Oswald font: on or off', 'publication' );

	/* translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	$inconsolata = _x( 'on', 'Inconsolata font: on or off', 'publication' );

	if ( 'off' !== $oswald || 'off' !== $inconsolata ) {
		$font_families = array();

		if ( 'off' !== $oswald ) {
			$font_families[] = 'Oswald:300,400,700';
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
 * Enqueue scripts and styles.
 */
function publication_scripts() {
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/fonts/genericons/genericons.css', array(), '3.3.1' );

	wp_enqueue_style( 'publication-menucon', get_template_directory_uri() . '/fonts/menucon/menucon.css', array(), '20150609' );

	wp_enqueue_style( 'publication-lato-neuton', publication_lato_neuton_fonts_url() );

	wp_enqueue_style( 'publication-oswald-inconsolata', publication_oswald_inconsolata_fonts_url() );

	wp_enqueue_style( 'publication-style', get_stylesheet_uri() );

	// Gutenberg styles
	wp_enqueue_style( 'publication-blocks', get_template_directory_uri() . '/blocks.css' );

	wp_enqueue_script( 'publication-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150715', true );

	wp_enqueue_script( 'publication-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20150529', true );

	wp_enqueue_script( 'publication-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script(
		'publication-script',
		'screenReaderText',
		array(
			'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'publication' ) . '</span>',
			'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'publication' ) . '</span>',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'publication_scripts' );

/**
 * Gutenberg Editor Styles
 */
function publication_editor_styles() {
	wp_enqueue_style( 'publication-editor-block-style', get_template_directory_uri() . '/editor-blocks.css' );
	wp_enqueue_style( 'publication-lato-neuton', publication_lato_neuton_fonts_url() );
	wp_enqueue_style( 'publication-oswald-inconsolata', publication_oswald_inconsolata_fonts_url() );
}
add_action( 'enqueue_block_editor_assets', 'publication_editor_styles' );

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
