<?php
/**
 * 404 template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quadrat
 * @since 1.0.0
 */
get_header();

	// the header
	get_template_part( 'template-parts/header' );

	echo do_blocks( file_get_contents( get_stylesheet_directory() . '/block-template-parts/404.html' ) );

	// the footer
	echo do_blocks( file_get_contents( get_stylesheet_directory() . '/block-template-parts/footer.html' ) );

get_footer();
