<?php

/**
 * Course functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Course
 * @since   Course 1.0
 */


if ( ! function_exists( 'course_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Course 1.0
	 *
	 * @return void
	 */
	function course_support() {
		add_theme_support( 'sensei-learning-mode' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'course_support' );

if ( ! function_exists( 'course_scripts' ) ) :

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since Course 1.0
	 *
	 * @return void
	 */
	function course_scripts() {
		wp_register_style( 'course-style', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_script( 'course-header', get_template_directory_uri() . '/assets/js/header.js', array(), wp_get_theme()->get( 'Version' ), true );
		wp_enqueue_style( 'course-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'course_scripts' );

function course_theme_init() {
	register_block_style(
		'core/navigation-link',
		array(
			'name'  => 'navigation-link-button',
			'label' => __( 'Button', 'course' ),
		)
	);
}

add_action( 'init', 'course_theme_init' );

/**
 * Register Sensei LMS block patterns category.
 */
function course_register_block_patterns_category() {
	register_block_pattern_category(
		'sensei-lms',
		array( 'label' => 'Sensei LMS' )
	);
}

add_action( 'init', 'course_register_block_patterns_category' );

add_filter(
	'theme_lesson_templates',
	'course_theme_filter_single_lesson_template_for_sensei_learning_mode',
	11,
	3
);

add_filter( 'body_class', 'add_body_class_for_variation' );

add_filter( 'admin_body_class', 'add_body_class_for_variation' );

add_action( 'course_theme_variation_loaded', 'enqueue_style_for_variation' );

/**
 * Filter the list of templates for the single lesson page.
 *
 * @param array   $page_templates Array of page templates.
 * @param string  $theme          The current theme.
 * @param WP_Post $post           The post being edited, provided for context, or null.
 *
 * @since Course 1.3.2
 *
 * @return array Array of page templates.
 */
function course_theme_filter_single_lesson_template_for_sensei_learning_mode( $page_templates, $theme, $post ) {
	// In case some other plugin has a post type called lesson.
	if ( ! $post || ! class_exists( 'Sensei_Main' ) ) {
		return $page_templates;
	}

	$course_id                = Sensei()->lesson->get_course_id( $post->ID );
	$is_learning_mode_enabled = Sensei_Course_Theme_Option::has_learning_mode_enabled( $course_id );

	if ( $is_learning_mode_enabled ) {
		unset( $page_templates['single-lesson'] );
	}

	return $page_templates;
}

/**
 * Add a body class with the variation.
 * body_class hook passes classes as array whereas
 * admin_body_class passes them as string. So we handle both.
 *
 * @param array|string $classes Body classes.
 *
 * @internal
 *
 * @return array|string Body classes.
 */
function add_body_class_for_variation( $classes ) {
	$css_string    = wp_get_global_stylesheet( array( 'variables' ) );
	$property_name = '--wp--custom--course-theme-variation';
	$is_array      = is_array( $classes );

	// 1. "/": Delimiters that mark the start and end of the regex pattern.
	// 2. "$property_name": This part of the pattern matches the specific property name, in our case, '--wp--custom--course-theme-variation', defined in Course theme's JSON files.
	// 3. "\s*": Matches zero or more whitespace characters.
	// 4. ":": Matches the colon you write to separate the CSS property name and property value.
	// 5. "\s*": Matches zero or more whitespace characters after the colon.
	// 6. "([^;]+)": This is a capturing group that matches one or more characters that are not a semicolon. It captures the value of the property.
	// 7. "/": The closing delimiter of the regex pattern.
	// Overall, this regex is designed to extract the value associated with a specific CSS property (defined in $property_name).
	$pattern = "/$property_name\s*:\s*([^;]+)/";

	$variation_name = 'default';

	if ( preg_match( $pattern, $css_string, $matches ) ) {
		// $matches[0] contains the full match.
		// $matches[1] contains the CSS value for the specified property.
		$css_value      = trim( $matches[1] );
		$variation_name = $css_value;
		$class_value    = 'is-' . $css_value;

		if ( $is_array ) {
			$classes[] = $class_value;
		} else {
			$classes .= ' ' . $class_value;
		}
	}

	/**
	 * Action to perform variation specific tasks.
	 *
	 * @hook course_theme_variation_loaded Fires after determining which theme variation is loaded.
	 * @since 1.3.5
	 *
	 * @param string $variation_name Name of the variation.
	 */
	do_action( 'course_theme_variation_loaded', $variation_name );

	return $classes;
}

/**
 * Enqueue the specific stylesheet for the variation.
 *
 * @param string $variation_name The current theme variation.
 *
 * @since Course 1.3.5
 */
function enqueue_style_for_variation( $variation_name ) {
	if ( empty( $variation_name ) ) {
		return;
	}

	wp_enqueue_style( 'course-theme-variation-style', get_template_directory_uri() . '/assets/css/' . $variation_name . '.css', array(), wp_get_theme()->get( 'Version' ) );
}
