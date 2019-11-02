<?php
/* Custom Colors: Ixion */

//Background
add_color_rule( 'bg', '#ffffff', array(
    array( 'body, ins, mark,
            .site-header .search-form-icon:before,
            .site-header .search-form .search-field,
            .footer-widgets .widget', 'background-color' ),

    array( '.entry-author,
            .widget,
            hr,
            .testimonials .hentry', 'background-color', '-0.3' ),
) );

add_color_rule( 'txt', '#192930', array(
    array( '.featured-content .hentry,
            .header-overlay', 'background-color' ),

    array( '.header-overlay:before', 'background-color' ),

    array( 'h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .entry-title a,
            .entry-title a:visited,
            .entry-title,
            .page-title,
            .widget-title,
            .widget a,
            .site-title,
            .comments-title,
            .site-title a,
            .site-title a:visited', 'color', 'bg' ),
),
__( 'Headings' ) );

add_color_rule( 'link', '#d7b221', array(
    array( '#infinite-handle span,
            .button,
            .comment-navigation .nav-next a,
            .comment-navigation .nav-previous a,
            .main-navigation .menu-toggle,
            .post-navigation .nav-next a,
            .post-navigation .nav-previous a,
            .posts-navigation .nav-next a,
            .posts-navigation .nav-previous a,
            button,
            input[type="button"],
            input[type="reset"],
            input[type="submit"]', 'background-color' ),

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
            input[type="submit"]:hover', 'background-color', '-0.5' ),

    array( '.main-navigation ul ul', 'border-top-color' ),

    array( '.main-navigation ul ul:before', 'color' ),

    array( '.comment-metadata .edit-link a,
            .site-header .jetpack-social-navigation a:hover,
            .jetpack_widget_social_icons a:hover,
			.jetpack_widget_social_icons a:focus,
			.widget_wpcom_social_media_icons_widget a:hover,
			.widget_wpcom_social_media_icons_widget a:focus,
            a,
            a:visited,
            .main-navigation .nav-menu > li > a,
            .testimonials .edit-link a,
            .testimonials .edit-link a:visited', 'color', 'bg' ),

    array( 'a:hover, a:focus, a:active', 'color', 'bg', 2 ),

    array( '.featured-content .hentry:hover .entry-title a', 'color', 'txt' ),

),
__( 'Links & Buttons' ) );


//Extra rules
add_color_rule( 'extra', '#ffffff', array(
    array( '#infinite-handle span,
            .button,
            .comment-navigation .nav-next a,
            .comment-navigation .nav-previous a,
            .main-navigation .menu-toggle,
            .post-navigation .nav-next a,
            .post-navigation .nav-previous a,
            .posts-navigation .nav-next a,
            .posts-navigation .nav-previous a,
            button,
            input[type="button"],
            input[type="reset"],
            input[type="submit"],
            #infinite-handle span:active,
            #infinite-handle span:focus,
            #infinite-handle span:hover,
            .button:active,
            .button:focus,
            .button:hover,
            .comment-navigation .nav-next a,
            .comment-navigation .nav-previous a,
            .main-navigation .menu-toggle,
            .post-navigation .nav-next a,
            .post-navigation .nav-previous a,
            .posts-navigation .nav-next a,
            .posts-navigation .nav-previous a,
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
            input[type="submit"]:hover', 'color', 'link' ),

    array( '.site-description, .featured-content .hentry .entry-title a', 'color', 'txt', 10 ),
) );

add_color_rule( 'extra', '#192930', array(
    array( '.comment-author,
            .footer-widgets .widget a,
            body,
            button', 'color', 'bg', 12 ),
) );

add_color_rule( 'extra', '#eeece8', array(

    array( '#respond h3,
            .comments-title,
            .featured-content,
            .hentry,
            .page-header,
            .recent-posts-header,
            .singular .entry-title,
            .site-header,
            .utility-container,
            .recent-posts:after,
            .site-footer,
            .site-info,
            .site-header .search-form .search-field,
            .site-header .search-form-icon:before,
            .site-header .jetpack-social-navigation a:before', 'border-color', 0.3 ),
) );

add_color_rule( 'extra', '#a5a29d', array(
    array( '.comment-metadata,
            .entry-footer,
            .entry-meta,
            .footer-widgets .widget-title,
            .main-navigation ul > li.current-menu-item > a,
            .main-navigation ul > li.current_page_item > a,
            .more-recent-posts,
            .more-recent-posts:visited,
            .more-testimonials,
            .more-testimonials:visited,
            .search-form-icon:before,
            .site-header .jetpack-social-navigation a,
            .site-info,
            div#jp-relatedposts h3.jp-relatedposts-headline', 'color', 'bg' ),

    array( '.search-form-icon:before,
            .search-form .search-field', 'border-color', 0.3 ),
) );

//Additional palettes

add_color_palette( array(
    '#333333',
    '#fefefe',
    '#386ea8',
), 'Dark' );

add_color_palette( array(
    '#f5f0e9',
    '#42566a',
    '#a84c38',
), 'Blue' );

add_color_palette( array(
    '#f9f9f9',
    '#211d1b',
    '#c74f04',
), 'Orange' );

add_color_palette( array(
    '#ffffff',
    '#c9d8ca',
    '#467b52',
), 'Green' );

add_color_palette( array(
    '#fcfcfc',
    '#212121',
    '#b50c0c',
), 'Red' );

add_color_palette( array(
    '#1b211f',
    '#444444',
    '#27ae93',
), 'Teal' );
