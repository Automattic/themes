<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Illustratr
 */

function illustratr_jetpack_setup() {

	/**
	 * Add theme support for Infinite Scroll.
	 * See: http://jetpack.me/support/infinite-scroll/
	 */
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'footer'         => 'page',
		'footer_widgets' => array( 'sidebar-1', ),
		'render'         => 'illustratr_infinite_scroll_render',
	) );

	/**
	 * Add theme support for Portfolio Custom Post Type.
	 */
	add_theme_support( 'jetpack-portfolio', array(
		'title'          => true,
		'content'        => true,
		'featured-image' => true,
	) );

	/**
	 * Add theme support for Logo upload.
	 */
	add_image_size( 'illustratr-logo', 400, 180 );
	add_theme_support( 'site-logo', array(
		'size' => 'illustratr-logo'
	) );
}
add_action( 'after_setup_theme', 'illustratr_jetpack_setup' );

/**
 * Define the code that is used to render the posts added by Infinite Scroll.
 *
 * Includes the whole loop. Used to include the correct template part for the Portfolio CPT.
 */
function illustratr_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();

		if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) {
			get_template_part( 'content', 'portfolio' );
		} else {
			get_template_part( 'content', get_post_format() );
		}
	}
}

/**
 * Return early if Site Logo is not available.
 */
function illustratr_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

/**
 * Portfolio Title.
 */
function illustratr_portfolio_title( $before = '', $after = '' ) {
	$jetpack_portfolio_title = get_option( 'jetpack_portfolio_title' );
	$title = '';

	if ( is_post_type_archive( 'jetpack-portfolio' ) ) {
		if ( isset( $jetpack_portfolio_title ) && '' != $jetpack_portfolio_title ) {
			$title = esc_html( $jetpack_portfolio_title );
		} else {
			$title = post_type_archive_title( '', false );
		}
	} elseif ( is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) {
		$title = single_term_title( '', false );
	}

	echo $before . $title . $after;
}

/**
 * Portfolio Content.
 */
function illustratr_portfolio_content( $before = '', $after = '' ) {
	$jetpack_portfolio_content = get_option( 'jetpack_portfolio_content' );

	if ( is_tax() && get_the_archive_description() ) {
		echo $before . get_the_archive_description() . $after;
	} else if ( isset( $jetpack_portfolio_content ) && '' != $jetpack_portfolio_content ) {
		$content = convert_chars( convert_smilies( wptexturize( wp_kses_post( $jetpack_portfolio_content ) ) ) );
		echo $before . $content . $after;
	}
}

/**
 * Portfolio Featured Image.
 */
function illustratr_portfolio_thumbnail( $before = '', $after = '' ) {
	$jetpack_portfolio_featured_image = get_option( 'jetpack_portfolio_featured_image' );

	if ( isset( $jetpack_portfolio_featured_image ) && '' != $jetpack_portfolio_featured_image ) {
		$featured_image = wp_get_attachment_image( (int) $jetpack_portfolio_featured_image, 'illustratr-featured-image' );
		echo $before . $featured_image . $after;
	}
}

/**
 * Filter Infinite Scroll text handle.
 */
function illustratr_portfolio_infinite_scroll_navigation( $js_settings ) {
	if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) {
		$js_settings[ 'text' ] = esc_js( esc_html__( 'Older projects', 'illustratr' ) );
	}

	return $js_settings;
}
add_filter( 'infinite_scroll_js_settings', 'illustratr_portfolio_infinite_scroll_navigation' );

/**
 * Load Jetpack scripts.
 */
function illustratr_jetpack_scripts() {
	if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) || is_page_template( 'page-templates/portfolio-page.php' ) ) {
		wp_enqueue_script( 'illustratr-portfolio', get_template_directory_uri() . '/js/portfolio.js', array( 'jquery', 'masonry' ), '20140325', true );
	}
	if ( is_singular() && 'jetpack-portfolio' == get_post_type() ) {
		wp_enqueue_script( 'illustratr-portfolio-single', get_template_directory_uri() . '/js/portfolio-single.js', array( 'jquery', 'underscore' ), '20140328', true );
	}
	if ( is_page_template( 'page-templates/portfolio-page.php' ) ) {
		wp_enqueue_script( 'illustratr-portfolio-page', get_template_directory_uri() . '/js/portfolio-page.js', array( 'jquery' ), '20140402', true );
	}
}
add_action( 'wp_enqueue_scripts', 'illustratr_jetpack_scripts' );
