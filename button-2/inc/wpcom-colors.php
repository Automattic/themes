<?php
/* Custom Colors: Button 2 */

//Background
add_color_rule( 'bg', '#f8f8f8', array(
	array( 'body', 'background-color' ),
) );

add_color_rule( 'txt', '#f78769', array(
	array( '#infinite-handle span button:active,
			#infinite-handle span button:focus,
			#infinite-handle span button:hover,
			#infinite-handle span:hover button,
			.flex-control-paging li a.flex-active,
			.flex-control-paging li a:hover,
			.jetpack-social-navigation ul a:hover,
			.tags-links a:hover,
			.widget_tag_cloud a:hover,
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
			input[type="submit"]:hover,
			.page-links span.active-link,
			.page-links a:hover span.active-link', 'background-color' ),
	array( '.bypostauthor > .comment-body:first-of-type .comment-author .avatar,
			input[type="email"]:focus,
			input[type="password"]:focus,
			input[type="search"]:focus,
			input[type="text"]:focus,
			input[type="url"]:focus,
			textarea:focus', 'border-color' ),
	array( '.tags-links a:hover:after,
			.widget_tag_cloud a:hover:after', 'border-left-color' ),
	array( '.tags-links a:hover:before,
			.widget_tag_cloud a:hover:before', 'border-top-color' ),
	array( '.tags-links a:hover:before,
			.widget_tag_cloud a:hover:before,
			abbr,
			acronym', 'border-bottom-color' ),
	array( '#infinite-handle span button:active,
			#infinite-handle span button:focus,
			#infinite-handle span button:hover,
			#infinite-handle span:hover button,
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
			input[type="submit"]:hover', 'outline-color' ),

	//Contrast against white content background
	array( '#infinite-footer .container a:hover,
			.comment-meta .comment-metadata a:hover,
			.entry-footer a:hover,
			.entry-meta a:hover,
			.required,
			.site-footer a:hover,
			.site-title a,
			.site-title a:visited,
			a,
			a.more-link,
			a.more-link:hover,
			a:visited', 'color', '#ffffff', 2 ),

	array( '.main-navigation .current-menu-item > a,
			.main-navigation .current_page_ancestor > a,
			.main-navigation .current_page_item > a,
			.main-navigation a:hover,
			.main-navigation a:visited:hover', 'color', '#ffffff', 2 ),


),
__( 'Main Accent' ) );

add_color_rule( 'link', '#ffffff', array(
) );

add_color_rule( 'fg1', '#ffffff', array(
) );

add_color_rule( 'fg2', '#ffffff', array(
) );


//Extra rules
add_color_rule( 'extra', '#ffffff', array(
	array( '#infinite-handle span button:active,
			#infinite-handle span button:focus,
			#infinite-handle span button:hover,
			#infinite-handle span:hover button,
			.flex-control-paging li a.flex-active,
			.flex-control-paging li a:hover,
			.jetpack-social-navigation ul a:hover,
			.tags-links a:hover,
			.widget_tag_cloud a:hover,
            .button:active,
            .button:focus,
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
			input[type="submit"]:hover,
			.page-links span.active-link,
			.page-links a:hover span.active-link', 'color', 'txt' ),
) );


//Additional palettes

add_color_palette( array(
    '#eeeeee',
    '#84ad9b',
), 'Light Green' );

add_color_palette( array(
    '#f8f8f8',
    '#5192a8',
), 'Blue' );

add_color_palette( array(
    '#f2ecec',
    '#fbcfd5',
), 'Pink' );

add_color_palette( array(
    '#a0a295',
    '#59554e',
), 'Dark Gray' );

add_color_palette( array(
	'#8ca1a5',
	'#c62c1e'
), 'Red and Blue' );

add_color_palette( array(
	'#f7edd3',
	'#ed9339'
), 'Orange' );
