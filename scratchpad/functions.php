<?php
/**
 * Scratchpad functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Scratchpad
 */

if ( ! function_exists( 'scratchpad_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	function scratchpad_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Scratchpad, use a find and replace
		 * to change 'scratchpad' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'scratchpad', get_template_directory() . '/languages' );

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

		// Add custom colors to Gutenberg
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'scratchpad' ),
					'slug'  => 'black',
					'color' => '#222222',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'scratchpad' ),
					'slug'  => 'dark-gray',
					'color' => '#777777',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'scratchpad' ),
					'slug'  => 'medium-gray',
					'color' => '#999999',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'scratchpad' ),
					'slug'  => 'light-gray',
					'color' => '#bdcbcc',
				),
				array(
					'name'  => esc_html__( 'White', 'scratchpad' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__( 'Blue', 'scratchpad' ),
					'slug'  => 'blue',
					'color' => '#7ba6a9',
				),
				array(
					'name'  => esc_html__( 'Dark Blue', 'scratchpad' ),
					'slug'  => 'dark-blue',
					'color' => '#537375',
				),
				array(
					'name'  => esc_html__( 'Orange', 'scratchpad' ),
					'slug'  => 'orange',
					'color' => '#d16221',
				),
				array(
					'name'  => esc_html__( 'Yellow', 'scratchpad' ),
					'slug'  => 'yellow',
					'color' => '#e4b500',
				),
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featuBlue-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'scratchpad-avatar', 85, 85, true );
		add_image_size( 'scratchpad-featuBlue', 1000, 9999 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Header Menu', 'scratchpad' ),
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
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'audio',
				'gallery',
				'image',
				'link',
				'quote',
				'status',
				'video',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'scratchpad_custom_background_args',
				array(
					'default-color' => 'bdcbcc',
					'default-image' => '',
				)
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'scratchpad_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scratchpad_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'scratchpad_content_width', 840 );
}
add_action( 'after_setup_theme', 'scratchpad_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scratchpad_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'scratchpad' ),
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
			'name'          => esc_html__( 'Footer', 'scratchpad' ),
			'id'            => 'sidebar-2',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'scratchpad_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function scratchpad_scripts() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'scratchpad-fonts', scratchpad_fonts_url(), array(), null );

	wp_enqueue_style( 'scratchpad-style', get_stylesheet_uri() );

	// Gutenberg styles
	wp_enqueue_style( 'scratchpad-blocks', get_template_directory_uri() . '/blocks.css' );

	wp_enqueue_script( 'scratchpad-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'scratchpad-javascript', get_template_directory_uri() . '/js/scratchpad.js', array( 'jquery', 'masonry' ), '20151215', true );

	wp_enqueue_script( 'scratchpad-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'scratchpad_scripts' );

/**
 * Gutenberg Editor Styles
 */
function scratchpad_editor_styles() {
	wp_enqueue_style( 'scratchpad-editor-block-style', get_template_directory_uri() . '/editor-blocks.css' );
	wp_enqueue_style( 'scratchpad-fonts', scratchpad_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'scratchpad_editor_styles' );

/**
 * Get first image from a post
 * Used on image format posts as fallback.
*/
function scratchpad_get_image( $post_id = null, $thumbnail_size = '' ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}

	$values = get_attached_media( 'image', $post_id );

	if ( $values ) {
		foreach ( $values as $child_id => $attachment ) {
			$image = wp_get_attachment_image_src( $child_id, $thumbnail_size );
			break;
		}
	}

	if ( $image ) {
		return $image;
	} else {
		return false;
	}
}

/**
 * Return the post URL.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 * Borrowed from Twenty Thirteen
 */
function scratchpad_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Enqueueing Google fonts
 */
function scratchpad_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Lato, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$lato = esc_html_x( 'on', 'Lato font: on or off', 'scratchpad' );

	/* Translators: If there are characters in your language that are not
	* supported by Kalam, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$kalam = esc_html_x( 'on', 'Kalam font: on or off', 'scratchpad' );

	if ( 'off' !== $lato || 'off' !== $kalam ) {
		$font_families = array();

		if ( 'off' !== $lato ) {
			$font_families[] = 'Lato:400,400italic,700,900';
		}

		if ( 'off' !== $kalam ) {
			$font_families[] = 'Kalam:400,700';
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
 * Wrap avatars in div for easier styling
 */
function scratchpad_get_avatar( $avatar ) {
	if ( ! is_admin() ) {
		$avatar = '<span class="avatar-container">' . $avatar . '</span>';
	}
	return $avatar;
}
add_filter( 'get_avatar', 'scratchpad_get_avatar', 10, 5 );

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
