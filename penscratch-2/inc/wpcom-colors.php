<?php
/* Custom Colors: Penscratch 2 */

// Background
add_color_rule( 'bg', '#eeeeee', array(
	array( 'body', 'background-color' ),
) );

// Links
add_color_rule( 'txt', '#1c7c7c', array(

	array( '.jetpack-social-navigation ul a:hover', 'background-color' ),
	array( '.jetpack-recipe-title', 'border-color' ),

	array( '.toggled .menu-toggle, .wp_widget_tag_cloud a:hover, .tags-links a:hover', 'border-color', '#fff' ),
	array( '.button:hover, .button:focus, .button:active, button:hover, button:focus, button:active, input[type="button"]:hover, input[type="button"]:focus, input[type="button"]:active, input[type="reset"]:hover, input[type="reset"]:focus, input[type="reset"]:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active, #infinite-handle span:hover', 'border-color', '#fff' ),

	array( '.button:hover, .button:focus, .button:active, button:hover, button:focus, button:active, input[type="button"]:hover, input[type="button"]:focus, input[type="button"]:active, input[type="reset"]:hover, input[type="reset"]:focus, input[type="reset"]:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active, #infinite-handle span:hover', 'color', '#fff' ),

	array( '.menu-toggle:hover #menu-icon, .toggled #menu-icon', 'fill', '#fff' ),

	array( 'a, a:visited, .site-footer a:hover, .main-navigation li:hover > a, .current_page_item a, .current-menu-item a, .toggled .menu-toggle, .entry-footer a:hover, .entry-meta a:hover, .entry-title a:hover, .site-main .post-navigation .meta-nav, .site-main .paging-navigation .meta-nav, .comment-meta .comment-metadata a:hover, .required, .widget a, #wp-calendar a, .wp_widget_tag_cloud a:hover, #infinite-footer .container a:hover, #infinite-handle span, .tags-links a:hover, .current_page_item a, .current-menu-item a, .current_page_item a:visited, .current-menu-item a:visited', 'color', '#fff' ),
),
__( 'Links' ) );

// Extra rules
add_color_rule( 'extra', '#ffffff', array(
	array( '.jetpack-social-navigation ul a:hover', 'color', 'txt' ),
) );

// Extra CSS
function penscratch_2_extra_css() { ?>
	.widget a:hover,
	.site-footer .widget a:hover {
		color: #666;
	}
<?php
}
add_theme_support( 'custom_colors_extra_css', 'penscratch_2_extra_css' );

// Colour Palettes
add_color_palette( array(
    '#c8dee5',
    '#fe6758',
), __( 'Blue & Red' ) );

add_color_palette( array(
	'#333333',
	'#1479a8'
), __( 'Dark Blue' ) );

add_color_palette( array(
	'#554337',
	'#028b5b'
), __( 'Dark Green' ) );

add_color_palette( array(
	'#645861',
	'#d58aa8'
), __( 'Purple' ) );

add_color_palette( array(
	'#ece6de',
	'#339fa2'
), __( 'Teal') );

add_color_palette( array(
	'#d9d9dc',
	'#c61610'
), __( 'Red' ) );
