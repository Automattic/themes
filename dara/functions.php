<?php
/**
 * Dara functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dara
 */

if ( ! function_exists( 'dara_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dara_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on components, use a find and replace
		 * to change 'dara' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dara', get_template_directory() . '/languages' );

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

		// Post thumbnails
		add_image_size( 'dara-featured-image', 880, 312, true );
		// Hero Image on the front page slider
		add_image_size( 'dara-hero-thumbnail', 1180, 600, true );
		// Full width and grid page template
		add_image_size( 'dara-page-thumbnail', 1180, 435, true );
		// Grid child page thumbnail
		add_image_size( 'dara-grid-thumbnail', 360, 242, true );
		// Testimonial thumbnail
		add_image_size( 'dara-testimonial-thumbnail', 180, 180, true );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add custom colors to Gutenberg
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'dara' ),
					'slug'  => 'black',
					'color' => '#404040',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'dara' ),
					'slug'  => 'dark-gray',
					'color' => '#444340',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'dara' ),
					'slug'  => 'medium-gray',
					'color' => '#a8a6a1',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'dara' ),
					'slug'  => 'light-gray',
					'color' => '#e6e6e6',
				),
				array(
					'name'  => esc_html__( 'White', 'dara' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__( 'Blue', 'dara' ),
					'slug'  => 'blue',
					'color' => '#15b6b8',
				),
				array(
					'name'  => esc_html__( 'Dark Blue', 'dara' ),
					'slug'  => 'dark-blue',
					'color' => '#0c8384',
				),
			)
		);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Header', 'dara' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'dara_custom_background_args',
				array(
					'default-color' => '444340',
				)
			)
		);

		// Add theme support for custom logos
		add_theme_support(
			'custom-logo',
			array(
				'width'       => 1200,
				'height'      => 300,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for excerpts on pages
		add_post_type_support( 'page', 'excerpt' );

		// Add support for Editor Styles
		add_theme_support( 'editor-styles' );
		add_editor_style(
			array(
				'style.css',
				'blocks.css',
				'editor-blocks.css',
				'/assets/genericons/genericons.css',
				dara_fonts_url(),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'dara_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dara_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dara_content_width', 825 );
}
add_action( 'after_setup_theme', 'dara_content_width', 0 );

/**
 * Set larger content width in some situations.
 */
function dara_adjust_content_width() {

	/* Set the content width for the front-page or testimonials templates */
	if ( is_post_type_archive( 'jetpack-testimonial' ) || ( is_front_page() ) ) {
		$GLOBALS['content_width'] = 1180;
	}

	/* Allow for full-width gallery display in the footer */
	if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) {
		$GLOBALS['content_width'] = 1086;
	}
}
add_action( 'template_redirect', 'dara_adjust_content_width' );

/**
 * Return early if Custom Logos are not available.
 *
 * @todo Remove after WP 4.7
 */
function dara_the_custom_logo() {
	if ( ! function_exists( 'the_custom_logo' ) ) {
		return;
	} else {
		the_custom_logo();
	}
}

/**
 * Returns the Google font stylesheet URL, if available.
 */
function dara_fonts_url() {
	$fonts_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Source Sans Pro, translate this to 'off'. Do not translate into your own language.
	 */
	$source_sans_pro = esc_html_x( 'on', 'Source Sans Pro font: on or off', 'dara' );

	/* translators: If there are characters in your language that are not supported
	 * by Yrsa, translate this to 'off'. Do not translate into your own language.
	 */
	$yrsa = esc_html_x( 'on', 'Yrsa font: on or off', 'dara' );

	if ( 'off' !== $source_sans_pro || 'off' !== $merriweather || 'off' !== $Yrsa ) {
		$font_families = array();

		if ( 'off' !== $source_sans_pro ) {
			$font_families[] = 'Source Sans Pro:300,300italic,400,400italic,600';
		}
		if ( 'off' !== $yrsa ) {
			$font_families[] = 'Yrsa:300,400,700';
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
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dara_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dara' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'dara' ),
			'id'            => 'sidebar-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'dara' ),
			'id'            => 'sidebar-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'dara' ),
			'id'            => 'sidebar-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'dara_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dara_scripts() {
	wp_enqueue_style( 'dara-style', get_stylesheet_uri() );

	// Gutenberg styles
	wp_enqueue_style( 'dara-blocks', get_template_directory_uri() . '/blocks.css' );

	// Add Yrsa, Source Sans Pro and Merriweather fonts.
	wp_enqueue_style( 'dara-fonts', dara_fonts_url(), array(), null );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/assets/genericons/genericons.css', array(), '3.4.1' );

	wp_enqueue_script( 'dara-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	if ( dara_has_featured_posts( 1 ) && ( is_home() || is_front_page() ) ) {
		wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array( 'jquery' ), '20161220', true );
		wp_enqueue_script( 'dara-slider', get_template_directory_uri() . '/assets/js/slider.js', array( 'flexslider', 'imagesloaded' ), '20161220', true );
	}

	// If there's an active Video widget, and it's (hopefully) in the footer widget area
	if ( is_active_widget( '', '', 'media_video' ) && ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) ) {
		wp_enqueue_script( 'dara-video', get_template_directory_uri() . '/assets/js/video-widget.js', array( 'jquery' ), '20170608', true );
	}

	wp_enqueue_script( 'dara-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dara_scripts' );

if ( ! function_exists( 'dara_continue_reading_link' ) ) :
	/**
	 * Returns an ellipsis and "Continue reading" plus off-screen title link for excerpts
	 */
	function dara_continue_reading_link() {
		return '&hellip; <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( 'Continue reading <span class="screen-reader-text">%1$s</span>', 'dara' ), esc_attr( strip_tags( get_the_title() ) ) ) . '</a>';
	}
endif; // dara_continue_reading_link

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with dara_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function dara_auto_excerpt_more() {
	if ( is_admin() ) {
		return;
	}

	return dara_continue_reading_link();
}
add_filter( 'excerpt_more', 'dara_auto_excerpt_more' );

/**
 * Custom Header support.
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
	require get_template_directory() . '/inc/woocommerce.php';
}
