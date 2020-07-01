<?php
/**
 * dyad 2 functions and definitions
 *
 * @package Dyad
 */

if ( ! function_exists( 'dyad_2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dyad_2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dyad, use a find and replace
		 * to change 'dyad-2' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'dyad-2', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add custom logo support
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 300,
			'width'       => 600,
			'flex-width'  => true,
   			'header-text' => array(
				'site-title',
				'site-description',
			),
		) );

		/*
		 * Register menus
		 */
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary Menu', 'dyad-2' ),
		) );

		/*
		 * Add Post Format support
		 */
		add_theme_support( 'post-formats', array( 'image' ) );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		/* setting custom image size for thumbnails for dyad 2 */
		add_image_size( 'dyad-2-banner', '1800', '720', true );
		add_image_size( 'dyad-2-thumbnails', '630', '840', true );
		add_image_size( 'dyad-2-thumbnails-horz', '680', '455', true );
		add_image_size( 'dyad-2-featured-image', '960', '1280', true );
		add_image_size( 'dyad-2-featured-image-horz', '960', '640', true );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'gallery',
			'caption',
		) );

		// Load default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Editor Styles
		add_editor_style( 'css/editor-blocks.css' );
		add_editor_style( dyad_2_fonts_url() );

		// Add support for custom color scheme.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Bright Blue', 'dyad-2' ),
				'slug'  => 'bright-blue',
				'color' => '#678db8',
			),
			array(
				'name'  => esc_html__( 'Yellow', 'dyad-2' ),
				'slug'  => 'yellow',
				'color' => '#e7ae01',
			),
			array(
				'name'  => esc_html__( 'Light Gray-Blue', 'dyad-2' ),
				'slug'  => 'light-gray-blue',
				'color' => '#abb7c3',
			),
			array(
				'name'  => esc_html__( 'Medium Gray', 'dyad-2' ),
				'slug'  => 'medium-gray',
				'color' => '#6a6c6e',
			),
			array(
				'name'  => esc_html__( 'Dark Gray', 'dyad-2' ),
				'slug'  => 'dark-gray',
				'color' => '#1a1c1e',
			),
			array(
				'name'  => esc_html__( 'Dark Gray-Blue', 'dyad-2' ),
				'slug'  => 'dark-gray-blue',
				'color' => '#292c2f',
			),
			array(
				'name'  => esc_html__( 'White', 'dyad-2' ),
				'slug'  => 'white',
				'color' => '#fff',
			),
		) );

	}
endif; // dyad_2_setup
add_action( 'after_setup_theme', 'dyad_2_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dyad_2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dyad_2_content_width', 1000 );
}
add_action( 'after_setup_theme', 'dyad_2_content_width', 0 );


/**
 * Replaces the excerpt "more" text by a link
 */
if ( ! function_exists( 'dyad_2_excerpt_continue_reading' ) ) {
	function dyad_2_excerpt_continue_reading() {
		return '... <div class="link-more"><a href="' . esc_url( get_permalink() ) . '">' . sprintf( esc_html__( 'Read More', 'dyad-2' ), '<span class="screen-reader-text"> "' . get_the_title() . '"</span>' ) . '</a></div>';
	}
} // /dyad_2_excerpt_continue_reading

add_filter( 'excerpt_more', 'dyad_2_excerpt_continue_reading' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function dyad_2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'dyad-2' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Displays in footer area.', 'dyad-2' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'dyad_2_widgets_init' );


/**
 * Counts the number of widgets in a specific sidebar
 *
 * @param   string  $id
 * @return  integer number of widgets in the sidebar
 */
function dyad_2_count_widgets( $id ) {
	$count = 0;
	$sidebars_widgets = wp_get_sidebars_widgets();

	if ( array_key_exists( $id, $sidebars_widgets ) ) {

		foreach ( ( array ) $sidebars_widgets[$id] as $value ) {
			// Don't count the Cookies or Mailchimp widgets, since they're not visible in the widget area.
			if ( strpos( $value, 'eu_cookie_law_widget' ) === false && strpos( $value, 'widget_mailchimp_subscriber_popup' ) === false ) {
				$count++;
			}
		}
	}
	return $count;
}


/**
 * Widget column class helper
 *
 * @param   string  $id
 * @return  string  grid class
 */
function dyad_2_widget_column_class( $widget_id ) {
	$count = dyad_2_count_widgets( $widget_id );
	$class = '';
	if ( $count >= 4 ) {
		$class .= 'widgets-four';
	} elseif ( 3 == $count ) {
		$class .= 'widgets-three';
	} elseif ( 2 == $count ) {
		$class .= 'widgets-two';
	} else {
		$class .= 'widget-one';
	}
	return $class;
}

/**
 * Wrap avatars in div for easier styling
 */
function dyad_2_get_avatar( $avatar ) {
	if( ! is_admin() ) {
		$avatar = '<span class="avatar-container">' . $avatar . '</span>';
	}
	return $avatar;
}
add_filter( 'get_avatar', 'dyad_2_get_avatar', 10, 5 );


/**
 * Google Fonts
 */

function dyad_2_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Lato, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$lato = _x( 'on', 'Lato font: on or off', 'dyad-2' );

	/* Translators: If there are characters in your language that are not
	* supported by Noto Serif, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$noto_serif = _x( 'on', 'Noto Serif font: on or off', 'dyad-2' );

	if ( 'off' !== $lato || 'off' !== $noto_serif ) {
		$font_families = array();

		if ( 'off' !== $lato ) {
			$font_families[] = 'Lato:400,400italic,700,700italic';
		}

		if ( 'off' !== $noto_serif ) {
			$font_families[] = 'Noto Serif:400,400italic,700,700italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}


/**
 * Enqueue scripts and styles.
 */
function dyad_2_scripts() {

	if ( ! wp_style_is( 'genericons', 'registered' ) ) {
		wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );
	}

	wp_enqueue_style( 'dyad-2-fonts', dyad_2_fonts_url(), array(), null );

	wp_enqueue_script( 'dyad-2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'dyad-2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( ( is_front_page() || is_home() ) && dyad_2_has_banner_posts( 2 ) ) {
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), '20140523', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'dyad-2-style', get_stylesheet_uri(), array( 'genericons' ) );

	// Theme block stylesheet.
	wp_enqueue_style( 'dyad-2-block-style', get_template_directory_uri() . '/css/blocks.css', array( 'dyad-2-style' ), '20181018' );

	wp_enqueue_script( 'dyad-2-global', get_template_directory_uri() . '/js/global.js', array( 'jquery', 'masonry' ), '20151204', true );
}
add_action( 'wp_enqueue_scripts', 'dyad_2_scripts' );


/**
 * Enqueue editor styles for Gutenberg
 *
 */
function dyad_2_block_editor_styles() {
	// Block styles.
	// wp_enqueue_style( 'dyad-2-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css' );
	// Add custom fonts.
	wp_enqueue_style( 'dyad-2-fonts', dyad_2_fonts_url(), array(), null );
	// Add Genericons.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );
}
add_action( 'enqueue_block_editor_assets', 'dyad_2_block_editor_styles' );

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
	require get_template_directory() . '/inc/woocommerce.php';
}
