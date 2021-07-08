<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Quadrat
 * @since 1.0.0
 */
get_header();

echo gutenberg_block_template_part( 'search' );

get_footer();
