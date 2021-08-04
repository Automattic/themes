<?php
/* Custom Colors: Independent Publisher */

add_color_rule( 'bg', '#ffffff', array(

  // No contrast
  array( 'body', 'background-color' ),

  array( '#infinite-footer .container', 'background-color', 0.7 ),

  array( '.post-edit-link a', 'background-color', '-0.2' ),

) );

add_color_rule( 'txt', '#333332', array(
    array( '.entry-author .author-title,
            .entry-title,
            .entry-title a,
            .entry-title a:visited,
            .site-posted-on strong,
            .site-title,
            .site-title a,
            .site-title a:visited,
            .entry-title a:hover,
            .site-title a:hover,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .page-header:not(.page-header-light) h1,
            .comment .comment-meta .comment-author .fn', 'color', 'bg' ),
), __( 'Headings' ) );

add_color_rule( 'link', '#0087be', array(
    array( '.comment-form input[type="email"]:active,
            .comment-form input[type="email"]:focus,
            .comment-form input[type="password"]:active,
            .comment-form input[type="password"]:focus,
            .comment-form input[type="search"]:active,
            .comment-form input[type="search"]:focus,
            .comment-form input[type="text"]:active,
            .comment-form input[type="text"]:focus,
            .comment-form input[type="url"]:active,
            .comment-form input[type="url"]:focus,
            .comment-form textarea:active,
            .comment-form textarea:focus,
            blockquote,
            input[type="email"]:focus,
            input[type="password"]:focus,
            input[type="search"]:focus,
            input[type="text"]:focus,
            input[type="url"]:focus,
            textarea:focus', 'border-color' ),

    array( '.comment .comment-meta .comment-metadata a:hover,
            .comment-form span.required,
            .pingback:before,
            .post-details a:hover,
            .post-edit-link a:active,
            .post-edit-link a:focus,
            .post-edit-link a:hover,
            .site-info a:hover,
            .trackback:before,
            a,
            a:visited', 'color', 'bg' ),

    array( '.main-navigation > div > ul > li.current-menu-item > a,
            .main-navigation > div > ul > li.current_page_item > a,
            a:active,
            a:focus,
            a:hover,
            .page-links a:hover', 'color', 'bg', 2 ),

    array( '.posts-navigation .nav-links a,
            .main-navigation ul ul', 'background-color' ),
),
__( 'Links' ) );

add_color_rule( 'fg1', '#0087be', array(
    array( 'button,
            input[type="button"],
            input[type="reset"],
            input[type="submit"],
            .button,
            #content #infinite-handle span button,
            .more-link', 'background-color' ),
    array( 'button:not(".components-button"):hover,
            input[type="button"]:hover,
            input[type="reset"]:hover,
            input[type="submit"]:hover,
            .button:hover,
            #content #infinite-handle span button:hover,
            .more-link:hover', 'background-color', '-1' ),
),
__( 'Buttons' ) );


add_color_rule( 'extra', '#383838', array(
    array( '.widget_recent_comments a,
            .widget_recent_entries a,
            body,
            button,
            input,
            select,
            textarea', 'color', 'bg' ),

    array( '#infinite-footer .blog-info a:hover,
            #infinite-footer .blog-credits a:hover', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#ffffff', array(
    array( '.posts-navigation .nav-links a,
            .main-navigation ul ul a,
            .main-navigation > div > ul > li.current-menu-item > ul > li a,
            .main-navigation > div > ul > li.current_page_item > ul > li a', 'color', 'link' ),

    array( 'input[type="button"],
            input[type="button"]:hover,
            input[type="reset"],
            input[type="reset"]:hover,
            input[type="submit"],
            input[type="submit"]:hover,
            .button,
            .button:hover,
            #content #infinite-handle span button,
            #content #infinite-handle span button:hover,
            .more-link,
            .more-link:hover,
            .more-link:visited', 'color', 'fg1' ),
) );

add_color_rule( 'extra', '#dddddd', array(
    array( '.site-main > .hentry:nth-child(n+2), .site .infinite-wrap > .hentry:nth-child(n+2),
            .entry-author-wrapper,
            .post-navigation,
            .comment,
            .page-links a:hover,
            .main-navigation li', 'border-color', 0.25 ),

    array( '#infinite-footer .blog-info a,
            #infinite-footer .blog-credits,
            #infinite-footer .blog-credits a', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#92928f', array(
    array( '.post-details,
            .post-details a,
            .post-details a:visited,
            .post-edit-link a,
            .post-edit-link a:visited', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#515151', array(
    array( '.post-tags li:first-child,
            .jetpack-social-navigation li a:hover,
            .widget_wpcom_social_media_icons_widget li a:hover,
            .jetpack-social-navigation li a:focus,
            .widget_wpcom_social_media_icons_widget li a:focus,
            .jetpack-social-navigation li a:active,
            .widget_wpcom_social_media_icons_widget li a:active', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#a4a4a4', array(
    array( '.jetpack-social-navigation li a,
            .widget_wpcom_social_media_icons_widget li a', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#929292', array(
    array( '.post-navigation .nav-links a:hover,
            .post-navigation .nav-links a:focus,
            .post-navigation .nav-links a:active,
            .entry-author .author-bio,
            .site-posted-on time,
            .site-description', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#b3b3b1', array(
    array( '.comment .comment-meta,
            .comment-form label,
            .light-text,
            .light-text a,
            .light-text a:visited,
            .widget_rss .rss-date,
            .widget_rss li > cite', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#747471', array(
    array( '.light-text a:hover', 'color', 'bg' ),
) );

function independent_publisher_extra_css() { ?>
    .has-header-image .site-title a,
    .has-header-image .site-title a:visited {
        color: #fff;
    }

    @media screen and ( max-width: 32.374em ) {
        .main-navigation ul ul {
            background: transparent !important;
        }
        .main-navigation ul ul a {
            color: inherit !important;
        }
    }
  <?php }

add_theme_support( 'custom_colors_extra_css', 'independent_publisher_extra_css' );

add_color_palette( array(
  '#2d3238',
  '#383838',
  '#f5f5f3',
  '#f5f5f3'
) );

add_color_palette( array(
  '#413e4a',
  '#73626e',
  '#b38184',
  '#ffffff',
) );

add_color_palette( array(
  '#435464',
  '#798585',
  '#bcde72',
  '#d5e3fa',
) );

add_color_palette( array(
  '#f9f9f9',
  '#306363',
  '#3ca2a2',
  '#a5d8d8',
) );

add_color_palette( array(
  '#f6f6f6',
  '#333333',
  '#cc1919',
  '#cc1919',
) );


add_color_palette( array(
  '#ebedef',
  '#525e6a',
  '#90a1b5',
  '#c86e64',
) );
