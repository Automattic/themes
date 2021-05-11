<?php
/**
 * Shoreditch functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shoreditch
 */

if ( ! function_exists( 'shoreditch_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shoreditch_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Shoreditch, use a find and replace
		 * to change 'shoreditch' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shoreditch', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 2000, 1500, true );

		// Enable support for custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 480,
				'width'       => 480,
				'flex-height' => true,
			)
		);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'shoreditch' ),
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
				'shoreditch_custom_background_args',
				array(
					'default-color' => 'ffffff',
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

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Blue', 'shoreditch' ),
					'slug'  => 'blue',
					'color' => '#3e69dc',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'shoreditch' ),
					'slug'  => 'dark-gray',
					'color' => '#2c313f',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'shoreditch' ),
					'slug'  => 'medium-gray',
					'color' => '#73757D',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'shoreditch' ),
					'slug'  => 'light-gray',
					'color' => '#f3f3f3',
				),
				array(
					'name'  => esc_html__( 'White', 'shoreditch' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'shoreditch_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shoreditch_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shoreditch_content_width', 900 );
}
add_action( 'after_setup_theme', 'shoreditch_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shoreditch_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'shoreditch' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget widget-small %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Top Footer', 'shoreditch' ),
			'id'            => 'sidebar-2',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Bottom Footer', 'shoreditch' ),
			'id'            => 'sidebar-3',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget widget-small %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'shoreditch_widgets_init' );

if ( ! function_exists( 'shoreditch_fonts_url' ) ) :
	/**
	 * Register Google fonts for Shoreditch.
	 *
	 * Create your own shoreditch_fonts_url() function to override in a child theme.
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function shoreditch_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== esc_html_x( 'on', 'Poppins font: on or off', 'shoreditch' ) ) {
			$fonts[] = 'Poppins:400,700';
		}

		/* translators: If there are characters in your language that are not supported by Lato, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== esc_html_x( 'on', 'Lato font: on or off', 'shoreditch' ) ) {
			$fonts[] = 'Lato:400,700,400italic,700italic';
		}

		/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== esc_html_x( 'on', 'Inconsolata font: on or off', 'shoreditch' ) ) {
			$fonts[] = 'Inconsolata:400,700';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg(
				array(
					'family' => urlencode( implode( '|', $fonts ) ),
					'subset' => urlencode( $subsets ),
				),
				'https://fonts.googleapis.com/css'
			);
		}

		return $fonts_url;
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function shoreditch_scripts() {
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	wp_enqueue_style( 'shoreditch-fonts', shoreditch_fonts_url(), array(), null );

	wp_enqueue_style( 'shoreditch-style', get_stylesheet_uri() );

	// Block stylesheets
	wp_enqueue_style( 'shoreditch-block-style', get_template_directory_uri() . '/css/blocks.css', array( 'shoreditch-style' ), '20181018' );

	wp_enqueue_script( 'shoreditch-back-top', get_template_directory_uri() . '/js/back-top.js', array(), '20120206', true );

	wp_enqueue_script( 'shoreditch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'shoreditch-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20151231', true );

	if ( get_theme_mod( 'shoreditch_sticky_header' ) ) {
		wp_enqueue_script( 'shoreditch-header', get_template_directory_uri() . '/js/header.js', array(), '20130115', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script(
		'shoreditch-back-top',
		'shoreditchButtonTitle',
		array(
			'desc' => esc_html__( 'Back to top', 'shoreditch' ),
		)
	);

	wp_localize_script(
		'shoreditch-navigation',
		'shoreditchScreenReaderText',
		array(
			'expand'   => esc_html__( 'expand child menu', 'shoreditch' ),
			'collapse' => esc_html__( 'collapse child menu', 'shoreditch' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'shoreditch_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 */
function shoreditch_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'shoreditch-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css' );

	// Font styles.
	wp_enqueue_style( 'shoreditch-fonts', shoreditch_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'shoreditch_block_editor_styles' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require( get_template_directory() . '/inc/woocommerce.php' );
}
