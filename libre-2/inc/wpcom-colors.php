<?php
/* Custom Colors: Libre 2.0 */

//Background
add_color_rule( 'bg', '#ffffff', array(
	array( 'body, .sticking .site-header, .main-navigation ul ul, .widget_archive a, .widget_categories a, .widget .post-count', 'background-color' ),
	array( '.custom-background .site', 'background-color' ),
	array( 'input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"]', 'background-color' ),
) );

add_color_rule( 'txt', '#404040', array(
	array( 'body, a, a:visited, a:hover, a:active, a:focus', 'color', 'bg' ),
	array( '#infinite-footer .blog-info a, #infinite-footer .blog-credits a', 'color', 'bg' ),
	array( 'hr', 'background-color', 'bg' ),
	array( '.site *', 'border-color', 'bg' ),
	array( 'button, input[type="button"], input[type="reset"], input[type="submit"], #infinite-handle span', 'color', 'bg' ),
	array( 'input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"]', 'color', 'bg' ),
	array( 'body.highlander-light h3.sd-title:before', 'border-color', 'bg' ),
),
__( 'Primary Color' ) );

add_color_rule( 'link', '#404040', array(
	array( '.site-title a, .site-title a:hover, .site-title a:visited', 'color', 'bg', 3 ),
	array( 'h1, h2, h3, h4, h5, h6, .entry-title, .entry-title a:visited, .entry-title a, .page-title, .entry-title a:hover', 'color', 'bg', 3 ),
),
__( 'Headings' ) );

//Additional palettes

add_color_palette( array(
    '#444444',
    '#fefefe',
    '#fefefe',
), 'Dark Gray' );

add_color_palette( array(
    '#ffffff',
    '#999999',
    '#f69592',
), 'Pink' );

add_color_palette( array(
    '#ede6dd',
    '#5e4f40',
    '#438d8d',
), 'Beige' );

add_color_palette( array(
    '#333333',
    '#ededed',
    '#e7af4f',
), 'Dark Orange' );

add_color_palette( array(
    '#2e7897',
    '#ffffff',
    '#afc9d4',
), 'Blue' );

add_color_palette( array(
    '#e7edea',
    '#4e6766',
    '#fb0c06',
), 'Gray and Red' );
