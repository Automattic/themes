<?php
/**
 * TextBook functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TextBook
 */

if ( ! function_exists( 'textbook_setup' ) ) :

	/*
	* Sets up theme defaults and registers support for various WordPress features.
	*
	* Note that this function is hooked into the after_setup_theme hook, which
	* runs before the init hook. The init hook is too late for some features, such
	* as indicating support for post thumbnails.
	*/
	function textbook_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on components, use a find and replace
		 * to change 'textbook' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'textbook', get_template_directory() . '/languages' );

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
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Adds theme-specific images sizes
		add_image_size( 'textbook-thumbnail-avatar', 100, 100, true );
		add_image_size( 'textbook-featured-content-image', 600, 600, true );
		add_image_size( 'textbook-featured-content-image-full', 1148, 600, true );

		/**
		 * This theme uses wp_nav_menu() in two locations.
		 */
		register_nav_menus(
			array(
				'header' => __( 'Header', 'textbook' ),
				'footer' => __( 'Footer', 'textbook' ),
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

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Red', 'textbook' ),
					'slug'  => 'red',
					'color' => '#ce4639',
				),
				array(
					'name'  => esc_html__( 'Green', 'textbook' ),
					'slug'  => 'green',
					'color' => '#26866d',
				),
				array(
					'name'  => esc_html__( 'Purple', 'textbook' ),
					'slug'  => 'purple',
					'color' => '#8b66d6',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'textbook' ),
					'slug'  => 'dark-gray',
					'color' => '#222',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'textbook' ),
					'slug'  => 'medium-gray',
					'color' => '#777',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'textbook' ),
					'slug'  => 'light-gray',
					'color' => '#e1dfdc',
				),
				array(
					'name'  => esc_html__( 'White', 'textbook' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'textbook_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function textbook_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'textbook_content_width', 900 );
}
add_action( 'after_setup_theme', 'textbook_content_width', 0 );

/**
 * Set theme date format to TextBook suggested default.
 */

function textbook_update_date_format() {

	update_option( 'date_format', 'j M Y' );
}
add_action( 'after_switch_theme', 'textbook_update_date_format', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function textbook_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'textbook' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar', 'textbook' ),
			'id'            => 'sidebar-2',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'textbook_widgets_init' );

/**
 * Output Libre Franklin Pro Google Font URL
 *
 * @link   https://fonts.google.com/specimen/Libre+Franklin/
 * @return string
 */
function textbook_libre_franklin_url() {
	$libre_franklin_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Libre Franklin, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== esc_html_x( 'on', 'Libre Franklin font: on or off', 'textbook' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Libre Franklin character subset specific to your language,
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = esc_html_x( 'no-subset', 'Libre Franklin font: add new subset (greek, cyrillic, vietnamese)', 'textbook' );

		if ( 'cyrillic' === $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' === $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'vietnamese' === $subset ) {
			$subsets .= ',vietnamese';
		}

		$libre_franklin_font_url = add_query_arg( 'family', 'Libre Franklin:300,500,600,300italic,600italic', '//fonts.googleapis.com/css' );
		$libre_franklin_font_url = add_query_arg( 'subset', $subsets, $libre_franklin_font_url );

	}

	return $libre_franklin_font_url;
}

/**
 * Output Playfair Display Google Font URL
 *
 * @link   https://fonts.google.com/specimen/Playfair+Display+SC/
 * @return string
 */
function textbook_playfair_display_url() {
	$playfair_display_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Playfair Display SC, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== esc_html_x( 'on', 'Playfair Display font: on or off', 'textbook' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Playfair Display SC character subset specific to your language,
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = esc_html_x( 'no-subset', 'Playfair Display font: add new subset (greek, cyrillic, vietnamese)', 'textbook' );

		if ( 'cyrillic' === $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' === $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'vietnamese' === $subset ) {
			$subsets .= ',vietnamese';
		}

		$playfair_display_font_url = add_query_arg( 'family', 'Playfair Display:400i', '//fonts.googleapis.com/css' );
		$playfair_display_font_url = add_query_arg( 'subset', $subsets, $playfair_display_font_url );

	}

	return $playfair_display_font_url;
}

/**
 * Output Playfair Display Small Caps Google Font URL
 *
 * @link   https://fonts.google.com/specimen/Playfair+Display+SC/
 * @return string
 */
function textbook_playfair_display_sc_url() {
	$playfair_display_sc_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Playfair Display SC, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== esc_html_x( 'on', 'Playfair Display SC font: on or off', 'textbook' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Playfair Display SC character subset specific to your language,
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = esc_html_x( 'no-subset', 'Playfair Display SC font: add new subset (greek, cyrillic, vietnamese)', 'textbook' );

		if ( 'cyrillic' === $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' === $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'vietnamese' === $subset ) {
			$subsets .= ',vietnamese';
		}

		$playfair_display_sc_font_url = add_query_arg( 'family', 'Playfair Display SC:700', '//fonts.googleapis.com/css' );
		$playfair_display_sc_font_url = add_query_arg( 'subset', $subsets, $playfair_display_sc_font_url );

	}

	return $playfair_display_sc_font_url;
}

/*
 * Enqueue scripts and styles.
 */
function textbook_scripts() {

	/*
	 * Styles
	 */

	// Libre Franklin font
	wp_register_style( 'textbook-libre-franklin', textbook_libre_franklin_url(), array(), null );
	wp_enqueue_style( 'textbook-libre-franklin' );

	// Playfair Display font
	wp_register_style( 'textbook-playfair-display', textbook_playfair_display_url(), array(), null );
	wp_enqueue_style( 'textbook-playfair-display' );

	// Playfair Display Small Caps font
	wp_register_style( 'textbook-playfair-display-sc', textbook_playfair_display_sc_url(), array(), null );
	wp_enqueue_style( 'textbook-playfair-display-sc' );

	// Textbook Stylesheet
	wp_enqueue_style( 'textbook-style', get_stylesheet_uri() );

	// Block stylesheets
	wp_enqueue_style( 'textbook-block-style', get_template_directory_uri() . '/assets/css/blocks.css', array( 'textbook-style' ), '20181018' );

	/*
	 * Scripts
	 */

	// Flexslider
	wp_enqueue_script( 'textbook-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array( 'jquery' ), '2.6.1', true );

	// General functions
	wp_enqueue_script( 'textbook-functions', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery' ), '20160624', true );

	// Navigation
	wp_enqueue_script( 'textbook-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array( 'jquery' ), '20151215', true );

	// Skip link
	wp_enqueue_script( 'textbook-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	// Threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Menu toggle text
	wp_localize_script(
		'textbook-navigation',
		'textBookMenuToggleText',
		array(
			'menu'  => esc_html__( 'Menu', 'textbook' ),
			'close' => esc_html__( 'Close', 'textbook' ),
		)
	);

	// Expand collapse menu text
	wp_localize_script(
		'textbook-navigation',
		'textBookScreenReaderText',
		array(
			'expand'   => esc_html__( 'expand child menu', 'textbook' ),
			'collapse' => esc_html__( 'collapse child menu', 'textbook' ),
		)
	);

	// Search toggle text
	wp_localize_script(
		'textbook-navigation',
		'textBookSearchToggleText',
		array(
			'search' => esc_html__( 'Search', 'textbook' ),
			'close'  => esc_html__( 'Close', 'textbook' ),
		)
	);

}
add_action( 'wp_enqueue_scripts', 'textbook_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 */
function textbook_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'textbook-block-editor-style', get_template_directory_uri() . '/assets/css/editor-blocks.css' );

	// Libre Franklin font
	wp_register_style( 'textbook-libre-franklin', textbook_libre_franklin_url(), array(), null );
	wp_enqueue_style( 'textbook-libre-franklin' );

	// Playfair Display font
	wp_register_style( 'textbook-playfair-display', textbook_playfair_display_url(), array(), null );
	wp_enqueue_style( 'textbook-playfair-display' );

	// Playfair Display Small Caps font
	wp_register_style( 'textbook-playfair-display-sc', textbook_playfair_display_sc_url(), array(), null );
	wp_enqueue_style( 'textbook-playfair-display-sc' );
}
add_action( 'enqueue_block_editor_assets', 'textbook_block_editor_styles' );

/*
 * Check whether the browser supports JavaScript.
 */
function textbook_html_js_class() {
	echo '<script>document.documentElement.className = document.documentElement.className.replace("no-js","js");</script>' . "\n";
}
add_action( 'wp_head', 'textbook_html_js_class', 1 );

/*
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/*
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/*
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/*
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
