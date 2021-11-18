<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blockbase
 * @since 1.2.9
 */
get_header();

// the query
if ( function_exists( 'block_template_part' ) ) {
	echo block_template_part( 'index' );
} else {
	echo gutenberg_block_template_part( 'index' );
}

get_footer();
