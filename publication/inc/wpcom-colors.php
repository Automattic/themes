<?php
add_color_rule( 'bg', '#ffffff', array(

	array(
		'body', 'background-color', '#222222', 17
	),

), __( 'Background' ) );

add_color_rule( 'link', '#ef7d0b', array(

	array(
		'mark,
		ins,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]', 'background-color', '#ffffff', 3
	),
	array(
		'.search-form:before,
		a,
		.post-navigation a:active .post-title,
		.post-navigation a:focus .post-title,
		.post-navigation a:hover .post-title,
		.site-title a:active,
		.site-title a:focus,
		.site-title a:hover,
		.entry-title a:active,
		.entry-title a:focus,
		.entry-title a:hover,
		.comment-author a:active,
		.comment-author a:focus,
		.comment-author a:hover,
		.required,
		.site-content .contact-form label span,
		#comments #respond .comment-form-service a,
		#comments #respond .comment-form-service a', 'color', '#ffffff', 3
	),

), __( 'Accent' ) );

add_color_rule( 'fg1', '#222222', array(

	// #111111
	array(
		'.widget tfoot,
		.widget thead,
		.dropdown-toggle:active,
		.dropdown-toggle:focus,
		.dropdown-toggle:hover,
		.main-navigation a:active,
		.main-navigation a:focus,
		.main-navigation a:hover,
		.social-navigation a:active,
		.social-navigation a:focus,
		.social-navigation a:hover', 'background-color', 'fg1', 1.05
	),

	// #222222
	array(
		'.widget input[type="text"]:focus,
		.widget input[type="email"]:focus,
		.widget input[type="url"]:focus,
		.widget input[type="password"]:focus,
		.widget input[type="search"]:focus,
		.widget textarea:focus,
		.widget .search-form.hover:before,
		.slide-menu,
		.menu-open,
		.menu-toggle,
		.menu-toggle.toggled,
		.dropdown-toggle,
		.main-navigation ul ul.toggled:before,
		.widget-area,
		.site-footer,
		#infinite-footer,
		.site:before', 'background-color', '#ffffff', 1.5
	),
	array(
		'.widget button:active,
		.widget button:focus,
		.widget button:hover,
		.widget input[type="button"]:active,
		.widget input[type="button"]:focus,
		.widget input[type="button"]:hover,
		.widget input[type="reset"]:active,
		.widget input[type="reset"]:focus,
		.widget input[type="reset"]:hover,
		.widget input[type="submit"]:active,
		.widget input[type="submit"]:focus,
		.widget input[type="submit"]:hover,
		.widget_akismet_widget .a-stats a:active,
		.widget_akismet_widget .a-stats a:focus,
		.widget_akismet_widget .a-stats a:hover', 'color', '#ffffff', 1.5
	),

	// #333333
	array(
		'.widget code,
		.widget kbd,
		.widget pre,
		.widget tt,
		.widget var,
		.widget tr:nth-of-type(even),
		.widget input[type="text"],
		.widget input[type="email"],
		.widget input[type="url"],
		.widget input[type="password"],
		.widget input[type="search"],
		.widget textarea,
		.widget .search-form:before,
		.social-navigation:before,
		.social-navigation:after,
		.widget-column:after,
		.widget-column + .widget-column:before', 'background-color', 'fg1', 1.2
	),
	array(
		'.widget-grofile .grofile-thumbnail,
		.widget_author_grid img,
		.widget_authors img,
		.widget_gravatar img,
		.widgets-grid-layout img,
		.widgets-multi-column-grid img,
		.widget_recent_comments img', 'border-color', 'fg1', 1.2
	),
	array(
		'.main-navigation > div > ul > li:last-child,
		.widget,
		.widget .wp-caption', 'border-bottom-color', 'fg1', 1.2
	),
	array(
		'.main-navigation ul ul.toggled', 'border-left-color', 'fg1', 1.2
	),
	array(
		'.rtl .main-navigation ul ul.toggled', 'border-right-color', 'fg1', 1.2
	),
	array(
		'.main-navigation li,
		.main-navigation ul ul.toggled,
		.site-footer,
		#infinite-footer,
		.slide-wrapper + .widget-area', 'border-top-color', 'fg1', 1.2
	),
	array(
		'.slide-menu,
		.menu-toggle.toggled,
		.dropdown-toggle,
		.dropdown-toggle:active,
		.dropdown-toggle:focus,
		.dropdown-toggle:hover,
		.social-navigation a', 'outline-color', 'fg1', 1.2
	),

	// #444444
	array(
		'.widget hr,
		.menu-toggle:active,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.widget_categories .children:before,
		.widget_nav_menu .sub-menu:before,
		.widget_pages .children:before,
		.menu-toggle.toggled:active,
		.menu-toggle.toggled:focus,
		.menu-toggle.toggled:hover,
		.widget_authors ul ul:before', 'background-color', 'fg1', 1.55
	),
	array(
		'.widget input[type="text"],
		.widget input[type="email"],
		.widget input[type="url"],
		.widget input[type="password"],
		.widget input[type="search"],
		.widget textarea,
		.widget .search-form .search-submit,
		.widget .search-form .search-submit:active,
		.widget .search-form .search-submit:focus,
		.widget .search-form .search-submit:hover,
		.menu-toggle.toggled:active,
		.menu-toggle.toggled:focus,
		.menu-toggle.toggled:hover,
		.widget.top_rated .pd_top_rated_holder_posts > p,
		.widget.top_rated ul', 'border-color', 'fg1', 1.55
	),
	array(
		'.widget th,
		.widget td,
		.widget_archive ul,
		.widget_categories ul,
		.widget_links ul,
		.widget_meta ul,
		.widget_nav_menu ul,
		.widget_pages ul,
		.widget_recent_comments ul,
		.widget_recent_entries ul,
		.widget_rss ul,
		.widget_goodreads div[class^="gr_custom_each_container"]:last-of-type,
		.widget-grofile .grofile-links,
		.widget_rss_links ul,
		.widget_rss_links p:last-of-type,
		.widget_authors ul,
		.widget_jp_blogs_i_follow ol,
		.widget_top-clicks ul,
		.widget_top-posts ul,
		.widget.top_rated ul,
		.widget_upcoming_events_widget ul,
		.widget_recent_comments tr,
		.widget_recent_comments td', 'border-bottom-color', 'fg1', 1.55
	),
	array(
		'.widget table,
		.widget_archive li,
		.widget_categories li,
		.widget_links li,
		.widget_meta li,
		.widget_nav_menu li,
		.widget_pages li,
		.widget_recent_comments li,
		.widget_recent_entries li,
		.widget_rss li,
		.widget_goodreads div[class^="gr_custom_each_container"],
		.widget-grofile .grofile-links li,
		.widget_rss_links li,
		.widget_rss_links p,
		.widget_authors li,
		.widget_jp_blogs_i_follow li,
		.widgets-list-layout li,
		.widget_top-clicks li,
		.widget_top-posts li,
		.widget.top_rated li,
		.widget_upcoming_events_widget li,
		.widget_recent_comments table', 'border-top-color', 'fg1', 1.55
	),

	// #cccccc
	array(
		'.widget blockquote,
		.widget caption,
		.widget .wp-caption', 'color', 'fg1', 9.3
	),

), __( 'Sidebar' ) );

