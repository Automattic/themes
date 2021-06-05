<?php
/**
 * components functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Affinity
 */

if ( ! function_exists( 'affinity_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the aftercomponentsetup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	function affinity_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on components, use a find and replace
		 * to change 'affinity' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'affinity', get_template_directory() . '/languages' );

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
		 * Add editor styles
		 */
		add_editor_style();

		/*
		 * Add support for responsive embeds.
		 */
		add_theme_support( 'responsive-embeds' );

		/**
		 * Add support for core custom logo
		 * - also see fallback in inc/jetpack.php
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 800,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'affinity-featured', 1500, 9999 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'top' => esc_html__( 'Top', 'affinity' ),
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
				'affinity_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'affinity_setup' );

/**
 * Look for Jetpack Site Logos if no core Custom Logo is found
 *
 * @todo Remove after WP 4.7 release
 */
function affinity_the_site_logo() {

	if ( function_exists( 'the_custom_logo' ) && current_theme_supports( 'custom-logo' ) ) {
		the_custom_logo();
	} elseif ( function_exists( 'jetpack_the_site_logo' ) ) {
		jetpack_the_site_logo();
	} else {
		return;
	}

}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function affinity_content_width() {

	// Largest width at mobile breakpoint 46em is 820px
	// Actual width at largest possible screen size is 540px

	$GLOBALS['content_width'] = apply_filters( 'affinity_content_width', 820 );
}
add_action( 'after_setup_theme', 'affinity_content_width', 0 );


/*
 * Adjust $content_width for full-width, front page, and no-sidebar page templates
 */

if ( ! function_exists( 'affinity_content_width' ) ) :

	function affinity_content_width() {
		global $content_width;

		if ( is_page_template( 'fullwidth-page.php' ) ) {
			$content_width = 1004;
		}

		if ( is_page_template( 'front-page.php' ) || ! is_active_sidebar( 'sidebar-1' ) ) {
			$content_width = 716;
		}

	}
	add_action( 'template_redirect', 'affinity_content_width' );

endif; // if ! function_exists( 'affinity_content_width' )


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function affinity_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'affinity' ),
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
			'name'          => esc_html__( 'Footer Widgets 1', 'affinity' ),
			'id'            => 'footer-1',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets 2', 'affinity' ),
			'id'            => 'footer-2',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets 3', 'affinity' ),
			'id'            => 'footer-3',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'affinity_widgets_init' );

/**
 * Register Google Fonts
 */
function affinity_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Raleway, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$raleway = esc_html_x( 'on', 'Raleway font: on or off', 'affinity' );

	/* Translators: If there are characters in your language that are not
	 * supported by Lora; translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$lora = esc_html_x( 'on', 'Lora font: on or off', 'affinity' );

	if ( 'off' !== $raleway || 'off' !== $lora ) {

		$font_families = array();

		if ( 'off' !== $raleway ) {
			$font_families[] = 'Raleway:400,400italic,700,700italic';
		}

		if ( 'off' !== $lora ) {
			$font_families[] = 'Lora:400,400italic,700,700italic';
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

	return $fonts_url;

}

/**
 * Enqueue scripts and styles.
 */
function affinity_scripts() {
	wp_enqueue_style( 'affinity-style', get_stylesheet_uri() );

	// Gutenberg styles
	wp_enqueue_style( 'affinity-blocks', get_template_directory_uri() . '/blocks.css' );

	wp_enqueue_style( 'affinity-fonts', affinity_fonts_url(), array(), null );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/fonts/genericons/genericons.css', array(), '3.4.1' );

	if ( is_front_page() ) {
		wp_enqueue_script( 'affinity-frontpage', get_template_directory_uri() . '/assets/js/frontpage.js', array( 'jquery' ), '20160324', true );
	}

	wp_enqueue_script( 'affinity-functions', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery', 'masonry' ), '20160324', true );

	wp_enqueue_script( 'affinity-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'affinity-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'affinity_scripts' );

/**
 * Gutenberg Editor Styles
 */
function affinity_editor_styles() {
	wp_enqueue_style( 'affinity-blocks-editor-style', get_template_directory_uri() . '/editor-blocks.css' );
	wp_enqueue_style( 'affinity-fonts', affinity_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'affinity_editor_styles' );


/* Allow user to adjust opacity of overlay to work with lighter/darker photos */
function affinity_style_options() {

	$opacity = get_theme_mod( 'affinity_overlay', '0.7' );

	$backgroundscroll = get_theme_mod( 'affinity_scrolling', true );

	if ( '0' !== $opacity ) { ?>

		<style type="text/css" id="affinity-overlay-opacity">

			.custom-header-image {
				opacity: <?php echo esc_attr( $opacity ); ?>;
			}

			.in-panel .custom-header-image {
				opacity: 1;
			}

			@media screen and ( min-width: 48em ) {
				.custom-header-image,
				.in-panel .custom-header-image {
					opacity: <?php echo esc_attr( $opacity ); ?>;
				}
			}

		</style>

		<?php
	}

	if ( true == $backgroundscroll ) {
		?>
		<style type="text/css" id="affinity-scrolling-background-images">
			@media screen and (min-width: 65em) {
					.custom-header-image {
						background-attachment: fixed;
						background-size: cover;
						background-position: center;
					}

					/* Don't allow scrolling in the Customizer or IE11/Edge */
					.affinity-customizer .custom-header-image,
					.is-edge .custom-header-image {
						background-attachment: scroll;
						background-size: cover;
					}
			}
		</style>
		<?php
	}
}

add_action( 'wp_head', 'affinity_style_options' );

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
