<?php
/**
 * components functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lodestar
 */

if ( ! function_exists( 'lodestar_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the aftercomponentsetup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lodestar_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on components, use a find and replace
		 * to change 'lodestar' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lodestar', get_template_directory() . '/languages' );

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

		add_image_size( 'lodestar-featured-image', 2000, 1200, true );

		add_image_size( 'lodestar-featured-archive-image', 700, 9999 );

		add_image_size( 'lodestar-portfolio-image', 2000, 9999 );

		add_image_size( 'lodestar-portfolio-archive-image', 900, 600, true );

		add_image_size( 'lodestar-thumbnail-avatar', 100, 100, true );

		add_image_size( 'lodestar-logo', 2400, 400 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'top' => esc_html__( 'Top', 'lodestar' ),
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
				'lodestar_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add support to selectively refresh widgets in Customizer
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add theme support for Custom Logo.
		add_theme_support(
			'custom-logo',
			array(
				'width'       => 2400,
				'height'      => 400,
				'flex-width'  => true,
				'flex-height' => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
	}
endif;
add_action( 'after_setup_theme', 'lodestar_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lodestar_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lodestar_content_width', 700 );
}
add_action( 'after_setup_theme', 'lodestar_content_width', 0 );

/**
 * Custom function that modifies the_custom_logo output slightly
 */
function lodestar_the_custom_logo() {
	if ( has_custom_logo() ) {
		$custom_logo_id   = get_theme_mod( 'custom_logo' );
		$custom_logo_attr = array(
			'class'    => 'site-logo',
			'itemprop' => 'logo',
		);
		printf(
			'<a href="%1$s" class="site-logo-link" rel="home" itemprop="url">%2$s</a>',
			esc_url( home_url( '/' ) ),
			wp_get_attachment_image( $custom_logo_id, 'lodestar-logo', false, $custom_logo_attr )
		);
	}
}

/**
 * Register custom fonts
 */
function lodestar_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Work Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$work_sans = esc_html_x( 'on', 'work_sans font: on or off', 'lodestar' );

	/* Translators: If there are characters in your language that are not
	* supported by Karla, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$karla = esc_html_x( 'on', 'Karla font: on or off', 'lodestar' );

	if ( 'off' !== $work_sans || 'off' !== $karla ) {
		$font_families = array();

		if ( 'off' !== $work_sans ) {
			$font_families[] = 'Work Sans:800';
		}

		if ( 'off' !== $karla ) {
			$font_families[] = 'Karla:400,400italic,700,700italic';
		}

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

	return esc_url_raw( $fonts_url );
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lodestar_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lodestar' ),
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
			'name'          => esc_html__( 'Footer 1', 'lodestar' ),
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
			'name'          => esc_html__( 'Footer 2', 'lodestar' ),
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
			'name'          => esc_html__( 'Footer 3', 'lodestar' ),
			'id'            => 'sidebar-4',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// echo esc_attr( lodestar_widget_column_class( 'sidebar-1' ) );
}
add_action( 'widgets_init', 'lodestar_widgets_init' );


/**
 * Wrap avatars in div for easier styling
 */
function lodestar_get_avatar( $avatar ) {
	if ( ! is_admin() ) {
		$avatar = '<span class="avatar-container">' . $avatar . '</span>';
	}
	return $avatar;
}
add_filter( 'get_avatar', 'lodestar_get_avatar', 10, 5 );


/**
 * Use front-page.php when Front page displayes is set to a static page.
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
*/
function lodestar_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template', 'lodestar_front_page_template' );


/**
 * Enqueue scripts and styles.
 */
function lodestar_scripts() {
	wp_enqueue_style( 'lodestar-style', get_stylesheet_uri() );

	// Theme block stylesheet.
	wp_enqueue_style( 'lodestar-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'lodestar-style' ), '1.0' );

	wp_enqueue_style( 'lodestar_fonts_url', lodestar_fonts_url(), array(), null );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/assets/fonts/genericons.css', array(), null );

	wp_enqueue_script( 'lodestar-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lodestar-global', get_template_directory_uri() . '/assets/js/global.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'lodestar-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	// Scroll effects (only loaded on front page in Customizer)
	if ( lodestar_is_frontpage() && is_customize_preview() ) :
		wp_enqueue_script( 'scrollTo', get_template_directory_uri() . '/assets/js/jquery.scrollTo.js', array( 'jquery' ), '20151030', true );
	endif;

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Portfolio navigation (only loaded on Portfolio Template)
	if ( is_page_template( 'templates/portfolio-page.php' ) ) :
		wp_enqueue_script( 'lazyload', get_template_directory_uri() . '/assets/js/jquery.lazyload.js', array( 'jquery' ), '20160719', true );
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array( 'jquery' ), '20160719', true );
		wp_enqueue_script( 'lodestar-portfolio-page', get_template_directory_uri() . '/assets/js/portfolio-page.js', array( 'jquery', 'isotope', 'lazyload' ), '20160719', true );
	endif;

}
add_action( 'wp_enqueue_scripts', 'lodestar_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 */
function lodestar_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'lodestar-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks.css' ) );

	// Fonts.
	wp_enqueue_style( 'lodestar-fonts-url', lodestar_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'lodestar_block_editor_styles' );

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
