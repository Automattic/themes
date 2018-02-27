<?php
/* Custom Colors: Affinity */

//Background
add_color_rule( 'bg', '#ffffff', array(
	array( 'body, .main-navigation.toggled > div', 'background-color' ),
) );

add_color_rule( 'txt', '#5e5853', array(
	//Contrast with background bg
	array( '.entry-title, .entry-title a, .entry-title a:visited', 'color', 'bg' ),
	array( 'h1, h2, h3, h4, h5, h6', 'color', 'bg' ),
	array( '.widget-title', 'color', 'bg' ),
	array( '.comment-author .fn a, .comment-author .fn a:visited', 'color', 'bg' ),
	array( '.affinity-front-page .no-featured-image .entry-title', 'color', 'bg' ),

	//Contrast with white background
	array( '.main-navigation ul ul a, .main-navigation ul ul a:visited', 'color', '#fff' ),

	//No contrast
	array( '.button:hover, .button:active, .button:focus, button:hover, #infinite-handle span:hover, button:active, #infinite-handle span:active, button:focus, #infinite-handle span:focus, input[type="button"]:hover, input[type="button"]:active, input[type="button"]:focus, input[type="reset"]:hover, input[type="reset"]:active, input[type="reset"]:focus, input[type="submit"]:hover, input[type="submit"]:active, input[type="submit"]:focus', 'background-color' ),
	array( '.button:hover, .button:active, .button:focus, button:hover, #infinite-handle span:hover, button:active, #infinite-handle span:active, button:focus, #infinite-handle span:focus, input[type="button"]:hover, input[type="button"]:active, input[type="button"]:focus, input[type="reset"]:hover, input[type="reset"]:active, input[type="reset"]:focus, input[type="submit"]:hover, input[type="submit"]:active, input[type="submit"]:focus', 'outline-color' ),
	array( '.button:hover, .button:focus, .button:active', 'outline-color' ),

),
__( 'Headings' ) );

add_color_rule( 'link', '#99908a', array(
	//Contrast with background bg
	array( 'a, a:visited', 'color', 'bg' ),
	array( '.post-navigation .title', 'color', 'bg' ),
	array( '.site-footer', 'color', 'bg' ),
	array( 'blockquote', 'color', 'bg' ),
	array( '.comment-navigation a:hover, .comment-navigation a:visited:hover, .posts-navigation a:hover, .posts-navigation a:visited:hover, .post-navigation a:hover, .post-navigation a:visited:hover', 'color', 'bg' ),
	array( '.site-description a, .site-description a:visited', 'color', 'bg' ),

	//Contrast with white background
	array( '.main-navigation ul ul a:hover, .main-navigation ul ul a.focus', 'color', '#fff' ),
	array( '.main-navigation ul ul li:hover > a:visited, .main-navigation ul ul li.focus > a:visited', 'color', '#fff' ),

	//Contrast with darker footer bg
	array( '.footer-widgets a, .footer-widgets a:visited', 'color', '#000' ),

	//No contrast
	array( '.button, button, #infinite-handle span, input[type="button"], input[type="reset"], input[type="submit"]', 'outline-color' ),
	array( '.button, button, #infinite-handle span, input[type="button"], input[type="reset"], input[type="submit"]', 'background-color' ),
	array( 'input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="number"]:focus, input[type="tel"]:focus, input[type="range"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="time"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="color"]:focus, textarea:focus', 'border-color' ),
),
__( 'Links' ) );


//Unused
add_color_rule( 'fg1', '#ffffff', array(
) );

add_color_rule( 'fg2', '#ffffff', array(
) );


