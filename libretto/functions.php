<?php
/**
 * Libretto functions and definitions
 *
 * @package Libretto
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 720; /* 680px wide plus a 40px buffer */
}

if ( ! function_exists( 'libretto_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function libretto_setup() {
		/**
		 * Make theme available for translation
		 * Translations can be filed in the /languages/ directory
		 * If you're building a theme based on Libretto, use a find and replace
		 * to change 'libretto' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'libretto', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to head
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for Post Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add custom image sizes for:
		 * 1. The site logo
		 * 2. Large images that overlap the content area a smidge
		 * 3. Full-page images (primarily used for featured images)
		 */
		add_image_size( 'libretto-logo', 200, 200, false );
		add_image_size( 'libretto-oversized', 900, 600, false );
		add_image_size( 'libretto-fullpage', 1600, 1000, false );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add custom colors to Gutenberg
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'libretto' ),
					'slug'  => 'black',
					'color' => '#26231e',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'libretto' ),
					'slug'  => 'dark-gray',
					'color' => '#787065',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'libretto' ),
					'slug'  => 'medium-gray',
					'color' => '#a09a92',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'libretto' ),
					'slug'  => 'light-gray',
					'color' => '#d9d6d0',
				),
				array(
					'name'  => esc_html__( 'White', 'libretto' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__( 'Red', 'libretto' ),
					'slug'  => 'red',
					'color' => '#932817',
				),
				array(
					'name'  => esc_html__( 'Dark Red', 'libretto' ),
					'slug'  => 'dark-red',
					'color' => '#712012',
				),
			)
		);

		/**
		 * This theme uses wp_nav_menu() in two locations:
		 * one at the top of the page, and one for social media links in the footer
		 */
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'libretto' ),
				'social'  => __( 'Social Media Menu', 'libretto' ),
			)
		);

		/**
		 * Enable support for Post Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'audio',
				'chat',
				'gallery',
				'status',
			)
		);

		/**
		 * Enable support for custom background
		 */
		add_theme_support(
			'custom-background',
			array(
				'default-color' => '#f2f1ed',
			)
		);

		/**
		 * Enable support for proper titles
		 */
		add_theme_support( 'title-tag' );

		/**
			* Use editor admin styles.
			*/
		add_editor_style( array( 'css/editor-style.css', libretto_fonts_url() ) );

		/**
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

	} // libretto_setup()
endif;
add_action( 'after_setup_theme', 'libretto_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function libretto_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'First Footer Sidebar', 'libretto' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Second Footer Sidebar', 'libretto' ),
			'id'            => 'sidebar-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Third Footer Sidebar', 'libretto' ),
			'id'            => 'sidebar-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Fourth Footer Sidebar', 'libretto' ),
			'id'            => 'sidebar-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'libretto_widgets_init' );

/**
 * Generate URLs for our custom fonts (via Google)
 */
function libretto_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Libre Baskerville, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_baskerville = _x( 'on', 'Libre Baskerville font: on or off', 'libretto' );

	/* Translators: If there are characters in your language that are not
	 * supported by Montserrat, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$montserrat = _x( 'on', 'Montserrat font: on or off', 'libretto' );

	/* Translators: If there are characters in your language that are not
	 * supported by Playfair Display, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$playfair_display = _x( 'on', 'Playfair Display font: on or off', 'libretto' );

	/* Translators: If there are characters in your language that are not
	 * supported by Droid Mono, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$droid_mono = _x( 'on', 'Droid Sans Mono font: on or off', 'libretto' );

	if ( 'off' !== $libre_baskerville || 'off' !== $montserrat || 'off' !== $playfair_display || 'off' !== $droid_mono ) :
		$font_families = array();

		if ( 'off' !== $libre_baskerville ) {
			$font_families[] = 'Libre Baskerville:400,700,400italic';
		}

		if ( 'off' !== $playfair_display ) {
			$font_families[] = 'Playfair Display:400,700,400italic,700italic';
			$font_families[] = 'Playfair Display SC:700,700italic';
		}

		if ( 'off' !== $montserrat ) {
			$font_families[] = 'Montserrat:400';
		}

		if ( 'off' !== $droid_mono ) {
			$font_families[] = 'Droid Sans Mono:400';
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

	endif;

	return $fonts_url;
}

/**
 * Enqueue scripts and styles
 */
