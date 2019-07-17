<?php
/**
 * _Dsgnsystm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage _Dsgnsystm
 * @since 1.0.0
 */

/**
 * _Dsgnsystm only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( '_dsgnsystm_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _dsgnsystm_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _Dsgnsystm, use a find and replace
		 * to change '_dsgnsystm' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_dsgnsystm', get_template_directory() . '/languages' );

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
				'menu-1' => __( 'Primary', '_dsgnsystm' ),
				'footer' => __( 'Footer Menu', '_dsgnsystm' ),
				'social' => __( 'Social Links Menu', '_dsgnsystm' ),
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
				'flex-height' => false,
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
					'name'      => __( 'Small', '_dsgnsystm' ),
					'shortName' => __( 'S', '_dsgnsystm' ),
					'size'      => 15,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', '_dsgnsystm' ),
					'shortName' => __( 'M', '_dsgnsystm' ),
					'size'      => 18,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', '_dsgnsystm' ),
					'shortName' => __( 'L', '_dsgnsystm' ),
					'size'      => 25.92,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', '_dsgnsystm' ),
					'shortName' => __( 'XL', '_dsgnsystm' ),
					'size'      => 31.105,
					'slug'      => 'huge',
				),
			)
		);

		// $default_hue     = _dsgnsystm_get_default_hue();
		// $saturation      = _dsgnsystm_get_default_saturation();
		// $lightness       = _dsgnsystm_get_default_lightness();
		// $lightness_hover = _dsgnsystm_get_default_lightness_hover();

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', '_dsgnsystm' ),
					'slug'  => 'primary',
					'color' => '#0000FF', // _dsgnsystm_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? $default_hue : get_theme_mod( 'primary_color_hue', $default_hue ), $saturation, $lightness ),
				),
				array(
					'name'  => __( 'Secondary', '_dsgnsystm' ),
					'slug'  => 'secondary',
					'color' => '#FF0000', // _dsgnsystm_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? $default_hue : get_theme_mod( 'primary_color_hue', $default_hue ), $saturation, $lightness_hover ),
				),
				array(
					'name'  => __( 'Dark Gray', '_dsgnsystm' ),
					'slug'  => 'foreground-dark',
					'color' => '#111111',
				),
				array(
					'name'  => __( 'Gray', '_dsgnsystm' ),
					'slug'  => 'foreground',
					'color' => '#444444',
				),
				array(
					'name'  => __( 'Light Gray', '_dsgnsystm' ),
					'slug'  => 'foreground-light',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', '_dsgnsystm' ),
					'slug'  => 'background',
					'color' => '#FFFFFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', '_dsgnsystm_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _dsgnsystm_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', '_dsgnsystm' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', '_dsgnsystm' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', '_dsgnsystm_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function _dsgnsystm_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( '_dsgnsystm_content_width', 640 );
}
add_action( 'after_setup_theme', '_dsgnsystm_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function _dsgnsystm_scripts() {
	// Theme styles
	wp_enqueue_style( '_dsgnsystm-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// RTL styles
	wp_style_add_data( '_dsgnsystm-style', 'rtl', 'replace' );

	// Print styles
	wp_enqueue_style( '_dsgnsystm-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_dsgnsystm_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function _dsgnsystm_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', '_dsgnsystm_skip_link_focus_fix' );

/**
 * Enqueue block editor content-width styles.
 * - These need to be enqueued separately to include the selectors
 *   that live outside of `.editor-styles-wrapper`
 *
 */
function _dsgnsystm_editor_content_width() {
	wp_enqueue_style( '_dsgnsystm-editor-content-width-style', get_theme_file_uri( '/style-editor-content-width.css' ), false, wp_get_theme()->get( 'Version' ), 'all' );
}
add_action( 'enqueue_block_editor_assets', '_dsgnsystm_editor_content_width' );

/**
 * Enqueue supplemental block editor styles.
 */
function _dsgnsystm_editor_customizer_styles() {

	wp_enqueue_style( '_dsgnsystm-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, wp_get_theme()->get( 'Version' ), 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( '_dsgnsystm-editor-customizer-styles', _dsgnsystm_custom_colors_css() );
	}
}
// add_action( 'enqueue_block_editor_assets', '_dsgnsystm_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function _dsgnsystm_colors_css_wrap() {

	// Only bother if we haven't customized the color.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = _dsgnsystm_get_default_hue();
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', $primary_color );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo _dsgnsystm_custom_colors_css(); ?>
	</style>
	<?php
}
// add_action( 'wp_head', '_dsgnsystm_colors_css_wrap' );

/**
 * Default color filters.
 */
require get_template_directory() . '/inc/color-filters.php';

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-_dsgnsystm-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-_dsgnsystm-walker-comment.php';

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
