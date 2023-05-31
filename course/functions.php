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
		wp_enqueue_script( 'course-header', get_template_directory_uri() . '/assets/js/header.js', [], wp_get_theme()->get( 'Version' ), true );
		wp_enqueue_style( 'course-style' );

		/**
		 * Temporary Hook to skip the learning mode style when the Sensei LMS is able to provide it.
		 * It is only used to continue loading the deprecated styles if a old sensei version is installed.
		 */
		$use_deprecated_style = apply_filters( 'course_learning_mode_load_styles', true );
		
		if ( class_exists( 'Sensei_Main' ) && $use_deprecated_style  ) {
			wp_register_style( 'course-sensei-learning-mode', get_stylesheet_directory_uri() . '/learning-mode.css', array(), wp_get_theme()->get( 'Version' ) );
			wp_enqueue_style( 'course-sensei-learning-mode' );
		}

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
		[ 'label' => 'Sensei LMS' ]
	);
}

add_action( 'init', 'course_register_block_patterns_category' );

