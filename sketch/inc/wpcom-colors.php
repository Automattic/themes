<?php
/* Custom Colors: Sketch */

//Background
add_color_rule( 'bg', '#eeeeee', array(
	array( 'body', 'background-color' ),
) );

add_color_rule( 'txt', '#f68060', array(
	array( 'button:hover, button:focus, button:active, input[type="button"]:hover, input[type="button"]:focus, input[type="button"]:active, input[type="reset"]:hover, input[type="reset"]:focus, input[type="reset"]:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active', 'border-color' ),
	array( '.toggled .menu-toggle', 'border-color' ),

	array( '.toggled .menu-toggle', 'color', '#fff' ),
	array( 'button:hover, button:focus, button:active, input[type="button"]:hover, input[type="button"]:focus, input[type="button"]:active, input[type="reset"]:hover, input[type="reset"]:focus, input[type="reset"]:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active', 'color', '#fff' ),
	array( '.current_page_item a, .current-menu-item a', 'color', '#fff' ),
	array( '#infinite-handle span, .widget a, a, a:visited', 'color', '#fff' ),
	array( '.entry-title a:hover, .portfolio-entry-title a:hover', 'color', '#fff' ),
	array( '.site-footer a:hover', 'color', '#fff' ),
	array( '.page-template-portfolio-page-php .jetpack-portfolio:hover a, .project-navigation-wrapper .jetpack-portfolio:hover a, page-template-portfolio-template-php .jetpack-portfolio:hover a, body[class*="jetpack-portfolio"].archive .jetpack-portfolio:hover a', 'color', '#fff' ),
	array( 'a:hover, a:focus, a:active', 'color', '#fff' ),
	array( '.entry-footer a:hover, .entry-meta a:hover, .portfolio-entry-meta a:hover', 'color', '#fff' ),
	array( '.main-navigation li:hover > a', 'color', '#fff' ),
),
__( 'Main Accent' ) );

add_color_rule( 'link', '#ffffff', array(
) );

add_color_rule( 'fg1', '#ffffff', array(
) );

add_color_rule( 'fg2', '#ffffff', array(
) );

//Extra rules
add_color_rule( 'extra', '#333333', array(
	array( '.site-title a, .entry-title a, .portfolio-entry-title a', 'color', '#fff' ),
	array( '.site-title a:visited, .entry-title a:visited, .portfolio-entry-title a:visited', 'color', '#fff' ),
) );

add_color_rule( 'extra', '#999999', array(
	array( '.entry-footer a, .entry-meta a, .portfolio-entry-meta a, .main-navigation a', 'color', '#fff', 3 ),
	array( '.entry-footer a:visited, .entry-meta a:visited, .portfolio-entry-meta a:visited, .main-navigation a:visited', 'color', '#fff', 3 ),
) );

//Additional palettes

add_color_palette( array(
    '#444444',
    '#005f6b',
), 'Dark' );

add_color_palette( array(
    '#efefef',
    '#1bc9a7',
), 'Green' );

add_color_palette( array(
    '#909090',
    '#bd1818',
), 'Red' );

add_color_palette( array(
	'#efefef',
	'#1bacc9',
), 'Cyan' );

add_color_palette( array(
	'#cfe0e6',
	'#ea6161'
), 'Sky and Strawberry' );

add_color_palette( array(
	'#dacdae',
	'#1876bd',
), 'Tan and Blue' );