add_color_rule( 'fg2', '#ef7d0b', array(

	array(
		'.widget mark,
		.widget ins,
		.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"],
		.widget-grofile  .grofile-full-link,
		.widget_akismet_widget .a-stats a,
		.milestone-widget .milestone-header', 'background-color', 'fg1', 3
	),
	array(
		'.widget .search-form:before,
		.widget a,
		.menu-toggle:hover,
		.menu-toggle.toggled:hover,
		.dropdown-toggle:hover,
		.main-navigation a:hover,
		.main-navigation .current_page_item > a,
		.main-navigation .current-menu-item > a,
		.main-navigation .current_page_ancestor > a,
		.social-navigation a:hover,
		.widget_goodreads div[class^="gr_custom_title"] a,
		.widget_goodreads div[class^="gr_custom_container"] div[class^="gr_custom_author"] a:active,
		.widget_goodreads div[class^="gr_custom_container"] div[class^="gr_custom_author"] a:focus,
		.widget_goodreads div[class^="gr_custom_container"] div[class^="gr_custom_author"] a:hover,
		.widget_flickr #flickr_badge_uber_wrapper td a:last-child', 'color', 'fg1', 3
	),

), __( 'Sidebar Accent' ) );

/* Extra CSS */
function publication_extra_css() { ?>
	#comments #respond p.form-submit input#comment-submit {
		background: #222 !important;
	}
	#comments #respond .form-submit input#comment-submit:active,
	#comments #respond .form-submit input#comment-submit:focus,
	#comments #respond .form-submit input#comment-submit:hover {
		background: #777 !important;
	}
<?php
}
add_theme_support( 'custom_colors_extra_css', 'publication_extra_css' );

/* Additional color palettes */
add_color_palette( array(
    '#ffffff',
    '',
    '#539d30',
    '#222222',
    '#539d30',
), 'Green and Black' );

add_color_palette( array(
    '#ffffff',
    '',
    '#d91e1b',
    '#222222',
    '#d91e1b',
), 'Red and Black' );

add_color_palette( array(
    '#ffffff',
    '',
    '#377feb',
    '#222222',
    '#377feb',
), 'Blue and Black' );

add_color_palette( array(
    '#ffffff',
    '',
    '#0000cc',
    '#bbbbbb',
    '#cc0000',
), 'Blue, Light Grey and Red' );

add_color_palette( array(
    '#ffffff',
    '',
    '#ff0080',
    '#59507b',
    '#97ebdd',
), 'Pink, Purple and Aqua' );

add_color_palette( array(
    '#ffffff',
    '',
    '#1376b7',
    '#27394e',
    '#10cfa9',
), 'Blue, Dark Blue and Turquoise' );