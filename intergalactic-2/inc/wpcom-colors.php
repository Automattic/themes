<?php
/* Custom Colors: Intergalactic 2 */

//Background
add_color_rule( 'bg', '#ffffff', array(
	array( 'body, .entry-content-wrapper', 'background-color' ),
) );

add_color_rule( 'txt', '#81699b', array(
	array( '.entry-content a,
			.entry-content a:visited', 'color', 'bg' ),

	array( 'a, a:visited', 'color', 'bg' ),

	array( '.entry-author a,
			.entry-author a:visited', 'color', '#000' ),

	array( '#infinite-handle span', 'background-color' ),
),
__( 'Links' ) );

add_color_rule( 'link', '#000000', array(
	array( '.singular .entry-content h1, .singular .entry-content h2, .singular .entry-content h3, .singular .entry-content h4, .singular .entry-content h5, .singular .entry-content h6', 'color', 'bg' ),
	array( '.singular .entry-content a:hover, .singular .entry-content a:active', 'color', 'bg' ),
	array( '.widget-title', 'color', '#222' ),
),
__( 'Headings' ) );

// Body text
add_color_rule( 'extra', '#000000', array(
	array( 'body', 'color', 'bg' ),
	array( 'mark, ins', 'color', '#fff9c0' ),
	array( 'pre', 'color', '#eee' ),
	array( '.singular .entry-content th', 'border-color', 0.2 ),
	array( '.entry-tags .heading, .entry-categories .heading', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#aaaaaa', array(
	array( '.singular .entry-content td, .comment-body', 'border-color', 0.2 ),
) );

add_color_rule( 'extra', '#767676', array(
	array( 'a.comment-reply-link, a.comment-reply-link:visited, .comment-metadata, .comment-metadata a, .comment-metadata a:visited, .singular .entry-content blockquote, .singular .entry-meta, .entry-meta a, .entry-meta a:visited, .entry-footer a, .entry-footer a:visited, .site-description', 'color', 'bg' ),
) );


add_color_rule( 'extra', '#ffffff', array(
	array( '.entry-content a.more-link, .entry-content a.more-link:visited', 'color', '#222' ),
	array( '.main-navigation a,
			.main-navigation a:visited', 'color', '#222' ),
	array( '#infinite-handle span', 'color', 'txt' ),
) );

add_color_rule( 'extra', '#222222', array(
	array( 'button, input[type="button"], input[type="reset"], input[type="submit"]', 'border-color', 'bg' ),
	array( '.menu-toggle, .menu-toggle:hover, .menu-toggle:focus, .menu-toggle:active', 'border-color', 'bg' ),

	array( '.menu-toggle:hover, .menu-toggle:focus, .menu-toggle:active', 'color', 'bg' ),
	array( '.menu-toggle.x.toggle-on .lines:before, .menu-toggle.x.toggle-on .lines:after', 'background-color', '#222' ),

	array( 'button, input[type="button"], input[type="reset"], input[type="submit"]', 'color', 'bg' ),
	array( '.lines, .lines:before, .lines:after', 'background-color', 'bg' ),
	array( '.comment-author .fn a, .comment-author .fn a:visited', 'color', 'bg' ),
	array( '.search .site-title a, .search .site-title a:visited, .search .site-title a:hover, .archive .site-title a, .archive .site-title a:visited, .archive .site-title a:hover, .blog .site-title a, .blog .site-title a:visited, .blog .site-title a:hover, .page:not(.singular) .site-title a, .page:not(.singular) .site-title a:visited, .page:not(.singular) .site-title a:hover', 'color', 'bg' ),

	array( '.entry-content a.more-link:hover, .entry-content a.more-link:active, .entry-content a.more-link:focus', 'color', '#fff' ),
) );

// Colour Palettes
add_color_palette( array(
	'#a84767',
	'#ffdd93',
	'#ffffff'
), esc_html__( 'Purple' ) );

add_color_palette( array(
	'#9be5d9',
	'#ef426f',
	'#0c5e5e',
), esc_html__( 'Green' ) );

add_color_palette( array(
	'#e8c868',
	'#444444',
	'#111111',
),
esc_html__( 'Yellow' ) );

add_color_palette( array(
	'#ffffff',
	'#d6771e',
	'#111111',
),
esc_html__( 'Orange' ) );

add_color_palette( array(
	'#282828',
	'#d1e751',
	'#d1e751',
),
esc_html__( 'Dark' ) );

add_color_palette( array(
	'#ffffff',
	'#71b4b5',
	'#18282a',
),
esc_html__( 'Blue' ) );