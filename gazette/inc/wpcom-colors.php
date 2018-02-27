<?php

add_color_rule( 'bg', '#ffffff', array(

	// #ffffff
	array(
		'body,
		button:active,
		input[type="button"]:active,
		input[type="reset"]:active,
		input[type="submit"]:active,
		button:focus,
		input[type="button"]:focus,
		input[type="reset"]:focus,
		input[type="submit"]:focus,
		button:hover,
		input[type="button"]:hover,
		input[type="reset"]:hover,
		input[type="submit"]:hover,
		input[type="text"],
		input[type="email"],
		input[type="url"],
		input[type="password"],
		input[type="search"],
		textarea,
		.menu-toggle,
		.dropdown-toggle,
		.main-navigation.toggled > div,
		.comment-navigation a,
		.posts-navigation a,
		.sidebar-toggle,
		.site-header,
		.search-toggled .site-header:before,
		.search-toggle,
		.search-header .search-form,
		.search-form:before,
		.page-links a,
		.post-link .genericon,
		.comment-list .comment-reply-title small,
		#infinite-handle span button,
		#infinite-handle span button:active,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover,
		#infinite-footer,
		body.long-menu .main-navigation > div:before,
		.main-navigation.toggled > div,
		.main-navigation ul ul,
		.main-navigation ul ul li,
		#comments #respond #comment-form-comment,
		#comments #comment-form-share-text-padder,
		#comments #respond .comment-form-fields div.comment-form-input,
		#comments .comment #respond #comment-form-comment,
		#comments .comment #comment-form-share-text-padder,
		#comments .comment #respond .comment-form-fields div.comment-form-input,
		.widget_akismet_widget .a-stats a:active,
		.widget_akismet_widget .a-stats a:focus,
		.widget_akismet_widget .a-stats a:hover', 'background-color'
	),
	array(
		'mark,
		ins,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.comment-navigation a:active,
		.comment-navigation a:focus,
		.comment-navigation a:hover,
		.posts-navigation a:active,
		.posts-navigation a:focus,
		.posts-navigation a:hover,
		.sticky-post,
		body:not(.single) .content-area .format-link,
		.content-area .format-link .entry-title a,
		.content-area .format-link .entry-title + .entry-meta,
		.content-area .format-link .entry-title + .entry-meta a,
		.bypostauthor .fn,
		#infinite-handle span button:active,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover,
		.widget_akismet_widget .a-stats a', 'color'
	),

	// #555555
	array(
		'blockquote', 'color', 'bg', 6.35
	),

	// #777777
	array(
		'caption,
		.social-navigation a,
		.post-navigation .meta-nav,
		.widget_recent_entries .post-date,
		.widget_rss cite,
		.widget_rss .rss-date,
		.site-info,
		.site-info a,
		.footer-text,
		.content-area .entry-meta,
		.content-area .entry-meta a,
		.entry-footer,
		.entry-footer a,
		.page-links,
		.page-links > .page-links-title,
		.author-info .author-title,
		.comment-list .comment-reply-title small,
		.comment-metadata,
		.comment-reply-link,
		.comment-metadata a,
		.comment-list .comment-reply-title small a,
		.wp-caption,
		.gallery-caption,
		.site-content .jetpack-recipe .jetpack-recipe-meta,
		#infinite-footer,
		.hentry div#jp-relatedposts div.jp-relatedposts-items .jp-relatedposts-post-context,
		.widget_goodreads div[class^="gr_custom_author"]', 'color', 'bg', 4.3
	),

	// #aaaaaa
	array(
		'.site-info .sep', 'color', 'bg', 2.1
	),

	// #dddddd
	array(
		'hr,
		.page .widget-area:before,
		.single .widget-area:before,
		body:not(.long-menu) .site-branding:before,
		.comment-list:before,
		.comment-navigation + .comment-respond:before,
		div#jp-relatedposts:before', 'background-color', 'bg', 1.34
	),
	array(
		'input[type="text"],
		input[type="email"],
		input[type="url"],
		input[type="password"],
		input[type="search"],
		textarea,
		.menu-toggle,
		.menu-toggle:active,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.dropdown-toggle,
		.dropdown-toggle:active,
		.dropdown-toggle:focus,
		.dropdown-toggle:hover,
		.main-navigation.toggled > div,
		.sidebar-toggle,
		.sidebar-toggle:active,
		.sidebar-toggle:focus,
		.sidebar-toggle:hover,
		.author-info,
		.search-toggle,
		.search-toggle:active,
		.search-toggle:focus,
		.search-toggle:hover,
		.search-form .search-submit,
		.search-form .search-submit:active,
		.search-form .search-submit:focus,
		.search-form .search-submit:hover,
		.page-links a,
		.page-links > span,
		.page-links a:active,
		.page-links a:focus,
		.page-links a:hover,
		.main-navigation ul ul,
		#comments #respond #comment-form-comment,
		#comments #comment-form-share-text-padder,
		#comments #respond .comment-form-fields div.comment-form-input,
		.widget.top_rated .pd_top_rated_holder_posts > p,
		.widget.top_rated ul', 'border-color', 'bg', 1.34
	),
	array(
		'th,
		td,
		.footer-widget-inner .widget,
		.site-header,
		.comment-list', 'border-bottom-color', 'bg', 1.34
	),
	array(
		'body:not(.long-menu) .main-navigation,
		.page .widget-area,
		.single .widget-area,
		.rtl.page .site-main,
		.rtl.single .site-main', 'border-left-color', 'bg', 1.34
	),
	array(
		'.page .site-main,
		.single .site-main,
		.rtl .search-form .search-field,
		body.rtl:not(.long-menu) .main-navigation,
		.rtl.page .widget-area,
		.rtl.single .widget-area', 'border-right-color', 'bg', 1.34
	),
	array(
		'table,
		.comment-navigation + .comment-respond,
		.footer-widget,
		.site-footer,
		.comments-area,
		#infinite-footer,
		div#jp-relatedposts', 'border-top-color', 'bg', 1.34
	),
	array(
		'blockquote:before', 'color', 'bg', 1.34
	),

	// #eeeeee
	array(
		'pre,
		thead,
		a:focus,
		.menu-toggle:active,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.dropdown-toggle:active,
		.dropdown-toggle:focus,
		.dropdown-toggle:hover,
		.post-navigation a:active,
		.post-navigation a:focus,
		.post-navigation a:hover,
		.sidebar-toggle:active,
		.sidebar-toggle:focus,
		.sidebar-toggle:hover,
		.search-toggle:active,
		.search-toggle:focus,
		.search-toggle:hover,
		.search-form.hover:before,
		.page-links a,
		.page-links > span,
		.page-links a:active,
		.page-links a:focus,
		.page-links a:hover,
		.footer-text + .social-navigation:before', 'background-color', 'bg', 1.12
	),
	array(
		'.comment-navigation a,
		.posts-navigation a,
		.post-navigation a,
		.gallery,
		#infinite-handle span button', 'border-color', 'bg', 1.12
	),
	array(
		'.main-navigation ul,
		.social-navigation,
		.widget_archive ul,
		.widget_categories ul,
		.widget_links ul,
		.widget_meta ul,
		.widget_nav_menu ul,
		.widget_pages ul,
		.widget_recent_comments ul,
		.widget_recent_entries ul,
		.widget_rss ul,
		.footer-text,
		.page-header,
		.entry-footer > span:last-of-type,
		.comment-list .comment:not(:last-of-type),
		.comment-list .depth-1:not(:last-of-type),
		.sd-like.jetpack-likes-widget-wrapper,
		.sd-rating,
		.sd-sharing-enabled:not(#jp-post-flair),
		.widget_goodreads div[class^="gr_custom_each_container"]:last-of-type,
		.widget_rss_links ul,
		.widget_rss_links p:last-of-type,
		.hentry .wpcom-reblog-snapshot .reblogger-note,
		.widget_authors ul,
		.widget_jp_blogs_i_follow ol,
		.widget_blog-stats ul,
		.widget_top-clicks ul,
		.widget_top-posts ul,
		.widget.top_rated ul,
		.widget_upcoming_events_widget ul,
		.widget_recent_comments tr,
		.widget_recent_comments td', 'border-bottom-color', 'bg', 1.12
	),
	array(
		'.main-navigation .nav-menu > li + li', 'border-left-color', 'bg', 1.12
	),
	array(
		'.rtl .main-navigation .nav-menu > li + li', 'border-right-color', 'bg', 1.12
	),
	array(
		'.main-navigation li,
		.posts-navigation,
		.widget_archive li,
		.widget_categories li,
		.widget_links li,
		.widget_meta li,
		.widget_nav_menu li,
		.widget_pages li,
		.widget_recent_comments li,
		.widget_recent_entries li,
		.widget_rss li,
		.archive .hentry,
		.blog .hentry,
		.search .hentry,
		.entry-meta + .entry-meta,
		.entry-footer .byline,
		.entry-footer .cat-links,
		.entry-footer .comments-link,
		.entry-footer .edit-link,
		.entry-footer .posted-on,
		.entry-footer .tags-links,
		.page-links,
		.archive .format-aside .entry-meta:last-of-type,
		.blog .format-aside .entry-meta:last-of-type,
		.search .format-aside .entry-meta:last-of-type,
		.comment-list .comment .comment:first-of-type,
		.comment-list .comment-respond,
		#infinite-handle,
		.infinite-loader,
		.widget_goodreads div[class^="gr_custom_each_container"],
		.widget_rss_links li,
		.widget_rss_links p,
		.widget_authors li,
		.widget_jp_blogs_i_follow li,
		.widgets-list-layout li,
		.widget_top-clicks li,
		.widget_top-posts li,
		.widget.top_rated li,
		.widget_upcoming_events_widget li,
		.widget_recent_comments table', 'border-top-color', 'bg', 1.12
	),
	array(
		'div#jp-relatedposts a:focus', 'outline-color', 'bg', 1.12
	),

), __( 'Background' ) );

add_color_rule( 'link', '#3863c1', array(

	array(
		'mark,
		ins,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.comment-navigation a:active,
		.comment-navigation a:focus,
		.comment-navigation a:hover,
		.posts-navigation a:active,
		.posts-navigation a:focus,
		.posts-navigation a:hover,
		.featured-content .hentry:not(.has-post-thumbnail):hover .post-thumbnail,
		.featured-content .hentry:not(.has-post-thumbnail) .post-thumbnail:focus,
		.sticky-post,
		.content-area .format-link .entry-summary,
		body:not(.single) .content-area .format-link .entry-title,
		.content-area .format-link .entry-title + .entry-meta,
		.post-link,
		.bypostauthor .fn,
		#infinite-handle span button:active,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover,
		.widget_akismet_widget .a-stats a,
		.milestone-widget .milestone-header', 'background-color', 'bg', 2
	),
	array(
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.comment-navigation a:active,
		.comment-navigation a:focus,
		.comment-navigation a:hover,
		.posts-navigation a:active,
		.posts-navigation a:focus,
		.posts-navigation a:hover,
		#infinite-handle span button:active,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover,
		.widget_akismet_widget .a-stats a', 'border-color', 'bg', 2
	),
	array(
		'pre', 'border-left-color', 'bg', 2
	),
	array(
		'.rtl pre', 'border-right-color', 'bg', 2
	),
	array(
		'button:active,
		input[type="button"]:active,
		input[type="reset"]:active,
		input[type="submit"]:active,
		button:focus,
		input[type="button"]:focus,
		input[type="reset"]:focus,
		input[type="submit"]:focus,
		button:hover,
		input[type="button"]:hover,
		input[type="reset"]:hover,
		input[type="submit"]:hover,
		a,
		.menu-toggle,
		.menu-toggle:active,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.dropdown-toggle,
		.dropdown-toggle:active,
		.dropdown-toggle:focus,
		.dropdown-toggle:hover,
		.main-navigation a:active,
		.main-navigation a:focus,
		.main-navigation a:hover,
		.main-navigation .current_page_item > a,
		.main-navigation .current-menu-item > a,
		.main-navigation .current_page_ancestor > a,
		.social-navigation a:active,
		.social-navigation a:focus,
		.social-navigation a:hover,
		.comment-navigation a,
		.posts-navigation a,
		.post-navigation a:active .post-title,
		.post-navigation a:focus .post-title,
		.post-navigation a:hover .post-title,
		.sidebar-toggle,
		.sidebar-toggle:active,
		.sidebar-toggle:focus,
		.sidebar-toggle:hover,
		.search-toggle,
		.search-toggle:active,
		.search-toggle:focus,
		.search-toggle:hover,
		.search-form:before,
		.site-title,
		.site-info a:active,
		.site-info a:focus,
		.site-info a:hover,
		.page-links > span,
		.page-links a:active,
		.page-links a:focus,
		.page-links a:hover,
		.post-link .genericon,
		.required,
		.site-content .contact-form label span,
		#infinite-handle span button,
		#infinite-footer .blog-info a,
		#infinite-footer .blog-credits a:active,
		#infinite-footer .blog-credits a:focus,
		#infinite-footer .blog-credits a:hover,
		.widget_goodreads div[class^="gr_custom_title"] a,
		.main-navigation .menu-item-has-children > a:after,
		#comments #respond .comment-form-service a,
		.widget_akismet_widget .a-stats a:active,
		.widget_akismet_widget .a-stats a:focus,
		.widget_akismet_widget .a-stats a:hover,
		.widget_akismet_widget .a-stats a:active .count,
		.widget_akismet_widget .a-stats a:focus .count,
		.widget_akismet_widget .a-stats a:hover .count,
		.widget_authors > ul > li > a:active,
		.widget_authors > ul > li > a:focus,
		.widget_authors > ul > li > a:hover', 'color', 'bg', 2
	),

), __( 'Accent' ) );

add_color_rule( 'extra', '#222222', array(

	array(
		'.sticky-post:active,
		.sticky-post:focus,
		.sticky-post:hover', 'background-color', 'bg', 21
	),
	array(
		'abbr,
		acronym', 'border-bottom-color', 'bg', 21
	),
	array(
		'body,
		button,
		input,
		select,
		textarea,
		.main-navigation a,
		.post-navigation a,
		.widget_tag_cloud a:before,
		.site-title a:active,
		.site-title a:focus,
		.site-title a:hover,
		.content-area .entry-meta a:active,
		.content-area .entry-meta a:focus,
		.content-area .entry-meta a:hover,
		.entry-footer a:active,
		.entry-footer a:focus,
		.entry-footer a:hover,
		.page-links a,
		.comment-list .comment-reply-title small a:active,
		.comment-list .comment-reply-title small a:focus,
		.comment-list .comment-reply-title small a:hover,
		.comment-metadata a:active,
		.comment-metadata a:focus,
		.comment-metadata a:hover,
		.comment-reply-link:active,
		.comment-reply-link:focus,
		.comment-reply-link:hover,
		#infinite-footer .blog-info a:active,
		#infinite-footer .blog-info a:focus,
		#infinite-footer .blog-info a:hover,
		.widget_goodreads div[class^="gr_custom_title"] a:active,
		.widget_goodreads div[class^="gr_custom_title"] a:focus,
		.widget_goodreads div[class^="gr_custom_title"] a:hover,
		.widget_goodreads div[class^="gr_custom_container"] div[class^="gr_custom_author"] a:active,
		.widget_goodreads div[class^="gr_custom_container"] div[class^="gr_custom_author"] a:focus,
		.widget_goodreads div[class^="gr_custom_container"] div[class^="gr_custom_author"] a:hover,
		#comments #respond .comment-form-fields p.comment-form-posting-as,
		#comments #respond .comment-form-fields p.comment-form-log-out,
		#comments #respond #comment-form-identity #comment-form-nascar p,
		#comments #respond #comment-form-load-service p,
		#comments #respond #comment-form-comment textarea,
		#comments #comment-form-share-text-padder textarea,
		#comments #respond .comment-form-fields label,
		#comments #respond .comment-form-fields label span.required,
		#comments #respond .comment-form-fields label span.nopublish,
		#comments #respond .comment-form-fields div.comment-form-input input,
		#comments #respond .comment-form-service a:active,
		#comments #respond .comment-form-service a:focus,
		#comments #respond .comment-form-service a:hover,
		.widget_authors > ul > li > a,
		.wp_widget_tag_cloud a:before', 'color', 'bg', 7
	),
	array(
		'::input-placeholder', 'color', 'bg', 7
	),
	array(
		'::-webkit-input-placeholder', 'color', 'bg', 7
	),
	array(
		':-moz-placeholder', 'color', 'bg', 7
	),
	array(
		'::-moz-placeholder', 'color', 'bg', 7
	),
	array(
		'::-ms-input-placeholder', 'color', 'bg', 7
	),

) );

/* Extra CSS */
function gazette_extra_css() { ?>
	#comments #respond p.form-submit input#comment-submit,
	.widget_flickr #flickr_badge_uber_wrapper td a:last-child {
		background: #222 !important;
		border-color: #222 !important;
	}
	#comments #respond .form-submit input#comment-submit:active,
	#comments #respond .form-submit input#comment-submit:focus,
	#comments #respond .form-submit input#comment-submit:hover,
	.widget_flickr #flickr_badge_uber_wrapper td a:last-child:active,
	.widget_flickr #flickr_badge_uber_wrapper td a:last-child:focus,
	.widget_flickr #flickr_badge_uber_wrapper td a:last-child:hover {
		background: #fff !important;
		color: #222 !important;
	}
<?php
}
add_theme_support( 'custom_colors_extra_css', 'gazette_extra_css' );

/* Additional color palettes */
add_color_palette( array(
    '#ffffff',
    '',
    '#e80832',
    '',
    '',
), 'White and Red' );

add_color_palette( array(
    '#ffffff',
    '',
    '#2ec9b9',
    '',
    '',
), 'White and Turquoise' );

add_color_palette( array(
    '#ffffff',
    '',
    '#ef7aa5',
    '',
    '',
), 'White and Pink' );

add_color_palette( array(
    '#e4e5e6',
    '',
    '#e58338',
    '',
    '',
), 'Light Grey and Orange' );

add_color_palette( array(
    '#6c797c',
    '',
    '#8ed03c',
    '',
    '',
), 'Dark Grey and Lime' );

add_color_palette( array(
    '#222222',
    '',
    '#3863c1',
    '',
    '',
), 'Black and Blue' );