//Extra rules
add_color_rule( 'extra', '#ffffff', array(

	//Contrast with txt
	array( '.button:hover, .button:active, .button:focus, button:hover, #infinite-handle span:hover, button:active, #infinite-handle span:active, button:focus, #infinite-handle span:focus, input[type="button"]:hover, input[type="button"]:active, input[type="button"]:focus, input[type="reset"]:hover, input[type="reset"]:active, input[type="reset"]:focus, input[type="submit"]:hover, input[type="submit"]:active, input[type="submit"]:focus', 'color', 'txt' ),
	array( '.button:hover, .button:active, .button:focus, button:hover, #infinite-handle span:hover, button:active, #infinite-handle span:active, button:focus, #infinite-handle span:focus, input[type="button"]:hover, input[type="button"]:active, input[type="button"]:focus, input[type="reset"]:hover, input[type="reset"]:active, input[type="reset"]:focus, input[type="submit"]:hover, input[type="submit"]:active, input[type="submit"]:focus', 'border-color', 'txt' ),
	array( '#infinite-handle span button:hover, #infinite-handle span button:focus, #infinite-handle span button:active', 'color', 'txt' ),
	array( '#infinite-handle span:hover button, #infinite-handle span:focus button, #infinite-handle span:active button', 'color', 'txt' ),

	//Contrast with link
	array( '.button, button, #infinite-handle span, #infinite-handle span button, input[type="button"], input[type="reset"], input[type="submit"]', 'color', 'link' ),
	array( '.button, button, #infinite-handle span, input[type="button"], input[type="reset"], input[type="submit"]', 'border-color', 'link' ),

	//Contrast with dark background
	array( '.menu-toggle', 'color', '#000' ),
) );

//Main text color
add_color_rule( 'extra', '#5e5853', array(
	array( 'body, button, #infinite-handle span, input, select, textarea', 'color', 'bg' ),
	// Input nackgrounds to not background color.
	array( 'label', 'color', '#ffffff' ),
	array( '.site-footer .sep', 'color', 'bg' ),
	array( '.page-links', 'color', 'bg' ),
) );

//Link hovers
add_color_rule( 'extra', '#383e44', array(
	array( 'a:hover, a:focus, a:active', 'color', 'bg' ),
	array( '.entry-meta a:hover, .entry-meta a:focus, .entry-meta a:active', 'color', 'bg' ),
	array( '.entry-meta', 'color', 'bg' ),
	array( '.entry-footer', 'color', 'bg' ),
	array( '.comment-navigation a, .comment-navigation a:visited, .posts-navigation a, .posts-navigation a:visited, .post-navigation a, .post-navigation a:visited', 'color', 'bg' ),
) );

//Borders
add_color_rule( 'extra', '#e8e9ea', array(
	array( '.comment-navigation, .posts-navigation, .post-navigation', 'border-color', 0.4 ),
	array( '.entry-meta', 'border-color', 0.5 ),
	array( '#secondary .widget', 'border-color', 0.4 ),
	array( '.widget-title', 'border-color', 0.4 ),
	array( '.widget div > ul li, .widget > ul li', 'border-color', 0.5 ),
	array( '.hentry', 'border-color', 0.5 ),
	array( '.page-links', 'border-color', 0.4 ),
	array( 'td, th', 'border-color', 0.5 ),
	array( '.page-header', 'border-color', 0.5 ),
	array( 'blockquote', 'border-color', 0.5 ),
	array( '.comment-body', 'border-color', 0.5 ),
	array( '.entry-meta, .comment-meta', 'border-color', 0.5 ),
	array( 'input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea', 'border-color', 0.4 ),

	//Contrast with dark footer widgets background
	array( '.footer-widgets .widget-title', 'color', '#000' ),
	array( '.footer-widgets', 'color', '#000' ),
	array( '.site-title a, .site-title a:visited', 'color', '#000' ),
) );

//Extra CSS
function affinity_extra_css() { ?>

	@media screen and ( min-width: 46em ) {
		.site-description a,
		.site-description a:visited {
			color: white !important;
		}
		.main-navigation.toggled > div {
			background: transparent !important;
		}
	}

<?php }
add_theme_support( 'custom_colors_extra_css', 'affinity_extra_css' );


//Additional palettes

add_color_palette( array(
	'#f7f7f7',
	'#2d3838',
	'#357c7c',
), 'Blue' );

add_color_palette( array(
	'#474747',
	'#eaeaea',
	'#cbe86b',
), 'Dark Lime' );

add_color_palette( array(
	'#f5eee9',
	'#a39c8e',
	'#44749d',
), 'Vintage Blue' );

add_color_palette( array(
	'#f4f2f0',
	'#4a6e90',
	'#ac4a00',
), 'Vintage Red' );

add_color_palette( array(
	'#f2f2f2',
	'#727272',
	'#bb512a',
), 'Orange' );

add_color_palette( array(
	'#3f3f3f',
	'#d8d8d8',
	'#dad88a',
), 'Dark Yellow' );