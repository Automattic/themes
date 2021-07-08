<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Quadrat
 * @since 1.0.0
 */
get_header();

	echo gutenberg_block_template_part( '404' );

get_footer();
