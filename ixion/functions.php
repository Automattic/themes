<?php
/**
 * Ixion functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ixion
 */

if ( ! function_exists( 'ixion_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ixion_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on components, use a find and replace
		 * to change 'ixion' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ixion', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

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
					'name'  => esc_html__( 'Black', 'ixion' ),
					'slug'  => 'black',
					'color' => '#192930',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'ixion' ),
					'slug'  => 'dark-gray',
					'color' => '#474f53',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'ixion' ),
					'slug'  => 'medium-gray',
					'color' => '#a5a29d',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'ixion' ),
					'slug'  => 'light-gray',
					'color' => '#eeece8',
				),
				array(
					'name'  => esc_html__( 'White', 'ixion' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__( 'Yellow', 'ixion' ),
					'slug'  => 'yellow',
					'color' => '#d7b221',
				),
				array(
					'name'  => esc_html__( 'Dark Yellow', 'ixion' ),
					'slug'  => 'dark-yellow',
					'color' => '#9c8012',
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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_image_size( 'ixion-featured-content', 680, 382, true );
		add_image_size( 'ixion-featured-image', 1080, 9999 );
		add_image_size( 'ixion-avatar', 75, 75, true );

		// This theme uses wp_nav_menu() in three locations.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Header', 'ixion' ),
			)
		);

		/**
		 * Add support for core custom logo.
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 500,
				'flex-width'  => true,
				'flex-height' => true,
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
				'ixion_custom_background_args',
				array(
					'default-color' => 'ffffff',
				)
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'ixion_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ixion_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ixion_content_width', 712 );
}
add_action( 'after_setup_theme', 'ixion_content_width', 0 );


/**
 * Set larger content width in some situations.
 */
function ixion_adjust_content_width() {

	/* Allow for full-width gallery display in the footer */
	if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) {
		$GLOBALS['content_width'] = 1080;
	}
}
add_action( 'template_redirect', 'ixion_adjust_content_width' );

/**
 * Return early if Custom Logos are not available.
 *
 * @todo Remove after WP 4.7
 */
function ixion_the_custom_logo() {
	if ( ! function_exists( 'the_custom_logo' ) ) {
		return;
	} else {
		the_custom_logo();
	}
}

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ixion_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ixion' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'ixion' ),
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
			'name'          => esc_html__( 'Footer 2', 'ixion' ),
			'id'            => 'sidebar-3',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'ixion' ),
			'id'            => 'sidebar-4',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4', 'ixion' ),
			'id'            => 'sidebar-5',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ixion_widgets_init' );

/**
 * Register Google Fonts
 */
function ixion_fonts_url_archivo() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Archivo Narrow, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$archivo = esc_html_x( 'on', 'Archivo Narrow font: on or off', 'ixion' );

	if ( 'off' !== $archivo ) {

		$font_families   = array();
		$font_families[] = 'Archivo Narrow:400,400i,700,700i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

/**
 * Register local fonts
 */
function ixion_fonts_url_cooper() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Cooper Hewitt, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$cooper = esc_html_x( 'on', 'Cooper Hewitt font: on or off', 'ixion' );

	if ( 'off' !== $cooper ) {
		$fonts_url = get_template_directory_uri() . '/assets/fonts/cooperhewitt.css';
	}

	return $fonts_url;

}

/**
 * Enqueue scripts and styles.
 */
function ixion_scripts() {
	wp_enqueue_style( 'ixion-style', get_stylesheet_uri() );

	// Gutenberg styles
	wp_enqueue_style( 'ixion-blocks', get_template_directory_uri() . '/blocks.css' );

	wp_enqueue_style( 'ixion-fonts-archivo', ixion_fonts_url_archivo(), array(), null );
	wp_enqueue_style( 'ixion-fonts-cooper', ixion_fonts_url_cooper(), array(), null );
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/assets/fonts/genericons/genericons/genericons.css' );

	wp_enqueue_script( 'ixion-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ixion-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_post_type_archive( 'jetpack-testimonial' ) ) {
		wp_enqueue_script( 'masonry' );
		wp_enqueue_script( 'ixion-testimonials', get_template_directory_uri() . '/assets/js/testimonials.js', array( 'jquery', 'masonry' ), '24102016', true );
	}
}
add_action( 'wp_enqueue_scripts', 'ixion_scripts' );

/**
 * Gutenberg Editor Styles
 */
function ixion_editor_styles() {
	wp_enqueue_style( 'ixion-editor-block-style', get_template_directory_uri() . '/editor-blocks.css' );
	wp_enqueue_style( 'ixion-fonts-archivo', ixion_fonts_url_archivo(), array(), null );
	wp_enqueue_style( 'ixion-fonts-cooper', ixion_fonts_url_cooper(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'ixion_editor_styles' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
if ( ! function_exists( 'ixion_excerpt_more' ) ) :
	function ixion_excerpt_more( $more ) {
		$link = sprintf(
			'<a href="%1$s" class="more-link">%2$s</a>',
			esc_url( get_permalink( get_the_ID() ) ),
			/* translators: %s: Name of current post */
			sprintf( esc_html__( 'Continue reading %s', 'ixion' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
		return ' &hellip; ' . $link;
	}
	add_filter( 'excerpt_more', 'ixion_excerpt_more' );
endif;

/**
 * Custom header.
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
