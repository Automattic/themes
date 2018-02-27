<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Rebalance
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rebalance_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of hfeed to non-singular pages.
	$header_image = get_header_image();
	if ( ! empty( $header_image ) ) {
		$classes[] = 'has-custom-header';
	}

	return $classes;
}
add_filter( 'body_class', 'rebalance_body_classes' );

/**
 * Shorten Excerpt Length
 */
function rebalance_excerpt_length() {
	return 20;
}
add_filter( 'excerpt_length', 'rebalance_excerpt_length', 999 );

/**
 * Add ellipses to excerpts
 */
function rebalance_excerpt_more() {
	if ( is_home() ) {
		return '&hellip;';
	} else {
		return ' &hellip; <a class="more-link" href="' . esc_url( get_permalink() ) . '">' . esc_html__( 'More', 'rebalance' ) . '</a>';
	}
}
add_filter( 'excerpt_more', 'rebalance_excerpt_more' );

/**
 * Add conditional classes to posts
 */
function rebalance_slug_post_classes( $classes ) {

	/**
	 * Adds clear fix to single posts
	 */
	if ( is_single() ) {
		$classes[] = 'clear-fix';
	}

	/**
	 * Use card display on archive and search pages
	 */
	if ( is_archive() || is_search() ) {
		$classes[] = 'card';
	}

	/*
	 * '.card' class not needed when using default page templates on front page
	 * - default page template conditional src: https://goo.gl/QOMYWP
	 */
	if ( ( is_page() && ! is_page_template() ) && is_front_page() ) {
		$classes[] = '';
	} elseif ( is_page_template( 'portfolio-page.php' ) ) {
		$classes[] = 'card';
	} elseif ( ( is_home() && ! is_page_template() ) || ( is_front_page() && ! is_page_template() ) ) {
		$classes[] = 'card';
	} else {
		$classes[] = '';
	}

	return $classes;
}
add_filter( 'post_class', 'rebalance_slug_post_classes', 10, 3 );


add_filter( 'comment_form_default_fields', 'rebalance_comment_placeholders' );
/**
 * Change default fields, add placeholder and change type attributes.
 *
 * @param	array $fields
 * @return array
 */
function rebalance_comment_placeholders( $fields ) {
	$fields['author'] = str_replace(
		'<input',
		'<input placeholder="'
		/* Replace 'rebalance' with your theme?s text domain.
		 * I use _x() here to make your translators life easier. :)
		 * See http://codex.wordpress.org/Function_Reference/_x
		 */
		. esc_attr_x(
			'ex: jane doe',
			'comment form placeholder',
			'rebalance'
			)
		. '"',
		$fields['author']
	);
	$fields['email'] = str_replace(
		'<input',
		/* We use a proper type attribute to make use of the browser's
		 * validation, and to get the matching keyboard on smartphones.
		 */
		'<input type="email" placeholder="'. esc_attr_x( 'ex: janedoe@gmail.com', 'Email input placeholder text', 'rebalance' ) .'"',
		$fields['email']
	);
	$fields['url'] = str_replace(
		'<input',
		// Again: a better 'type' attribute value.
		'<input placeholder="' . esc_attr_x( 'ex: http://janedoe.wordpress.com', 'URL input placeholder text', 'rebalance' ) . '"',
		$fields['url']
	);

	return $fields;
}