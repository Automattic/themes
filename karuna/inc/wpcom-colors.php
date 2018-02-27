<?php
/* Custom Colors: Karuna */

//Background
add_color_rule( 'bg', '#ffffff', array(
	array( 'body, .sticky-wrapper, .site-info', 'background-color' ),
) );

//Purple
add_color_rule( 'txt', '#6636cc', array(

	//No contrast
	array( '.main-navigation ul ul,
			.footer-widgets-wrapper,
			.site-footer,
			.top-bar', 'background-color' ),

	//Contrast against background bg
	array( '#infinite-handle span,
			.button,
			button,
			input[type="button"],
			input[type="color"]:focus,
			input[type="date"]:focus,
			input[type="datetime"]:focus,
			input[type="datetime-local"]:focus,
			input[type="email"]:focus,
			input[type="month"]:focus,
			input[type="number"]:focus,
			input[type="password"]:focus,
			input[type="range"]:focus,
			input[type="reset"],
			input[type="search"]:focus,
			input[type="submit"],
			input[type="tel"]:focus,
			input[type="text"]:focus,
			input[type="time"]:focus,
			input[type="url"]:focus,
			input[type="week"]:focus,
			textarea:focus,
			.jetpack-recipe-title', 'border-color', 'bg' ),

	array( '#infinite-handle span,
			.button,
			.comment-navigation a,
			.comment-navigation a:visited,
			.post-navigation a,
			.post-navigation a:visited,
			.posts-navigation a,
			.posts-navigation a:visited,
			a,
			a:visited,
			button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"]', 'color', 'bg' ),
),
__( 'Links' ) );

//Green
add_color_rule( 'link', '#85cc36', array(

	//Contrast with background bg
	array( '.header-widget-area', 'background-color' ),
	array( '#infinite-handle span:active,
			#infinite-handle span:focus,
			#infinite-handle span:hover,
			.button:active,
			.button:focus,
			.button:hover,
			button:active,
			button:focus,
			button:hover,
			input[type="button"]:active,
			input[type="button"]:focus,
			input[type="button"]:hover,
			input[type="reset"]:active,
			input[type="reset"]:focus,
			input[type="reset"]:hover,
			input[type="submit"]:active,
			input[type="submit"]:focus,
			input[type="submit"]:hover', 'border-color', 'bg' ),

	array( '#infinite-handle span:active,
			#infinite-handle span:focus,
			#infinite-handle span:hover,
			.button:active,
			.button:focus,
			.button:hover,
			.comment-navigation a:hover,
			.comment-navigation a:visited:hover,
			.entry-title a:focus,
			.entry-title a:hover,
			.post-navigation a:hover,
			.post-navigation a:visited:hover,
			.posts-navigation a:hover,
			.posts-navigation a:visited:hover,
			a:active,
			a:focus,
			a:hover,
			button:active,
			button:focus,
			button:hover,
			input[type="button"]:active,
			input[type="button"]:focus,
			input[type="button"]:hover,
			input[type="reset"]:active,
			input[type="reset"]:focus,
			input[type="reset"]:hover,
			input[type="submit"]:active,
			input[type="submit"]:focus,
			input[type="submit"]:hover', 'color', 'bg' ),
),
__( 'Secondary Accent' ) );

add_color_rule( 'fg1', '#333333', array(
	array( 'h1, h2, h3, h4, h5, h6,
			.site-title a,
			.site-title a:visited,
			.entry-title,
			.page-title,
			.entry-title a,
			.entry-title a:visited,
			.widget-title,
			.widget-title a,
			.widget-title a:visited', 'color', 'bg' ),
),
__( 'Headings' ) );

add_color_rule( 'fg2', '#ffffff', array(

) );


//Extra rules
add_color_rule( 'extra', '#ffffff', array(

	//Contrast with green link
	array( '.header-widget-area,
			.header-widget-area #infinite-handle span,
			.header-widget-area .button,
			.header-widget-area a,
			.header-widget-area a:visited,
			.header-widget-area a:hover,
			.header-widget-area a:focus,
			.header-widget-area button,
			.header-widget-area input[type="button"],
			.header-widget-area input[type="reset"],
			.header-widget-area input[type="submit"]', 'color', 'link', 2 ),

	array( '.header-widget-area .button,
			.header-widget-area button,
			.header-widget-area input[type="button"],
			.header-widget-area input[type="reset"],
			.header-widget-area input[type="submit"]', 'border-color', 'link', 2 ),

	array( '.header-widget-area .widget-title,
			.header-widget-area .widget-title a,
			.header-widget-area .widget-title a:visited', 'color', 'link', 2 ),

	//Contrast with purple txt
	array( '.main-navigation ul ul a,
			.main-navigation ul ul a:focus,
			.main-navigation ul ul a:hover,
			.main-navigation ul ul a:visited,
			.main-navigation ul ul a:visited:focus,
			.main-navigation ul ul a:visited:hover,
			.footer-widgets-wrapper,
			.footer-widgets-wrapper a,
			.footer-widgets-wrapper a:visited,
			.footer-widgets-wrapper a:hover,
			.footer-widgets-wrapper a:focus,
			.footer-widgets-wrapper button,
			.footer-widgets-wrapper button:hover,
			.footer-widgets-wrapper button:focus,
			.footer-widgets-wrapper input[type="button"],
			.footer-widgets-wrapper input[type="button"]:hover,
			.footer-widgets-wrapper input[type="button"]:focus,
			.footer-widgets-wrapper input[type="reset"],
			.footer-widgets-wrapper input[type="reset"]:hover,
			.footer-widgets-wrapper input[type="reset"]:focus,
			.footer-widgets-wrapper input[type="submit"],
			.footer-widgets-wrapper input[type="submit"]:hover,
			.footer-widgets-wrapper input[type="submit"]:focus,
			.footer-widgets-wrapper .button,
			.footer-widgets-wrapper .button:hover,
			.footer-widgets-wrapper .button:focus,
			.site-footer,
			.top-bar,
			.top-bar a,
			.top-bar a:visited,
			.top-bar a:hover,
			.top-bar a:focus', 'color', 'txt', 2 ),

	array( '.footer-widgets-wrapper .widget-title,
			.footer-widgets-wrapper .widget-title a,
			.footer-widgets-wrapper .widget-title a:visited,
			.footer-widgets-wrapper .widget-title a:hover,
			.footer-widgets-wrapper .widget-title a:focus', 'color', 'txt', 2 ),

	array( '.footer-widgets-wrapper button,
			.footer-widgets-wrapper button:hover,
			.footer-widgets-wrapper button:focus,
			.footer-widgets-wrapper input[type="button"],
			.footer-widgets-wrapper input[type="button"]:hover,
			.footer-widgets-wrapper input[type="button"]:focus,
			.footer-widgets-wrapper input[type="reset"],
			.footer-widgets-wrapper input[type="reset"]:hover,
			.footer-widgets-wrapper input[type="reset"]:focus,
			.footer-widgets-wrapper input[type="submit"],
			.footer-widgets-wrapper input[type="submit"]:hover,
			.footer-widgets-wrapper input[type="submit"]:focus,
			.footer-widgets-wrapper .button,
			.footer-widgets-wrapper .button:hover,
			.footer-widgets-wrapper .button:focus', 'border-color', 'txt', 2 ),
) );

add_color_rule( 'extra', '#333333', array(
	array( 'body,
			.main-navigation a,
			.main-navigation a:visited,
			.main-navigation a:hover,
			.main-navigation a:focus,
			.main-navigation a:visited:hover,
			.main-navigation a:visited:focus,
			.main-navigation .current_page_item > a,
			.main-navigation .current-menu-item > a,
			.main-navigation .current_page_ancestor > a,
			.main-navigation .current-menu-ancestor > a', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#999999', array(
	array( '.entry-meta,
			.entry-footer,
			.entry-meta a,
			.entry-footer a,
			.entry-meta a:visited,
			.entry-footer a:visited,
			.entry-author .author-title', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#dddddd', array(
	array( '.comment-navigation,
			.posts-navigation,
			.post-navigation', 'border-color', 0.25 ),
) );

//Extra CSS
function karuna_extra_css() { ?>
	@media screen and ( max-width: 767px ) {
		.main-navigation ul ul {
			background-color: transparent !important;
		}
		.main-navigation ul ul a {
			color: inherit !important;
		}
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'karuna_extra_css' );


//Additional palettes

add_color_palette( array(
	'#f6f4ee',
	'#524656',
	'#cf4647',
	'#333333',
), 'Vintage' );

add_color_palette( array(
	'#444444',
	'#005f6b',
	'#005f6b',
	'#ffffff',
), 'Dark Blue' );

add_color_palette( array(
	'#ffffff',
	'#bc2929',
	'#565e71',
	'#565e71',
), 'Vintage 2' );

add_color_palette( array(
	'#ffffff',
	'#f38148',
	'#038d9f',
	'#222222',
), 'Orange' );

add_color_palette( array(
	'#f8f6f6',
	'#f76868',
	'#78c3a1',
	'#666666',
), 'Pink Mint' );

add_color_palette( array(
	'#555555',
	'#333333',
	'#333333',
	'#ffffff',
), 'Dark Gray' );