function libretto_scripts() {

	// General site stylesheet & JS
	wp_enqueue_style( 'libretto-style', get_stylesheet_uri() );
	wp_enqueue_script( 'libretto-script', get_template_directory_uri() . '/js/libretto.js', array( 'jquery' ), '20140331' );

	// Gutenberg styles
	wp_enqueue_style( 'libretto-blocks', get_template_directory_uri() . '/css/blocks.css' );

	// Fonts
	wp_enqueue_style( 'libretto-fonts', libretto_fonts_url(), array(), null );
	wp_enqueue_style( 'libretto-custom-icons', get_template_directory_uri() . '/icons/icons.css', array(), null );

	// Navigation
	wp_enqueue_script( 'libretto-touche', get_template_directory_uri() . '/js/touche.js', '20150604', true );
	wp_enqueue_script( 'libretto-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20150115', true );
	wp_enqueue_script( 'libretto-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	// Comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'libretto_scripts' );

/**
 * Gutenberg Editor Styles
 */
function libretto_editor_styles() {
	wp_enqueue_style( 'libretto-editor-block-style', get_template_directory_uri() . '/css/editor-blocks.css' );
	wp_enqueue_style( 'libretto-fonts', libretto_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'libretto_editor_styles' );


/**
 * Create a reusable array of available sidebars.
 * Used in sidebar.php and in inc/jetpack.php to adjust footer area according to usage.
 */
function libretto_get_active_sidebars() {
	// Loop through all possible sidebar areas to determine if they're active or not
	$available_sidebars = array( 'sidebar-1', 'sidebar-2', 'sidebar-3', 'sidebar-4' );
	$active_sidebars    = array();

	foreach ( $available_sidebars as $sidebar_name ) :
		if ( is_active_sidebar( $sidebar_name ) ) {
			$active_sidebars[] = $sidebar_name;
		}
	endforeach;
	return $active_sidebars;
}

/*
 * Get information about the header image for our current page.
 *
 * We want to use an image in the background of our masthead in two cases:
 * if there's a featured image for the post, or if there's a header image set for the site.
 * In either case, we're going to need know the dimensions of the image and the URL.

 * Usage: libretto_get_header_image( 'height' );
 * You can pass a variable to request a particular type of information. Default is URL.
 */
function libretto_get_header_image( $request = '' ) {
	// If there's a featured image set for the post/page, use that
	if ( libretto_has_post_thumbnail() && is_single() && libretto_jetpack_featured_image_display() ) :
		$libretto_featured_image      = libretto_get_attachment_image_src( get_the_ID(), get_post_thumbnail_id( get_the_ID() ), 'libretto-fullpage' );
		$libretto_header_image        = $libretto_featured_image;
		$libretto_header_image_height = 1000;
  elseif ( has_post_thumbnail() && is_singular() && libretto_jetpack_featured_image_display() ) :
	  $libretto_featured_image      = wp_get_attachment_image_src( get_post_thumbnail_id(), 'libretto-fullpage' );
	  $libretto_header_image        = $libretto_featured_image[0];
	  $libretto_header_image_height = $libretto_featured_image[2];
	  // Otherwise, use the header image
  elseif ( get_header_image() ) :
	  $libretto_header_image        = get_header_image();
	  $libretto_header_image_height = get_custom_header()->height;
  endif;

  // We'll return different information depending on the parameter passed
  // This allows us to use the same function for two things
  if ( isset( $libretto_header_image ) ) :
	  if ( 'height' === $request ) {
		  return $libretto_header_image_height;
	  } else {
		  return $libretto_header_image;
	  }
  endif;
}

/**
 * Use a bare ellipsis after post excerpts.
 */
function libretto_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'libretto_excerpt_more' );

/**
 * Add a blockquote tag around the content of a quote post format,
 * if the content of the post doesn't already contain one.
 */
function libretto_add_blockquote_to_quote( $content ) {
	if ( is_singular() || is_archive() || is_home() ) :
		// Only run on quote post types, and only for those that don't already contain a blockquote
		// Note: we look for "<blockquote" specifically so as to catch instances of blockquotes with additional attributes
		if ( 'quote' === get_post_format() && strpos( $content, '<blockquote' ) === false ) {
			$content = '<blockquote>' . $content . '</blockquote>';
		}
	endif;
	return $content;
}
add_filter( 'the_content', 'libretto_add_blockquote_to_quote' );
add_filter( 'get_the_excerpt', 'libretto_add_blockquote_to_quote' );

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
