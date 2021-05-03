<?php
/**
 * Template file for rendering a single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quadrat
 * @since 1.0.0
 */
get_header();

	// the header
	get_template_part( 'template-parts/header' );

	echo gutenberg_block_template_part( 'single' );

	// the footer
	echo gutenberg_block_template_part( 'footer' );

get_footer();
