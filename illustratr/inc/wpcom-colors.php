<?php

add_color_rule( 'bg', '#24282d', array(

	array(
		'body', 'background-color'
	),

), __( 'Background' ) );

add_color_rule( 'link', '#e06d5e', array(

	// Background
	array(
		'::selection', 'background-color', '#ffffff', 2
	),
	array(
		'::-moz-selection', 'background-color', '#ffffff', 2
	),
	array(
		'mark,
		ins,
		button:hover,
		button:focus,
		button:active,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="button"]:active,
		input[type="reset"]:hover,
		input[type="reset"]:focus,
		input[type="reset"]:active,
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		input[type="submit"]:active,
		.main-navigation.toggled .menu-toggle,
		.main-navigation ul .genericon.genericon-collapse,
		.page-content .widget_tag_cloud a:hover,
		.page-content .widget_tag_cloud a:focus,
		.page-content .widget_tag_cloud a:active,
		.entry-thumbnail a,
		.entry-thumbnail a:before,
		.page-links .page-link,
		.portfolio-thumbnail a,
		.portfolio-thumbnail a:before,
		.gallery-icon a,
		.gallery-icon a:before,
		.mejs-container .mejs-controls .mejs-time-rail .mejs-time-current,
		.mejs-container .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current', 'background-color', '#ffffff', 2
	),

	// Color
	array(
		'a,
		.site-main .comment-navigation a:hover,
		.site-main .comment-navigation a:focus,
		.site-main .comment-navigation a:active,
		.site-main .paging-navigation a:hover,
		.site-main .paging-navigation a:focus,
		.site-main .paging-navigation a:active,
		.site-main .post-navigation a:hover,
		.site-main .post-navigation a:focus,
		.site-main .post-navigation a:active,
		.main-navigation ul li a:hover,
		.main-navigation ul li a:focus,
		.main-navigation ul li a:active,
		.main-navigation ul .current_page_item > a,
		.main-navigation ul .current-menu-item > a,
		.menu-social li a:hover,
		.menu-social li a:focus,
		.menu-social li a:active,
		.widget-title a:hover,
		.widget-title a:focus,
		.widget-title a:active,
		.widgettitle a:hover,
		.widgettitle a:focus,
		.widgettitle a:active,
		.page-title a:hover,
		.page-title a:focus,
		.page-title a:active,
		.entry-title a:hover,
		.entry-title a:focus,
		.entry-title a:active,
		.more-link-wrapper .more-link:hover,
		.more-link-wrapper .more-link:focus,
		.more-link-wrapper .more-link:active,
		.site-main .portfolio-entry-title a:hover,
		.site-main .portfolio-entry-title a:focus,
		.site-main .portfolio-entry-title a:active,
		.comments-title a:hover,
		.comments-title a:focus,
		.comments-title a:active,
		.comment-reply-title a:hover,
		.comment-reply-title a:focus,
		.comment-reply-title a:active,
		.required,
		.site-main .contact-form label span,
		#infinite-handle span:hover,
		#infinite-handle span:focus,
		#infinite-handle span:active,
		.widgets-area button:hover,
		.widgets-area button:focus,
		.widgets-area button:active,
		.widgets-area input[type="button"]:hover,
		.widgets-area input[type="button"]:focus,
		.widgets-area input[type="button"]:active,
		.widgets-area input[type="reset"]:hover,
		.widgets-area input[type="reset"]:focus,
		.widgets-area input[type="reset"]:active,
		.widgets-area input[type="submit"]:hover,
		.widgets-area input[type="submit"]:focus,
		.widgets-area input[type="submit"]:active,
		.widget_akismet_widget .a-stats a:hover,
		.widget_akismet_widget .a-stats a:focus,
		.widget_akismet_widget .a-stats a:active,
		.widgets-area .widget_tag_cloud a:hover,
		.widgets-area .widget_tag_cloud a:focus,
		.widgets-area .widget_tag_cloud a:active', 'color', '#ffffff', 2
	),
	array(
		'.widgets-area .widget-title a:hover,
		.widgets-area .widget-title a:focus,
		.widgets-area .widget-title a:active,
		.widgets-area .widgettitle a:hover,
		.widgets-area .widgettitle a:focus,
		.widgets-area .widgettitle a:active,
		.widgets-area a:hover,
		.widgets-area a:focus,
		.widgets-area a:active,
		.widget_goodreads div[class^="gr_custom_container"] a:hover,
		.widget_goodreads div[class^="gr_custom_container"] a:focus,
		.widget_goodreads div[class^="gr_custom_container"] a:active', 'color', '#464d4d', 2
	),

	// Border
	array(
		'button:hover,
		button:focus,
		button:active,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="button"]:active,
		input[type="reset"]:hover,
		input[type="reset"]:focus,
		input[type="reset"]:active,
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		input[type="submit"]:active,
		.menu-social li a:hover,
		.menu-social li a:focus,
		.menu-social li a:active,
		.page-links .page-link', 'border-color', '#ffffff', 2
	),
	array(
		'#secondary.hover:after', 'border-bottom-color', '#ffffff', 2
	),
	array(
		'blockquote', 'border-left-color', '#ffffff', 2
	),
	array(
		'.rtl blockquote', 'border-right-color', '#ffffff', 2
	),

	// Outline
	array(
		'.mejs-container .mejs-controls .mejs-button button:focus', 'outline-color', '#ffffff', 2
	),

), __( 'Accent' ) );

/* Extra CSS */
function illustratr_extra_css() { ?>
	#comments #respond #comment-submit:hover,
	#comments #respond #comment-submit:focus,
	#comments #respond #comment-submit:active {
		background-color: #f1f2f3 !important;
		border-color: #f1f2f3 !important;
		color: #7f8d8c !important;
	}
<?php
}
add_theme_support( 'custom_colors_extra_css', 'illustratr_extra_css' );

/* Additional color palettes */
add_color_palette( array(
    '#24282d',
    '',
    '#3fc380',
    '',
    '',
), 'Green' );

add_color_palette( array(
    '#24282d',
    '',
    '#0f71b4',
    '',
    '',
), 'Blue' );

add_color_palette( array(
    '#24282d',
    '',
    '#66ceff',
    '',
    '',
), 'Light Blue' );

add_color_palette( array(
    '#24282d',
    '',
    '#f47a20',
    '',
    '',
), 'Orange' );

add_color_palette( array(
    '#24282d',
    '',
    '#ea4c89',
    '',
    '',
), 'Magenta' );

add_color_palette( array(
    '#24282d',
    '',
    '#6567a5',
    '',
    '',
), 'Purple' );