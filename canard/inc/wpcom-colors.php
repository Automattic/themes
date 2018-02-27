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
		.search-form:before,
		.menu-toggle,
		.dropdown-toggle,
		.main-navigation > div > ul,
		.comment-navigation a,
		.posts-navigation a,
		.sidebar-toggle,
		.page-links a,
		.post-link .genericon,
		#infinite-handle span button,
		#infinite-handle span button:active,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover,
		.main-navigation.toggled > div,
		.main-navigation > div:before,
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
		.footer-navigation a,
		.post-navigation .meta-nav,
		.widget_recent_entries .post-date,
		.widget_rss cite,
		.widget_rss .rss-date,
		.site-description,
		.entry-hero .entry-meta a,
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
		.hentry div#jp-relatedposts div.jp-relatedposts-items .jp-relatedposts-post-context,
		.widget_goodreads div[class^="gr_custom_author"]', 'color', 'bg', 4.3
	),
	array(
		'::input-placeholder', 'color', 'bg', 4.3
	),
	array(
		'::-webkit-input-placeholder', 'color', 'bg', 4.3
	),
	array(
		':-moz-placeholder', 'color', 'bg', 4.3
	),
	array(
		'::-moz-placeholder', 'color', 'bg', 4.3
	),
	array(
		'::-ms-input-placeholder', 'color', 'bg', 4.3
	),

	// #dddddd
	array(
		'hr,
		.widget-area:before,
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
		.search-form .search-submit,
		.search-form .search-submit:active,
		.search-form .search-submit:focus,
		.search-form .search-submit:hover,
		.menu-toggle,
		.menu-toggle:active,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.dropdown-toggle,
		.dropdown-toggle:active,
		.dropdown-toggle:focus,
		.dropdown-toggle:hover,
		.main-navigation > div > ul,
		.sidebar-toggle,
		.sidebar-toggle:active,
		.sidebar-toggle:focus,
		.sidebar-toggle:hover,
		.author-info,
		.search-toggle,
		.search-toggle:active,
		.search-toggle:focus,
		.search-toggle:hover,
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
		.featured-content,
		.comment-list', 'border-bottom-color', 'bg', 1.34
	),
	array(
		'.rtl .site-main,
		.widget-area', 'border-left-color', 'bg', 1.34
	),
	array(
		'.site-main,
		.rtl .widget-area', 'border-right-color', 'bg', 1.34
	),
	array(
		'table,
		.footer-navigation,
		.comment-navigation + .comment-respond,
		.footer-widget,
		.comments-area,
		div#jp-relatedposts,
		.search-navigation,
		.header-image', 'border-top-color', 'bg', 1.34
	),
	array(
		'blockquote:before', 'color', 'bg', 1.34
	),
	array(
		'a:focus,
		.bypostauthor .fn,
		div#jp-relatedposts a:focus', 'outline-color', 'bg', 1.34
	),

	// #eeeeee
	array(
		'pre,
		thead,
		.search-form.hover:before,
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
		.page-links a:hover', 'background-color', 'bg', 1.12
	),
	array(
		'.comment-navigation a,
		.posts-navigation a,
		.post-navigation a,
		.gallery,
		#infinite-handle span button', 'border-color', 'bg', 1.12
	),
	array(
		'.main-navigation > div > ul > li:last-child,
		.main-navigation ul,
		.widget_archive ul,
		.widget_categories ul,
		.widget_links ul,
		.widget_meta ul,
		.widget_nav_menu ul,
		.widget_pages ul,
		.widget_recent_comments ul,
		.widget_recent_entries ul,
		.widget_rss ul,
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
		'.main-navigation .nav-menu > li + li,
		.footer-navigation li + li', 'border-left-color', 'bg', 1.12
	),
	array(
		'.rtl .main-navigation .nav-menu > li + li,
		.rtl .footer-navigation li + li', 'border-right-color', 'bg', 1.12
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
		.entry-footer .byline,
		.entry-footer .cat-links,
		.entry-footer .comments-link,
		.entry-footer .edit-link,
		.entry-footer .posted-on,
		.entry-footer .tags-links,
		.page-links,
		.comment-list .comment .comment:first-of-type,
		.comment-list .comment-respond,
		#infinite-handle,
		.infinite-loader,
		.archive .infinite-wrap .hentry:first-of-type,
		.blog .infinite-wrap .hentry:first-of-type,
		.search .infinite-wrap .hentry:first-of-type,
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

), __( 'Background' ) );

