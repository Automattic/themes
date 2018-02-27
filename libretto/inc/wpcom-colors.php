<?php
/* Custom Colors: Libretto */

// Main page background colour
add_color_rule( 'bg', '#f2f1ed', array(
  array( 'body', 'background-color' ),
) );

// Text colour
add_color_rule( 'txt', '#363431', array(

  // Needs contrast against background colour
  array( 'body, button, input, select, textarea', 'color', 'bg' ),
  array( 'input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="url"]:focus, textarea:focus', 'color', 'bg' ),
  array( '.fn a', 'color', 'bg' ),
  array( '.comment-content', 'color', 'bg' ),

  // Needs contrast against post background colour
  array( '.libretto-long-form', 'color', '#faf9f5' ),
  array( 'input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="url"]:focus, textarea:focus', 'color', '#faf9f5' ),
  array( '#footer-sidebar, .widget-title, label', 'color', '#faf9f5',  ),

  // No contrast
  array( 'input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="url"]:focus, textarea:focus', 'border-color' ),
  array( 'input[type="submit"]:active, button:active', 'background-color' ),
  array( 'input[type="submit"]:active, button:active', 'outline' ),
  array( '.menu-toggle', 'background-color' ),
  array( '.menu-toggle', 'border-color' ),
  array( '#site-navigation .sub-menu li', 'background-color' ),
  array( '#site-navigation .menu-item-has-children:hover:after ', 'border-bottom-color' ),
  array( '#site-navigation .sub-menu .menu-item-has-children:hover:after', 'border-right-color' ),

),
__( 'Text' ) );

// Accent colour--used for links
add_color_rule( 'link', '#932817', array(

  // Needs contrast against main background colour
  array( 'a, a:visited, a:hover, a:active, a:focus', 'color', 'bg' ),
  array( '.site-title a:visited, .site-title a:hover, .site-title a:active, .site-title a:focus', 'color', 'bg' ),
  array( '.entry-footer a, .entry-footer a:visited, .entry-footer a:hover, .entry-footer a:active, .entry-footer a:focus', 'color', 'bg' ),

  // Needs contrast against post background colour, #faf9f5
  array( 'a, a:visited, a:hover, a:active, a:focus', 'color', '#faf9f5' ),
  array( '#infinite-handle span:hover', 'color', '#faf9f5' ),
  array( '.site-branding h1 a:visited, .site-branding h1 a:hover, .site-branding h1 a:active, .site-branding h1 a:focus', 'color', '#faf9f5' ),

  // No contrast
  array( '#infinite-handle span:hover', 'border-color' ),
),
__( 'Accent', 'Color' ) );

// Extra colour rules: Light grey
add_color_rule( 'extra', '#d9d6d0', array(

  // Ensure the entry headers work against different background colours
  array( '.empty-header .title-block', 'border-color', 0.5  ),

  // Social nav links should have a background that lets the actual background through
  array( '#social a::before', 'background-color', 0.25 ),
  // ...and adjust this colour a bit for hovering purposes
  array( '#social a:hover::before', 'background-color', '-0.5' ),
) );

// Extra colour rules: Another grey!
add_color_rule( 'extra', '#787065', array(

  // Ensure that asides, nav, and footer have contrast against the background
  array( '.format-aside .entry-content', 'color', 'bg' ),
  array( '.previous .meta-nav, .next .meta-nav', 'color', 'bg' ),
  array( '.site-info, #colophon a, #colophon a:link, #colophon a:visited, #social a::before', 'color', 'bg' ),
) );

// Extra colour rules: Blockquote before
add_color_rule( 'extra', '#EBE7E1', array(

  // Give it some opacity so it works against the background!
  array( 'blockquote::before', 'color', 0.3 ),

) );

// Extra colour rules: Medium grey
add_color_rule( 'extra', '#a09a92', array(

  // Needs contrast against background
  array( '[class*="navigation"] .page-number', 'color', 'bg' ),
  array( 'input[type="text"], input[type="email"], input[type="password"], input[type="search"], input[type="url"], textarea, label', 'color', 'bg' ),
  array( '.site-branding h1', 'color', 'bg' ),
  array( '#colophon .site-info', 'color', 'bg' ),
  array( '[class*="navigation"] .previous a, [class*="navigation"] .next a', 'color', 'bg' ),
  array( '.entry-meta, .wp-caption-text', 'color', 'bg' ),
  array( '.says, .pingback', 'color', 'bg' ),

  // Contrast against post background
  array( '.entry-meta', 'color', '#faf9f5' ),
  array( 'h1, h2, h3, h4, h5, h6, blockquote, blockquote cite, thead th', 'color', '#faf9f5' ),
) );

// Extra colour rules: White
add_color_rule( 'extra', '#ffffff', array(
  // Need contrast against the 'txt' color
  array( '.mobile-site-title', 'color', 'txt' ),
  array( '#menu-icon span', 'background-color', 'txt' ),
) );


// Colour palettes
add_color_palette( array(
    '#2b2737',
    '#444349',
    '#c17292',
    '',
    '',
), 'Midnight Cherry' );

add_color_palette( array(
    '#ffffff',
    '#3f4a54',
    '#6abbce',
    '',
    '',
), 'Snow' );

add_color_palette( array(
    '#1a3155',
    '#45494f',
    '#d19a41',
    '',
    '',
), 'Captain' );

add_color_palette( array(
    '#cec0c8',
    '#473f47',
    '#3f2856',
    '',
    '',
), 'Dust Jacket' );

add_color_palette( array(
    '#33281b',
    '#44403c',
    '#66a2b2',
    '',
    '',
), 'Cowboy' );

add_color_palette( array(
    '#838181',
    '#3b3b3f',
    '#a21d21',
    '',
    '',
), 'Tweed' );
