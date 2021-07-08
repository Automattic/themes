<?php
/**
 * Template file for rendering a single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Quadrat
 * @since 1.0.0
 */
get_header();

echo gutenberg_block_template_part( 'single' );

get_footer();
