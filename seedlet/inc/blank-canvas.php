<?php
/*
* These functions override parts of Seedlet to make it behave like a Blank Canvas theme.
*/

function seedlet_remove_theme_features() {
	// Theme Support.
	remove_theme_support( 'custom-header' );
	remove_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'seedlet_remove_theme_features', 11 );

/**
 * Dequeue Seedlet scripts.
 */
function seedlet_dequeue_scripts() {
	if ( false === get_theme_mod( 'show_site_header', false ) ) {
		// Naviation assets.
		wp_dequeue_script( 'seedlet-primary-navigation-script' );
		wp_dequeue_style( 'seedlet-style-navigation' );
	}
}
add_action( 'wp_enqueue_scripts', 'seedlet_dequeue_scripts', 11 );

/**
 * Remove redundant settings.
 */
function seedlet_remove_customizer_settings( $wp_customize ) {

	// Remove Jetpack's Author Bio setting.
	if ( function_exists( 'jetpack_author_bio' ) ) {
		$wp_customize->remove_control( 'jetpack_content_author_bio_title' );
		$wp_customize->remove_control( 'jetpack_content_author_bio' );
	}

	// Remove Seedlet's header and footer hide options,
	// since they're already hidden by default.
	$wp_customize->remove_control( 'hide_site_header' );
	$wp_customize->remove_control( 'hide_site_footer' );
}
add_action( 'customize_register', 'seedlet_remove_customizer_settings', 11 );

/**
 * Add Blank Canvas customizer settings.
 */
function seedlet_add_blank_canvas_customizer_settings( $wp_customize ) {

	// Cast the widgets panel as an object.
	$customizer_widgets_panel = (object) $wp_customize->get_panel( 'widgets' );

	// Add a Customizer message about the site title & tagline options.
	$wp_customize->get_section( 'title_tagline' )->description  = __( 'The site logo, title, and tagline will only appear on single posts and pages if the “Site header and top menu" option is enabled in the Content Options section.', 'seedlet' );
	$wp_customize->get_section( 'menu_locations' )->description = __( 'This theme will only display Menus if they are enabled in the Content Options section.', 'seedlet' );
	$wp_customize->get_panel( 'nav_menus' )->description        = __( 'This theme will only display Menus if they are enabled in the Content Options section.', 'seedlet' );
	$customizer_widgets_panel->description                      = __( 'This theme will only display Widgets if they are enabled in the Content Options section.', 'seedlet' );
}
add_action( 'customize_register', 'seedlet_add_blank_canvas_customizer_settings', 11 );

/**
 * Remove Meta Footer Items.
 */
if ( ! function_exists( 'seedlet_entry_meta_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function seedlet_entry_meta_footer() {

		// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'seedlet' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">' . seedlet_get_icon_svg( 'edit', 16 ),
			'</span>'
		);
	}
endif;

/**
 * Customizer additions.
 */
require get_template_directory() . '/classes/class-blank-canvas-customize.php';

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function seedlet_blank_canvas_body_classes( $classes ) {

	if ( false === get_theme_mod( 'show_post_and_page_titles', false ) ) {
		$classes[] = 'hide-post-and-page-titles';
	}

	if ( false === get_theme_mod( 'show_site_footer', false ) ) {
		$classes[] = 'hide-site-footer';
	}

	if ( false === get_theme_mod( 'show_comments', false ) ) {
		$classes[] = 'hide-comments';
	}

	return $classes;
}
add_filter( 'body_class', 'seedlet_blank_canvas_body_classes' );
