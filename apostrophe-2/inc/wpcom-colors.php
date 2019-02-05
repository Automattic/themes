<?php
/* Custom Colors: Apostrophe 2 */

// Background
add_color_rule( 'bg', '#ffffff', array(
	array( 'body', 'background-color' ),
	array( '.infinite-container', 'background-color' ),
) );

// Primary accent color
add_color_rule( 'txt', '#117bb8', array(

  // Needs contrast against content background (opaque white)
  array( 'a, .main-navigation a:hover, .apostrophe-2-social li:hover a::before, .archive .entry-title a, .blog .entry-title a, .search .entry-title a,
		 .site-title a:hover',
		 'color', '#ffffff' ),

  // Primary sidebar background needs only enough contrast to stand out a smidge (from background)
  array( '.widget-area .sidebar-primary aside',
		  'background-color', '#ffffff', 1 ),

  // Links and tags should stand out a bit more, since they're smaller
  array( '.entry-meta .posted-on,
		  .entry-meta .byline,
		  .sticky .entry-meta,
		  .comment-reply-link,
		  .entry-footer a[rel="tag"],
		  #infinite-handle span', 'background-color', '#ffffff', 2 ),


  array( 'button,
		  input[type="button"],
		  input[type="reset"],
		  input[type="submit"]', 'color', '#ffffff' ),

  array( 'button,
		  input[type="button"],
		  input[type="reset"],
		  input[type="submit"],
		  .button-primary,
		  .button,
		  .button-secondary,
		  .apostrophe-2-navigation .current_page_item a,
		  .apostrophe-2-navigation .current-menu-item a,
		  .apostrophe-2-navigation .current-post-ancestor a,
		  .apostrophe-2-navigation .current-menu-ancestor a,
		  .apostrophe-2-navigation .current-menu-parent a,
		  .apostrophe-2-navigation .current-post-parent a', 'border-color', 2 ),

  array( 'input[type="text"]:focus,
		  input[type="email"]:focus,
		  input[type="url"]:focus,
		  input[type="password"]:focus,
		  input[type="search"]:focus,
		  textarea:focus', 'color' ),

  array( 'input[type="text"]:focus,
		  input[type="email"]:focus,
		  input[type="url"]:focus,
		  input[type="password"]:focus,
		  input[type="search"]:focus,
		  textarea:focus', 'border-color' ),

  array( '.sidebar-primary button,
		  .sidebar-primary input[type="button"],
		  .sidebar-primary input[type="reset"],
		  .sidebar-primary input[type="submit"]', 'color', 'link', 10 ),

  array( '.sidebar-primary button:hover,
  		  .sidebar-primary button:focus,
		  .sidebar-primary input[type="button"]:focus,
		  .sidebar-primary input[type="button"]:hover,
		  .sidebar-primary input[type="reset"]:focus,
		  .sidebar-primary input[type="reset"]:hover,
		  .sidebar-primary input[type="submit"]:focus,
		  .sidebar-primary input[type="submit"]:hover,
		  #subscribe-blog input[type="submit"]:focus,
		  #subscribe-blog input[type="submit"]:hover', 'color', 'txt', 10 ),

  array( '.sidebar-primary button:hover,
		  .sidebar-primary input[type="button"]:hover,
		  .sidebar-primary input[type="reset"]:hover,
		  .sidebar-primary input[type="submit"]:hover', 'border-color', 'link' ),

  array( '.sidebar-primary button:hover,
		  .sidebar-primary input[type="button"]:hover,
		  .sidebar-primary input[type="reset"]:hover,
		  .sidebar-primary input[type="submit"]:hover', 'background-color', '1' ),

  // Needs contrast against #F8F8F8 (secondary sidebar)
  array( '.sidebar-secondary a',
		 'color', '#f8f8f8' ),

  array( '.sidebar-secondary button,
		  .sidebar-secondary input[type="button"],
		  .sidebar-secondary input[type="reset"],
		  .sidebar-secondary input[type="submit"]', 'color', '#f8f8f8' ),

  array( '.sidebar-secondary button:hover,
		  .sidebar-secondary input[type="button"]:hover,
		  .sidebar-secondary input[type="reset"]:hover,
		  .sidebar-secondary input[type="submit"]:hover', 'border-color', '#f8f8f8' ),

  // Needs contrast against #FFFFFF (tertiary sidebar)
  array( '.sidebar-tertiary button,
		  .sidebar-tertiary input[type="button"],
		  .sidebar-tertiary input[type="reset"],
		  .sidebar-tertiary input[type="submit"]', 'color', '#ffffff' ),

  array( '.sidebar-tertiary button:hover,
		  .sidebar-tertiary input[type="button"]:hover,
		  .sidebar-tertiary input[type="reset"]:hover,
		  .sidebar-tertiary input[type="submit"]:hover,
		  .site-footer button:hover,
		  .site-footer input[type="button"]:hover,
		  .site-footer input[type="reset"]:hover,
		  .site-footer input[type="submit"]:hover', 'border-color', '#ffffff' ),

  array( '.sidebar-secondary button:hover,
		  .sidebar-secondary input[type="button"]:hover,
		  .sidebar-secondary input[type="reset"]:hover,
		  .sidebar-secondary input[type="submit"]:hover,
		  .sidebar-tertiary button:hover,
		  .sidebar-tertiary input[type="button"]:hover,
		  .sidebar-tertiary input[type="reset"]:hover,
		  .sidebar-tertiary input[type="submit"]:hover,
		  .site-footer button:hover,
		  .site-footer input[type="button"]:hover,
		  .site-footer input[type="reset"]:hover,
		  .site-footer input[type="submit"]:hover', 'background-color', 0.25 ),

),
__( 'Links and Buttons' ) );

// Secondary accent color
add_color_rule( 'link', '#362e77', array(

	// No contrast
	array ( '.widget-area .sidebar-primary aside',
			'border-color' ),

	// Needs contrast against content background (opaque white)
	array( 'a:hover, a:focus, a:active,
		.blog .featured-content .entry-title a, .blog .sticky .entry-title a',
		'color', '#ffffff' ),

	// Site title needs some contrast, but less
	array( 'a:hover, a:focus, a:active, .site-title a',
		'color', '#ffffff', 2 ),

	// Category tag background needs some contrast, and a bit more than the tags
	array ( '.entry-footer a[rel="category tag"], .sticky .entry-meta, .blog .featured-content .entry-meta .posted-on',
		  'background-color', '#ffffff', 3 ),
),
__( 'Accents' ) );


// White text on blue background
add_color_rule( 'extra', '#ffffff', array(
	// Contrast against blue background (txt)
	array( '.entry-meta a, .entry-meta span, .edit-link a, .comment-reply-link a, .entry-footer a[rel="tag"] a,
			.entry-footer a[rel="category tag"] a, #infinite-handle span a,
			.widget-area .sidebar-primary aside .widgettitle,
			.widget-area .sidebar-primary aside .widget-title,
			.widget-area .sidebar-primary aside .widget-title label,
			.widget-area .sidebar-primary aside,
			.widget-area .sidebar-primary aside a',
			'color', 'txt' ),

	array( '.widget-area .sidebar-primary aside.widget_goodreads a', 'color', '#ffffff'),

	array( '.widget-area .sidebar-primary aside.jetpack_widget_social_icons ul a:hover', 'color', 'link' ),

	array( '.sticky .entry-meta a, .sticky .entry-meta::before, .featured-content .entry-meta .posted-on a', 'color', 'link', 10 ),
) );

// Color palettes
add_color_palette( array(
	'#271e3a',
	'#548854',
	'#0b5144',
	'',
	'',
), 'Purple & Green' );

add_color_palette( array(
	'#c5ccd6',
	'#6b101c',
	'#213055',
	'',
	'',
), 'Navy & Burgundy' );

add_color_palette( array(
	'#dfeae4',
	'#7e5f6a',
	'#d3a3a5',
	'',
	'',
), 'Green & Pastel Pink' );

add_color_palette( array(
	'#dbd2c3',
	'#123926',
	'#3a6551',
	'',
	'',
), 'Beige & Green' );

add_color_palette( array(
	'#230f2b',
	'#f21d41',
	'#c2031d',
	'',
	'',
), 'Purple & Crimson' );

add_color_palette( array(
	'#ecebe8',
	'#00272b',
	'#e0ff4f',
	'',
	'',
), 'Neon Green & Black' );
