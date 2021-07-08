<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Quadrat
 * @since 1.0.0
 */
get_header();

	// the header
	get_template_part( 'template-parts/header' );

	echo gutenberg_block_template_part( 'page' );

	// the footer
	echo gutenberg_block_template_part( 'footer' );

get_footer();