add_color_rule( 'fg1', '#222222', array(

	// #222222
	array(
		'.toggled .menu-toggle,
		.main-navigation.toggled > div,
		.social-navigation,
		.bottom-navigation,
		.sidebar-toggle.toggled,
		.site-top,
		.toggled .search-toggle,
		.search-header .search-form,
		.site-social,
		.site-footer,
		#infinite-footer', 'background-color'
	),
	array(
		'.toggled .menu-toggle,
		.sidebar-toggle.toggled,
		.toggled .search-toggle', 'border-color'
	),
	array(
		'.main-navigation.toggled > div:before,
		.search-header.toggled .search-toggle:after', 'border-bottom-color'
	),

	// #444444
	array(
		'.toggled .menu-toggle:active,
		.toggled .menu-toggle:focus,
		.toggled .menu-toggle:hover,
		.sidebar-toggle.toggled:active,
		.sidebar-toggle.toggled:focus,
		.sidebar-toggle.toggled:hover,
		.toggled .search-toggle:active,
		.toggled .search-toggle:focus,
		.toggled .search-toggle:hover', 'background-color', 'fg1', 2
	),
	array(
		'.toggled .menu-toggle:active,
		.toggled .menu-toggle:focus,
		.toggled .menu-toggle:hover,
		.sidebar-toggle.toggled:active,
		.sidebar-toggle.toggled:focus,
		.sidebar-toggle.toggled:hover,
		.toggled .search-toggle:active,
		.toggled .search-toggle:focus,
		.toggled .search-toggle:hover', 'border-color', 'fg1', 2
	),
	array(
		'.social-navigation,
		.bottom-navigation,
		.site-social', 'border-bottom-color', 'fg1', 2
	),
	array(
		'.secondary-navigation li + li', 'border-left-color', 'fg1', 2
	),
	array(
		'.rtl .secondary-navigation li + li', 'border-right-color', 'fg1', 2
	),
	array(
		'.site-info .sep', 'color', 'fg1', 2
	),

	// #555555
	array(
		'.social-navigation a:focus,
		.secondary-navigation a:focus,
		.bottom-navigation a:focus,
		.site-info a:focus', 'outline-color', 'fg1', 2.625
	),

	// #cccccc
	array(
		'.social-navigation a,
		.secondary-navigation a,
		.bottom-navigation a,
		.site-top,
		.site-info,
		.site-info a,
		#infinite-footer,
		#infinite-footer .blog-info a', 'color', 'fg1', 9.4
	),

	// #ffffff
	array(
		'.toggled .menu-toggle,
		.social-navigation a:active,
		.social-navigation a:focus,
		.social-navigation a:hover,
		.secondary-navigation a:active,
		.secondary-navigation a:focus,
		.secondary-navigation a:hover,
		.bottom-navigation a:active,
		.bottom-navigation a:focus,
		.bottom-navigation a:hover,
		.sidebar-toggle.toggled,
		.toggled .search-toggle,
		.site-info a:active,
		.site-info a:focus,
		.site-info a:hover,
		#infinite-footer .blog-credits a:active,
		#infinite-footer .blog-credits a:focus,
		#infinite-footer .blog-credits a:hover,
		#infinite-footer .blog-info a:active,
		#infinite-footer .blog-info a:focus,
		#infinite-footer .blog-info a:hover', 'color', 'fg1', 14
	),

), __( 'Contrast' ) );

add_color_rule( 'link', '#d11415', array(

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
		.post-link,
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
		.search-form:before,
		a,
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
		.footer-navigation a:active,
		.footer-navigation a:focus,
		.footer-navigation a:hover,
		.comment-navigation a,
		.posts-navigation a,
		.post-navigation a:active .post-title,
		.post-navigation a:focus .post-title,
		.post-navigation a:hover .post-title,
		.sidebar-toggle:active,
		.sidebar-toggle:focus,
		.sidebar-toggle:hover,
		.search-toggle:active,
		.search-toggle:focus,
		.search-toggle:hover,
		.site-title,
		.page-links > span,
		.page-links a:active,
		.page-links a:focus,
		.page-links a:hover,
		.post-link .genericon,
		.required,
		.site-content .contact-form label span,
		#infinite-handle span button,
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
		'abbr,
		acronym', 'border-bottom-color', 'bg', 12
	),
	array(
		'body,
		button,
		input,
		select,
		textarea,
		.menu-toggle,
		.main-navigation a,
		.post-navigation a,
		.sidebar-toggle,
		.widget_tag_cloud a:before,
		.search-toggle,
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
		.wp_widget_tag_cloud a:before', 'color', 'bg', 12
	),

) );

/* Extra CSS */
function canard_extra_css() { ?>
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
	@media screen and (min-width: 960px) {
		.entry-hero .entry-meta,
		.entry-hero .entry-meta a {
			color: #fff !important;
		}
	}
<?php
}
add_theme_support( 'custom_colors_extra_css', 'canard_extra_css' );

/* Additional color palettes */
add_color_palette( array(
    '#ffffff',
    '',
    '#553a99',
    '#222222',
    '',
), 'White and Purple' );

add_color_palette( array(
    '#ffffff',
    '',
    '#e66000',
    '#222222',
    '',
), 'White and Orange' );

add_color_palette( array(
    '#ffffff',
    '',
    '#00a100',
    '#222222',
    '',
), 'White and Green' );

add_color_palette( array(
    '#eeeeee',
    '',
    '#ea4c89',
    '#111111',
    '',
), 'Light Grey and Fuschia' );

add_color_palette( array(
    '#505050',
    '',
    '#ffb900',
    '#a3a3a3',
    '',
), 'Dark Grey and Yellow' );

add_color_palette( array(
    '#222222',
    '',
    '#d11415',
    '#dddddd',
    '',
), 'Black and Red' );