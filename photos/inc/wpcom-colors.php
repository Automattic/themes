<?php
/* Custom Colors: Photos */

//#fff White content background color
add_color_rule( 'bg', '#fff', array(

	//No contrast
	array( 'body', 'background-color' ), //body background
	array( '.infinite-container', 'background-color' ), //infinite footer background

) );

//Red main accent, used for links, headings, and buttons
add_color_rule( 'link', '#d63031', array(

	//No contrast
	array( 'mark,
			ins,
			.nav-links .arrow a:hover,
			.widget_blog_subscription input[type="submit"]:active,
			.widget_blog_subscription input[type="submit"]:focus,
			.widget_blog_subscription input[type="submit"]:hover,
			.milestone-widget .milestone-header,
			.site-main .post-no-thumbnail,
			div#jp-relatedposts div.jp-relatedposts-post-nothumbs a.jp-relatedposts-post-a,
			.comment-reply-link:focus,
			.comment-reply-link:hover,
			.comment-form .submit:focus,
			.comment-form .submit:hover,
			.bypostauthor > .comment-body .fn,
			#infinite-handle span button:focus,
			#infinite-handle span button:hover', 'background-color' ),

	array( 'blockquote', 'border-color' ),

	//Needs contrast against bg (content background color)
	array( 'a,
			a:visited,
			.required,
			.nav-links a:hover,
			.nav-links a:active,
			.screen-reader-text:focus,
			.widget_blog_subscription input[type="submit"],
			.comment-reply-link,
			.comment-form .submit,
			.main-navigation .menu-toggle span', 'color', 'bg'),

	//Needs contrast against #fff (white header background color)
	array( '.main-navigation a,
			.main-navigation .menu-toggle span', 'color', '#fff'),

	//Needs contrast against #f0f0f0 (grey content background color)
	array( '#infinite-handle span button', 'color', '#f0f0f0' ),

	//Needs contrast against #fff (white header background color)
	array( '.main-navigation .icon,
			.main-navigation .menu-toggle .icon', 'fill', '#fff' ),

	//Needs contrast against bg (content background color)
	array( '.site-main .post-no-thumbnail:focus,
			.site-main .post-no-thumbnail:hover', 'background-color', '-1' ),

	//Needs contrast against #f0f0f0 (grey content background color)
	array( '.main-navigation .menu-toggle:hover .icon, .nav-links .icon, .comment-reply-link .icon', 'fill', '#f0f0f0' ),

),
__( 'Links and Buttons' ) );

add_color_rule( 'extra', '#ffffff', array(

	//Contrast against red background (txt)
	array( '.nav-links a:hover .icon', 'fill', 'link' ),

) );

add_color_rule( 'fg1', '#606060', array(

	//Contrast against #fff (white content background color)
	array( 'button:active,
			button:focus,
			input[type="button"]:active,
			input[type="button"]:focus,
			input[type="reset"]:active,
			input[type="reset"]:focus,
			input[type="submit"]:active,
			input[type="submit"]:focus,
			input[type="text"]:focus,
			input[type="email"]:focus,
			input[type="url"]:focus,
			input[type="password"]:focus,
			input[type="search"]:focus,
			input[type="number"]:focus,
			input[type="tel"]:focus,
			input[type="range"]:focus,
			input[type="date"]:focus,
			input[type="month"]:focus,
			input[type="week"]:focus,
			input[type="time"]:focus,
			input[type="datetime"]:focus,
			input[type="datetime-local"]:focus,
			input[type="color"]:focus,
			textarea:focus', 'border-color' ),

	//Needs contrast against bg
	array( '.nav-links .nav-meta,
			.entry-footer,
			.entry-footer span a,
			.page-links,
			.comment-meta,
			.comment-meta a,
			.comment-body .comment-edit-link,
			.wp-caption-text,
			.gallery-caption', 'color', 'bg' ),

	//Needs contrast against #fff (white header background color)
	array( '.site-footer .container,
			.site-footer a,
			.site-description', 'color', '#fff' ),

	//Needs contrast against #f0f0f0 (grey background color)
	array( '.search-form .search-submit .icon', 'fill', '#f0f0f0' ),

) );

add_color_rule( 'fg2', '#dcdcdc', array(

	//Contrast against bg (content background color)
	array( 'table,
			th,
			td,
			button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"],
			input[type="text"],
			input[type="email"],
			input[type="url"],
			input[type="password"],
			input[type="search"],
			input[type="number"],
			input[type="tel"],
			input[type="range"],
			input[type="date"],
			input[type="month"],
			input[type="week"],
			input[type="time"],
			input[type="datetime"],
			input[type="datetime-local"],
			input[type="color"],
			textarea,
			select,
			.main-navigation .menu-toggle,
			.nav-links .current,
			.page-links,
			.entry-footer,
			.comments-area,
			.nav-links,
			.widget-area,
			.search-form .search-field', 'border-color', 'bg', 5 ),

	//Contrast against bg (content background color)
	array( '.widget ul, .widget li', 'border-color', 'bg', 1 ),
) );

add_color_rule( 'txt', '#111', array(

	//Contrast against bg (content background color)
	array( 'h1,
			h2,
			h3,
			h4,
			h5,
			h6,
			body,
			.entry-title,
			.page-title,
			.nav-links a,
			a:hover,
			a:focus,
			a:active,
			.main-navigation .current_page_item > a,
			.main-navigation .current-menu-item > a,
			.main-navigation .current-menu-parent > a', 'color', 'bg' ),

	//Contrast against #fff (white background color)
	array( '.site-title a,
			.main-navigation a:hover,
			.main-navigation a:focus,
			.main-navigation a:active,
			button,
			input,
			select,
			optgroup,
			textarea,
			input[type="text"]:focus,
			input[type="email"]:focus,
			input[type="url"]:focus,
			input[type="password"]:focus,
			input[type="search"]:focus,
			input[type="number"]:focus,
			input[type="tel"]:focus,
			input[type="range"]:focus,
			input[type="date"]:focus,
			input[type="month"]:focus,
			input[type="week"]:focus,
			input[type="time"]:focus,
			input[type="datetime"]:focus,
			input[type="datetime-local"]:focus,
			input[type="color"]:focus,
			textarea:focus', 'color', '#fff' ),

	array( '.main-navigation .current_page_item > a .icon,
			.main-navigation .current-menu-item > a .icon,
			.main-navigation .current-menu-parent > a .icon', 'fill', 'bg' ),

	array( 'blockquote *', 'color', '#f0f0f0' ),

),
__( 'Headings' ) );
