<?php declare( strict_types = 1 ); ?>
<?php
/* Custom Colors: Dara */

//Background
add_color_rule( 'bg', '#444340', array(
    array( 'body', 'background-color' ),
    array( '.site-footer', 'background-color', '+0.3' ),
) );

add_color_rule( 'txt', '#444340', array(
    array( '#secondary.widget-area .widget-title,
            .entry-title,
            .entry-title a,
            .featured-page .entry-title,
            .featured-page .entry-title a,
            .footer-widget-area .widget-title,
            .page-title,
            .site-title a,
            .woocommerce .page-title', 'color', '#fff' ),
),
__( 'Headings' ) );

add_color_rule( 'link', '#15b6b8', array(
    array( '#infinite-handle span,
            .hero-content-wrapper .cat-links a,
            .jetpack-social-navigation ul li,
            .main-navigation,
            .main-navigation ul ul,
            .button,
            button,
            input[type="button"],
            input[type="reset"],
            input[type="submit"],
            .woocommerce #respond input#submit.alt,
            .woocommerce a.button.alt,
            .woocommerce button.button.alt,
            .woocommerce input.button.alt,
            .woocommerce #respond input#submit.alt:hover,
            .woocommerce a.button.alt:hover,
            .woocommerce button.button.alt:hover,
            .woocommerce input.button.alt:hover', 'background-color' ),

    array( 'input[type="email"]:focus,
            input[type="password"]:focus,
            input[type="search"]:focus,
            input[type="text"]:focus,
            input[type="url"]:focus,
            textarea:focus', 'border-color' ),

    array( '.cat-links a,
            .comment-meta a,
            .entry-title a:active,
            .entry-title a:focus,
            .entry-title a:hover,
            .footer-widget-area a:active,
            .footer-widget-area a:focus,
            .footer-widget-area a:hover,
            .jetpack-testimonial-shortcode .testimonial-entry-title,
            .site-info a:active,
            .site-info a:focus,
            .site-info a:hover,
            a,
            body:not(.search):not(.single-jetpack-testimonial) .jetpack-testimonial .entry-title,
            body:not(.search):not(.single-jetpack-testimonial) .jetpack-testimonial .entry-title a', 'color', '#fff' ),
),
__( 'Links' ) );

add_color_rule( 'fg1', '#ffffff', array(
) );

add_color_rule( 'fg2', '#ffffff', array(
) );


//Extra rules
add_color_rule( 'extra', '#ffffff', array(
    array( '#infinite-handle span,
            .hero-content-wrapper .cat-links a,
            .jetpack-social-navigation ul li,
            .jetpack-social-navigation ul a,
            .jetpack-social-navigation ul a:visited,
            .main-navigation,
            .main-navigation a,
            .main-navigation ul ul a,
            .button,
            .button:hover,
            .button:active,
            .button:focus,
            .menu-toggle,
            button,
            input[type="button"],
            input[type="reset"],
            input[type="submit"],
            .woocommerce #respond input#submit.alt,
            .woocommerce a.button.alt,
            .woocommerce button.button.alt,
            .woocommerce input.button.alt,
            .woocommerce #respond input#submit.alt:hover,
            .woocommerce a.button.alt:hover,
            .woocommerce button.button.alt:hover,
            .woocommerce input.button.alt:hover', 'color', 'link' ),

    array( '.jetpack-social-navigation ul a:hover,
    		.menu-toggle:hover,
    		.menu-toggle:focus', 'color', 'link', 3 ),

    array( '.site-footer,
            .site-footer a', 'color', 'bg' ),
) );


//Additional palettes

add_color_palette( array(
    '#e7e8e8',
    '#444444',
    '#db045a',
), 'Pink' );

add_color_palette( array(
    '#515151',
    '#686868',
    '#be5402',
), 'Orange' );

add_color_palette( array(
    '#eae6e5',
    '#4f6e86',
    '#72594a',
), 'Brown' );

add_color_palette( array(
    '#212121',
    '#444444',
    '#333333',
), 'Black' );

add_color_palette( array(
    '#efefef',
    '#57887c',
    '#b5d3d2',
), 'Light Blue' );

add_color_palette( array(
    '#383838',
    '#383838',
    '#e4e06c',
), 'Light Yellow' );
