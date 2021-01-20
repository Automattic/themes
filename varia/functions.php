<?php
/**
 * Varia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Varia
 * @since 1.0.0
 */

/**
 * Varia only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'varia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function varia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Varia, use a find and replace
		 * to change 'varia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'varia', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'varia' ),
				'menu-2' => __( 'Footer Menu', 'varia' ),
				'social' => __( 'Social Links Menu', 'varia' ),
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

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 96,
				'width'       => 100,
				'flex-width'  => true,
				'flex-height' => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		// add_editor_style( 'child-theme-alt-style.css' ); // this will get loaded in a child theme

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'varia' ),
					'shortName' => __( 'S', 'varia' ),
					'size'      => 15,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'varia' ),
					'shortName' => __( 'M', 'varia' ),
					'size'      => 18,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'varia' ),
					'shortName' => __( 'L', 'varia' ),
					'size'      => 25.92,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'varia' ),
					'shortName' => __( 'XL', 'varia' ),
					'size'      => 31.105,
					'slug'      => 'huge',
				),
			)
		);

		/*
		 * Get customizer colors and add them to the editor color palettes
		 *
		 * - if the customizer color is empty, use the default
		 */
		$colors_array = get_theme_mod( 'colors_manager' ); // color annotations array()
		$primary      = ! empty( $colors_array ) ? $colors_array['colors']['link'] : '#0000FF'; // $config-global--color-primary-default;
		$secondary    = ! empty( $colors_array ) ? $colors_array['colors']['fg1'] : '#FF0000';  // $config-global--color-secondary-default;
		$foreground   = ! empty( $colors_array ) ? $colors_array['colors']['txt'] : '#444444';  // $config-global--color-foreground-default;
		$background   = ! empty( $colors_array ) ? $colors_array['colors']['bg'] : '#FFFFFF';   // $config-global--color-background-default;

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'varia' ),
					'slug'  => 'primary',
					'color' => $primary,
				),
				array(
					'name'  => __( 'Secondary', 'varia' ),
					'slug'  => 'secondary',
					'color' => $secondary,
				),
				array(
					'name'  => __( 'Foreground', 'varia' ),
					'slug'  => 'foreground',
					'color' => $foreground,
				),
				array(
					'name'  => __( 'Background', 'varia' ),
					'slug'  => 'background',
					'color' => $background,
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for Global Styles.
		add_theme_support(
			'jetpack-global-styles',
			array(
				'enable_theme_default' => true,
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'varia_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function varia_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'varia' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'varia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'varia_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function varia_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'varia_content_width', 750 );
}
add_action( 'after_setup_theme', 'varia_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function varia_scripts() {
	// Theme styles
	wp_enqueue_style( 'varia-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// Theme styles
	wp_enqueue_style( 'varia-wpcom-style', get_template_directory_uri() . '/inc/style-wpcom.css', array(), wp_get_theme()->get( 'Version' ) );

	// RTL styles
	wp_style_add_data( 'varia-style', 'rtl', 'replace' );

	// Print styles
	wp_enqueue_style( 'varia-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'varia_scripts' );


function varia_add_mobile_nav_on_side_scripts() {
	if ( get_theme_mod( 'enable_side_menu' ) !== 1 ) {
		return;
	}

	// Main navigation scripts
	wp_enqueue_script( 'varia-primary-navigation-script', get_template_directory_uri() . '/js/primary-navigation.js', array(), wp_get_theme()->get( 'Version' ), true );
}
/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function varia_skip_link_focus_fix() {
	// Prevent outputting skip-link-focus-fix in AMP since the AMP framework has it built-in,
	// per <https://github.com/ampproject/amphtml/issues/18671>.
	if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
		return;
	}

	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'varia_skip_link_focus_fix' );

/**
 * Enqueue block editor content-width styles.
 * - These need to be enqueued separately to include the selectors
 *   that live outside of `.editor-styles-wrapper`
 *
 */
function varia_editor_content_width() {
	wp_enqueue_style( 'varia-editor-content-width-style', get_theme_file_uri( '/style-editor-content-width.css' ), false, wp_get_theme()->get( 'Version' ), 'all' );
}
add_action( 'enqueue_block_editor_assets', 'varia_editor_content_width' );

// This makes it possible to define the function in earlier to alter in one way or another.
if ( ! function_exists( 'varia_mobile_nav_on_side' ) ) {
	function varia_mobile_nav_on_side( $classes ) {
		if ( get_theme_mod( 'enable_side_menu' ) === 1 ) {
			return array_merge( $classes, array( 'mobile-nav-side' ) );
		}
		return $classes;
	}
}

if ( ! function_exists( 'varia_enable_mobile_nav_on_side' ) ) {
	function varia_enable_mobile_nav_on_side() {
		set_theme_mod( 'enable_side_menu', 1 );
	}
}

if ( ! function_exists( 'varia_register_mobile_nav_on_side_customizer_control' ) ) {
	function varia_register_mobile_nav_on_side_customizer_control( $wp_customize ) {

		$wp_customize->add_setting(
			'enable_side_menu',
			array(
				'default'           => 1,
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_section(
			'nav_menus_mobile',
			array(
				'title' => __( 'Mobile Settings', 'varia' ),
				'panel' => 'nav_menus',
			)
		);

		$wp_customize->add_control(
			'enable_side_menu',
			array(
				'label'    => __( 'Display mobile menu on the side', 'varia' ),
				'section'  => 'nav_menus_mobile',
				'settings' => 'enable_side_menu',
				'type'     => 'checkbox',
			)
		);

	}
}

function varia_mobile_nav_on_side_setup() {
	// Add .mobile-nav-side body class.
	add_filter( 'body_class', 'varia_mobile_nav_on_side' );

	// Enable the mobile nav on side on theme switch.
	add_action( 'after_switch_theme', 'varia_enable_mobile_nav_on_side' );

	// Enable the customizer control toggle for the mobile nav on the side.
	add_action( 'customize_register' , 'varia_register_mobile_nav_on_side_customizer_control' );

	// Adds the script that help toggle the mobile nav.
	add_action( 'wp_enqueue_scripts', 'varia_add_mobile_nav_on_side_scripts' );
}

/**
 * Add ability to show or hide header and footer elements on the homepage.
 */
function varia_customize_header_footer( $wp_customize ) {

	// Add setting to hide the site header on the homepage.
	$wp_customize->add_setting( 'hide_site_header', array(
		'default'              => false,
		'type'                 => 'theme_mod',
		'transport'            => 'refresh',
		'sanitize_callback'    => 'varia_sanitize_checkbox',
	) );

	// Add control to hide the site header on the homepage.
	$wp_customize->add_control( 'hide_site_header', array(
		'label'		  => esc_html__( 'Hide the Site Header', 'seedlet' ),
		'description' => esc_html__( 'Check to hide the site header, if your homepage is set to display a static page.', 'seedlet' ),
		'section'	  => 'static_front_page',
		'priority'	  => 10,
		'type'		  => 'checkbox',
		'settings'	  => 'hide_site_header',
	) );

	// Add setting to hide footer elements on the homepage.
	$wp_customize->add_setting( 'hide_site_footer', array(
		'default'              => false,
		'type'                 => 'theme_mod',
		'transport'            => 'refresh',
		'sanitize_callback'    => 'varia_sanitize_checkbox',
	) );

	// Add control to hide footer elements on the homepage.
	$wp_customize->add_control( 'hide_site_footer', array(
		'label'		  => esc_html__( 'Hide the Site Footer Menu & Widgets', 'seedlet' ),
		'description' => esc_html__( 'Check to hide the site menu & widgets in the footer, if your homepage is set to display a static page.', 'seedlet' ),
		'section'	  => 'static_front_page',
		'priority'	  => 10,
		'type'		  => 'checkbox',
		'settings'	  => 'hide_site_footer',
	) );

	// Sanitize checkboxes.
	function varia_sanitize_checkbox( $checked = null ) {
		return (bool) isset( $checked ) && true === $checked;
	}
}
add_action( 'customize_register', 'varia_customize_header_footer' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-varia-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-varia-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
