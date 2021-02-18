<?php
/**
 * Independent Publisher 2 functions and definitions
 *
 * @package Independent_Publisher_2
 */

if ( ! function_exists( 'independent_publisher_2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	 function independent_publisher_2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Independent Publisher 2, use a find and replace
		 * to change 'independent-publisher-2' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'independent-publisher-2', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'customize_selective_refresh_widgets' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 740, 430, true );
		add_image_size( 'independent-publisher-2-banner', 1440, 600, true );
		add_image_size( 'independent-publisher-2-full-width', 1100, 9999 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Header', 'independent-publisher-2' ),
			)
		);

		/**
		 * Add custom logo support
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'     => 300,
				'width'      => 1500,
				'flex-width' => true,
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
				'independent_publisher_2_custom_background_args',
				array(
					'default-color' => 'ffffff',
				)
			)
		);

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Medium Blue', 'independent-publisher-2' ),
					'slug'  => 'medium-blue',
					'color' => '#0087be',
				),
				array(
					'name'  => __( 'Bright Blue', 'independent-publisher-2' ),
					'slug'  => 'bright-blue',
					'color' => '#00aadc',
				),
				array(
					'name'  => __( 'Dark Gray', 'independent-publisher-2' ),
					'slug'  => 'dark-gray',
					'color' => '#4d4d4b',
				),
				array(
					'name'  => __( 'Light Gray', 'independent-publisher-2' ),
					'slug'  => 'light-gray',
					'color' => '#b3b3b1',
				),
				array(
					'name'  => __( 'White', 'independent-publisher-2' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
			)
		);

		// Load regular editor styles into the new block-based editor.
		add_theme_support( 'editor-styles' );
		add_editor_style(
			array(
				'style.css',
				'/css/blocks.css',
				'/css/editor-blocks.css',
			)
		);
	}
endif; // independent_publisher_2_setup
add_action( 'after_setup_theme', 'independent_publisher_2_setup' );

if ( ! function_exists( 'independent_publisher_2_word_count' ) ) :
	/**
	 * Gets the number of words in the post content.
	 *
	 * @link http://php.net/str_word_count
	 * @link http://php.net/number_format
	 */
	function independent_publisher_2_word_count() {
		$content = get_post_field( 'post_content', get_the_ID() );
		$count   = str_word_count( strip_tags( $content ) );
		$time    = $count / 250; //Roughly 250 wpm reading time
		// if time less than 1 explicitly set to 1.
		if ( $time < 1 ) {
			$time = 1;
		}
		return number_format( $time );
	}
endif; // independent_publisher_2_word_count

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function independent_publisher_2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'independent_publisher_2_content_width', 1100 );
}
add_action( 'after_setup_theme', 'independent_publisher_2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function independent_publisher_2_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'independent-publisher-2' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'independent-publisher-2' ),
			'id'            => 'sidebar-2',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'independent-publisher-2' ),
			'id'            => 'sidebar-3',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'independent-publisher-2' ),
			'id'            => 'sidebar-4',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}
add_action( 'widgets_init', 'independent_publisher_2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function independent_publisher_2_scripts() {

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.3.1' );

	wp_enqueue_style( 'independent-publisher-2-style', get_stylesheet_uri() );

	// Theme block stylesheet.
	wp_enqueue_style( 'independent-publisher-2-block-style', get_theme_file_uri( '/css/blocks.css' ), array( 'independent-publisher-2-style' ), '1.0' );

	wp_enqueue_script( 'independent-publisher-2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20170317', true );

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		wp_enqueue_script( 'independent-publisher-2-images', get_template_directory_uri() . '/js/independent-publisher-2.js', array(), '20210118', true );
	}

	// If there's an active Video widget, and it's (hopefully) in the footer widget area
	if ( is_active_widget( '', '', 'media_video' ) && ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) ) {
		wp_enqueue_script( 'independent-publisher-2-video-widget', get_template_directory_uri() . '/js/video-widget.js', array(), '20210111', true );
	}

	wp_enqueue_script( 'independent-publisher-2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20170315', true );

	if ( independent_publisher_2_has_header_image() ) {
		wp_add_inline_style(
			'independent-publisher-2-style',
			sprintf(
				'#hero-header { background: url("%s") no-repeat center; background-size: cover; background-attachment: scroll; }',
				esc_url( get_header_image() )
			)
		);
	}

	if ( is_singular() ) {

		if ( comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		$is_wc_product_page = false;
		if ( class_exists( 'WooCommerce' ) && is_product() ) {
			$is_wc_product_page = true;
		}

		if ( independent_publisher_2_has_cover_image() && independent_publisher_2_jetpack_featured_image_display() && ! $is_wc_product_page ) {

			$banner_src = get_the_post_thumbnail( get_the_ID(), 'independent-publisher-2-banner' );

			//Look for URLs in the image HTML
			preg_match_all( '#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $banner_src, $banner_matches );

			//Grab the first URL
			$banner = $banner_matches[0][0];

			wp_add_inline_style(
				'independent-publisher-2-style',
				sprintf(
					'#hero-header { background: url("%s") no-repeat center; background-size: cover; background-attachment: scroll; }',
					esc_url( $banner )
				)
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', 'independent_publisher_2_scripts' );

/**
 * Returns true if a post Featured Image can be displayed.
 *
 * @return bool
 */
function independent_publisher_2_has_cover_image() {

	if ( is_singular() && ! post_password_required() && ! is_attachment() && independent_publisher_2_has_post_thumbnail() ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Returns true if there's a header image set.
 *
 * @return bool
 */
function independent_publisher_2_has_header_image() {
	return (bool) get_header_image();
}

/**
 * Returns true if the word count can be displayed in posts.
 *
 * @return bool
 */
function independent_publisher_2_show_word_count() {
	$content = get_post_field( 'post_content', get_the_ID() );
	return in_array( get_post_type(), array( 'post' ) ) && ! empty( $content ) && (bool) 1 === (bool) get_theme_mod( 'independent_publisher_2_display_reading_time', 1 );
}

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
