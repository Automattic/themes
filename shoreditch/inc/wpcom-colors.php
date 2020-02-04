<?php

add_color_rule( 'bg', '#ffffff', array(

	array(
		'.main-navigation ul ul,
		.site .tiled-gallery-caption,
		.site-header,
		body', 'background-color'
	),

	array(
		'.button,
		.button.minimal:focus,
		.button.minimal:hover,
		.button:focus,
		.button:hover,
		.featured-content .hentry.has-post-thumbnail .button,
		.featured-content .hentry.has-post-thumbnail .button.minimal:focus,
		.featured-content .hentry.has-post-thumbnail .button.minimal:hover,
		.main-navigation .button a,
		.main-navigation .button a:focus,
		.main-navigation .button a:hover,
		.main-navigation .button.minimal a:focus,
		.main-navigation .button.minimal a:hover,
		.page-template-panel-page .hentry.has-post-thumbnail .button,
		.page-template-panel-page .hentry.has-post-thumbnail .button.minimal:focus,
		.page-template-panel-page .hentry.has-post-thumbnail .button.minimal:hover,
		.site-main #infinite-handle span button,
		.site-main #infinite-handle span button:focus,
		.site-main #infinite-handle span button:hover,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		ins,
		mark,
		.milestone-widget .milestone-header', 'color'
	),

	// #f3f3f3
	array(
		'.comment-navigation a:focus,
		.comment-navigation a:hover,
		.comment-navigation:before,
		.main-navigation .button:before,
		.page-links > span,
		.page-links a,
		.post-navigation a:focus,
		.post-navigation a:hover,
		.posts-navigation a:focus,
		.posts-navigation a:hover,
		.posts-navigation:before,
		.site .jetpack-social-navigation a:focus,
		.site .jetpack-social-navigation a:hover,
		.site .jetpack_widget_social_icons a:focus,
		.site .jetpack_widget_social_icons a:hover,
		.site .widget_wpcom_social_media_icons_widget a:focus,
		.site .widget_wpcom_social_media_icons_widget a:hover,
		.widget_calendar tbody a,
		.widget_tag_cloud .tagcloud a,
		code,
		hr,
		input[type="color"],
		input[type="date"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="email"],
		input[type="month"],
		input[type="number"],
		input[type="password"],
		input[type="range"],
		input[type="search"],
		input[type="tel"],
		input[type="text"],
		input[type="time"],
		input[type="url"],
		input[type="week"],
		kbd,
		select,
		textarea,
		tt,
		var,
		.widget_tag_cloud > div a,
		.wp_widget_tag_cloud > div a', 'background-color', 'bg', '1.1'
	),

	array(
		'.comment-navigation,
		.entry-author,
		.jetpack_subscription_widget .success,
		.jetpack_subscription_widget form,
		.post-navigation a,
		.posts-navigation,
		.site .jetpack-social-navigation a,
		.site .jetpack-testimonial,
		.site .testimonial-entry,
		.site .jetpack_widget_social_icons a,
		.site .widget_wpcom_social_media_icons_widget a,
		.site .wp-playlist,
		fieldset,
		pre,
		table,
		td,
		th,
		.milestone-widget .milestone-countdown,
		.milestone-widget .milestone-message,
		.widget.top_rated .pd_top_rated_holder_posts > p,
		.widget.top_rated ul,
		.widget_blog_subscription .success,
		.widget_blog_subscription form', 'border-color', 'bg', '1.1'
	),

	array(
		'.comment-list > li,
		.featured-content,
		.header-image,
		.hentry,
		.page-header,
		.post-navigation,
		.sd-like.jetpack-likes-widget-wrapper,
		.sd-sharing-enabled:not(#jp-post-flair),
		.site .wp-playlist-item,
		.site-header,
		.widget_archive ul,
		.widget_categories ul,
		.widget_goodreads div[class^="gr_custom_each_container"]:last-of-type,
		.widget_links ul,
		.widget_meta ul,
		.widget_nav_menu ul,
		.widget_pages ul,
		.widget_recent_comments ul,
		.widget_recent_entries ul,
		.widget_rss ul,
		.widget_rss_links p:last-of-type,
		.widget_rss_links ul,
		.widget_top-posts ul,
		.wp-caption .wp-caption-text,
		div#jp-relatedposts,
		.hentry .wpcom-reblog-snapshot .reblogger-note,
		.widget_authors ul,
		.widget_jp_blogs_i_follow ol,
		.widget_top-clicks ul,
		.widget_top-posts ul,
		.widget_upcoming_events_widget ul', 'border-bottom-color', 'bg', '1.1'
	),

	array(
		'#infinite-handle,
		.comment-navigation + .comment-respond,
		.comments-area,
		.comments-wrapper + .comment-respond,
		.featured-content .flex-control-paging,
		.infinite-wrap,
		.sd-rating + .sd-sharing-enabled:not(#jp-post-flair),
		.site-footer,
		.site-main .infinite-loader,
		.widget-footer-bottom-area,
		.widget_archive li,
		.widget_categories li,
		.widget_goodreads div[class^="gr_custom_each_container"],
		.widget_links li,
		.widget_meta li,
		.widget_nav_menu li,
		.widget_pages li,
		.widget_recent_comments li,
		.widget_recent_entries li,
		.widget_rss li,
		.widget_rss_links li,
		.widget_rss_links p,
		.widget_top-posts li,
		#comments .comments-wrapper + #respond,
		.widget_authors li,
		.widget_jp_blogs_i_follow li,
		.widget_top-clicks li,
		.widget_top-posts li,
		.widget_upcoming_events_widget li', 'border-top-color', 'bg', '1.1'
	),

	array(
		'.comment-metadata .edit-link:before,
		.entry-footer > span:not(:last-child):after,
		.main-navigation ul,
		.sep,
		#comments #comment-form-share-text-padder,
		#comments #respond #comment-form-comment,
		#comments #respond .comment-form-fields div.comment-form-input', 'color', 'bg', '1.1'
	),

	array(
		'.widget-footer-top-area select option', 'color', 'fg2'
	),

), __( 'Background' ) );

add_color_rule( 'txt', '#73757D', array(

	array(
		'.author-title,
		.page-title span,
		.post-navigation .meta-nav,
		.site .jetpack-social-navigation a,
		.site .tiled-gallery-caption,
		.site-info a,
		body,
		input,
		select,
		textarea,
		#comments #comment-form-share-text-padder textarea,
		#comments #respond #comment-form-comment textarea,
		#comments #respond #comment-form-identity #comment-form-nascar p,
		#comments #respond #comment-form-load-service p,
		#comments #respond .comment-form-fields div.comment-form-input input,
		#comments #respond .comment-form-fields label,
		#comments #respond .comment-form-fields label span.nopublish,
		#comments #respond .comment-form-fields label span.required,
		#comments #respond .comment-form-fields p.comment-form-log-out,
		#comments #respond .comment-form-fields p.comment-form-posting-as,
		#comments #respond form *,
		#comments #respond p.comment-subscription-form label', 'color', 'bg', 2
	),

	array(
		':-moz-placeholder', 'color', 'bg', 2
	),

	array(
		'::-moz-placeholder', 'color', 'bg', 2
	),

	array(
		':-ms-input-placeholder', 'color', 'bg', 2
	),

	array(
		'::-webkit-input-placeholder', 'color', 'bg', 2
	),

	array(
		'::input-placeholder', 'color', 'bg', 2
	),

), __( 'Text' ) );

add_color_rule( 'link', '#2c313f', array(

	array(
		'.back-top,
		.button:focus,
		.button:hover,
		.search-form .search-submit:focus:before,
		.search-form .search-submit:hover:before,
		.site-main #infinite-handle span button:focus,
		.site-main #infinite-handle span button:hover,
		button:focus,
		button:hover,
		input[type="button"]:focus,
		input[type="button"]:hover,
		input[type="reset"]:focus,
		input[type="reset"]:hover,
		input[type="submit"]:focus,
		input[type="submit"]:hover', 'background-color', 'bg', 2
	),

	array(
		'.site-content-wrapper .widget-area', 'border-top-color', 'bg', 2
	),

	array(
		'.author-name,
		.entry-header,
		.main-navigation a,
		.no-comments,
		.site .testimonial-entry-title,
		.site .jetpack_widget_social_icons a,
		.site .widget_wpcom_social_media_icons_widget a,
		.site .wp-playlist-light .wp-playlist-caption,
		.site-title,
		.site-title a:focus,
		.site-title a:hover,
		.widget_akismet_widget .a-stats,
		.widget_goodreads div[class^="gr_custom_title"] a,
		.widget_goodreads div[class^=gr_custom_container] a,
		a,
		blockquote cite,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		label,
		.widget_flickr #flickr_badge_uber_wrapper td a:last-child', 'color', 'bg', 2
	),

), __( 'Headers & Links' ) );

add_color_rule( 'fg1', '#3e69dc', array(

	array(
		'.button,
		.button.minimal:focus,
		.button.minimal:hover,
		.featured-content .flex-control-paging .flex-active,
		.featured-content .flex-control-paging a:hover,
		.featured-content .hentry.has-post-thumbnail .button,
		.featured-content .hentry.has-post-thumbnail .button.minimal:focus,
		.featured-content .hentry.has-post-thumbnail .button.minimal:hover,
		.main-navigation .button.minimal a:focus,
		.page-template-panel-page .hentry.has-post-thumbnail .button,
		.page-template-panel-page .hentry.has-post-thumbnail .button.minimal:focus,
		.page-template-panel-page .hentry.has-post-thumbnail .button.minimal:hover,
		.search-form .search-submit:before,
		.site-main #infinite-handle span button,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		ins,
		mark,
		.milestone-widget .milestone-header', 'background-color', 'bg', 2
	),

	array(
		'.featured-content .flex-control-paging a,
		.main-navigation .primary-menu .current-menu-item > a,
		.main-navigation .primary-menu .current_page_ancestor > a,
		.main-navigation .primary-menu .current_page_item > a,
		blockquote,
		#comments #respond #comment-form-comment.active,
		#comments #respond .comment-form-fields div.comment-form-input.active', 'border-color', 'bg', 2
	),

	array(
		'.button.minimal,
		.comment-metadata a:focus,
		.comment-metadata a:hover,
		.comment-navigation .nav-next a:after,
		.comment-navigation .nav-previous a:before,
		.comment-reply-link:after,
		.entry-footer a:focus,
		.entry-footer a:hover,
		.entry-header a:focus,
		.entry-header a:hover,
		.infinite-loader .spinner div,
		.main-navigation .button.minimal a,
		.main-navigation .menu-item-has-children > a:after,
		.main-navigation a:focus,
		.main-navigation a:hover,
		.post-navigation a:focus .post-title,
		.post-navigation a:hover .post-title,
		.posts-navigation .nav-next a:after,
		.posts-navigation .nav-previous a:before,
		.site .jetpack-social-navigation a:focus,
		.site .jetpack-social-navigation a:hover,
		.site .jetpack_widget_social_icons a:focus,
		.site .jetpack_widget_social_icons a:hover,
		.site .widget_wpcom_social_media_icons_widget a:focus,
		.site .widget_wpcom_social_media_icons_widget a:hover,
		.site .wp-playlist-light a.wp-playlist-caption:focus,
		.site .wp-playlist-light a.wp-playlist-caption:hover,
		.site-info a:focus,
		.site-info a:hover,
		.site-title a,
		.widget_akismet_widget .a-stats a:focus,
		.widget_akismet_widget .a-stats a:hover,
		.widget_goodreads div[class^="gr_custom_title"] a:focus,
		.widget_goodreads div[class^="gr_custom_title"] a:hover,
		.widget_goodreads div[class^=gr_custom_container] a:focus,
		.widget_goodreads div[class^=gr_custom_container] a:hover,
		a:focus,
		a:hover,
		#comments #respond .comment-form-service a:focus,
		#comments #respond .comment-form-service a:hover,
		#comments #respond .form-submit,
		.widget_flickr #flickr_badge_uber_wrapper td a:last-child:focus,
		.widget_flickr #flickr_badge_uber_wrapper td a:last-child:hover', 'color', 'bg', 2
	),

	array(
		'input[type="color"]:focus,
		input[type="date"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="email"]:focus,
		input[type="month"]:focus,
		input[type="number"]:focus,
		input[type="password"]:focus,
		input[type="range"]:focus,
		input[type="search"]:focus,
		input[type="tel"]:focus,
		input[type="text"]:focus,
		input[type="time"]:focus,
		input[type="url"]:focus,
		input[type="week"]:focus,
		select:focus,
		textarea:focus', 'outline-color', 'bg', 2
	),

	array(
		'.featured-content .hentry.has-post-thumbnail .button:focus,
		.featured-content .hentry.has-post-thumbnail .button:hover,
		.page-template-panel-page .hentry.has-post-thumbnail .button:focus,
		.page-template-panel-page .hentry.has-post-thumbnail .button:hover', 'color', '#ffffff', 2
	),

), __( 'Buttons & Highlights' ) );

add_color_rule( 'fg2', '#3e69dc', array(

	array(
		'#infinite-footer,
		.widget-footer-top-area', 'background-color'
	),

	array(
		'.widget-footer-top-area .button,
		.widget-footer-top-area .button.minimal:focus,
		.widget-footer-top-area .button.minimal:hover,
		.widget-footer-top-area .milestone-widget .milestone-header,
		.widget-footer-top-area button,
		.widget-footer-top-area input[type="button"],
		.widget-footer-top-area input[type="reset"],
		.widget-footer-top-area input[type="submit"]', 'color'
	),

	// #fff
	array(
		'.widget-footer-top-area .button,
		.widget-footer-top-area .button.minimal:focus,
		.widget-footer-top-area .button.minimal:hover,
		.widget-footer-top-area .search-form .search-submit:before,
		.widget-footer-top-area button,
		.widget-footer-top-area input[type="button"],
		.widget-footer-top-area input[type="reset"],
		.widget-footer-top-area input[type="submit"],
		.widget-footer-top-area .milestone-widget .milestone-header', 'background-color', 'fg2', '21'
	),

	array(
		'.widget-footer-top-area .milestone-widget .milestone-countdown,
		.widget-footer-top-area .milestone-widget .milestone-message', 'border-color', 'fg2', '21'
	),

	array(
		'#infinite-footer .blog-credits,
		#infinite-footer .blog-credits a,
		#infinite-footer .blog-credits a:hover,
		#infinite-footer .blog-info a,
		#infinite-footer .blog-info a:hover,
		.widget-footer-top-area,
		.widget-footer-top-area .button:focus,
		.widget-footer-top-area .button:hover,
		.widget-footer-top-area .button.minimal,
		.widget-footer-top-area .testimonial-entry-title,
		.widget-footer-top-area .widget_akismet_widget .a-stats a:focus,
		.widget-footer-top-area .widget_akismet_widget .a-stats a:hover,
		.widget-footer-top-area .widget_goodreads div[class^="gr_custom_title"] a:focus,
		.widget-footer-top-area .widget_goodreads div[class^="gr_custom_title"] a:hover,
		.widget-footer-top-area .widget_goodreads div[class^=gr_custom_container] a:focus,
		.widget-footer-top-area .widget_goodreads div[class^=gr_custom_container] a:hover,
		.widget-footer-top-area .jetpack_widget_social_icons a:focus,
		.widget-footer-top-area .jetpack_widget_social_icons a:hover,
		.widget-footer-top-area .widget_wpcom_social_media_icons_widget a:focus,
		.widget-footer-top-area .widget_wpcom_social_media_icons_widget a:hover,
		.widget-footer-top-area .wp-playlist-light a.wp-playlist-caption:focus,
		.widget-footer-top-area .wp-playlist-light a.wp-playlist-caption:hover,
		.widget-footer-top-area button:focus,
		.widget-footer-top-area input[type="button"]:focus,
		.widget-footer-top-area input[type="reset"]:focus,
		.widget-footer-top-area input[type="submit"]:focus,
		.widget-footer-top-area button:hover,
		.widget-footer-top-area input[type="button"]:hover,
		.widget-footer-top-area input[type="reset"]:hover,
		.widget-footer-top-area input[type="submit"]:hover,
		.widget-footer-top-area input,
		.widget-footer-top-area label,
		.widget-footer-top-area select,
		.widget-footer-top-area textarea,
		.widget-footer-top-area .widget_flickr #flickr_badge_uber_wrapper td a:last-child:focus,
		.widget-footer-top-area .widget_flickr #flickr_badge_uber_wrapper td a:last-child:hover', 'color', 'fg2', '21'
	),

	array(
		'.widget-footer-top-area :-moz-placeholder', 'color', 'fg2', '21'
	),

	array(
		'.widget-footer-top-area :-ms-input-placeholder', 'color', 'fg2', '21'
	),

	array(
		'.widget-footer-top-area ::-moz-placeholder', 'color', 'fg2', '21'
	),

	array(
		'.widget-footer-top-area ::-webkit-input-placeholder', 'color', 'fg2', '21'
	),

	array(
		'.widget-footer-top-area ::input-placeholder', 'color', 'fg2', '21'
	),

	array(
		'.widget-footer-top-area input[type="color"]:focus,
		.widget-footer-top-area input[type="date"]:focus,
		.widget-footer-top-area input[type="datetime"]:focus,
		.widget-footer-top-area input[type="datetime-local"]:focus,
		.widget-footer-top-area input[type="email"]:focus,
		.widget-footer-top-area input[type="month"]:focus,
		.widget-footer-top-area input[type="number"]:focus,
		.widget-footer-top-area input[type="password"]:focus,
		.widget-footer-top-area input[type="range"]:focus,
		.widget-footer-top-area input[type="search"]:focus,
		.widget-footer-top-area input[type="tel"]:focus,
		.widget-footer-top-area input[type="text"]:focus,
		.widget-footer-top-area input[type="time"]:focus,
		.widget-footer-top-area input[type="url"]:focus,
		.widget-footer-top-area input[type="week"]:focus,
		.widget-footer-top-area select:focus,
		.widget-footer-top-area textarea:focus', 'outline-color', 'fg2', '21'
	),

	// rgba(255, 255, 255, 0.75)
	array(
		'.widget-footer-top-area .testimonial-entry,
		.widget-footer-top-area .widget.top_rated .pd_top_rated_holder_posts > p,
		.widget-footer-top-area .widget.top_rated ul', 'border-color', 'fg2', '3.75'
	),

	array(
		'.widget-footer-top-area .wp-caption .wp-caption-text', 'border-bottom-color', 'fg2', '3.75'
	),

	array(
		'.widget-footer-top-area .widget_akismet_widget .a-stats,
		.widget-footer-top-area .widget_goodreads div[class^="gr_custom_title"] a,
		.widget-footer-top-area .widget_goodreads div[class^=gr_custom_container] a,
		.widget-footer-top-area .jetpack_widget_social_icons a,
		.widget-footer-top-area .widget_wpcom_social_media_icons_widget a,
		.widget-footer-top-area .wp-playlist-light .wp-playlist-caption,
		.widget-footer-top-area a,
		.widget-footer-top-area .widget_flickr #flickr_badge_uber_wrapper td a:last-child', 'color', 'fg2', '3.75'
	),

	// rgba(255, 255, 255, 0.5)
	array(
		'.widget-footer-top-area .search-form .search-submit:focus:before,
		.widget-footer-top-area .search-form .search-submit:hover:before', 'background-color', 'fg2', '2.5'
	),

	// rgba(255, 255, 255, 0.25)
	array(
		'.widget-footer-top-area .button:focus,
		.widget-footer-top-area .button:hover,
		.widget-footer-top-area .widget_tag_cloud .tagcloud a,
		.widget-footer-top-area .jetpack_widget_social_icons a:focus,
		.widget-footer-top-area .jetpack_widget_social_icons a:hover,
		.widget-footer-top-area .widget_wpcom_social_media_icons_widget a:focus,
		.widget-footer-top-area .widget_wpcom_social_media_icons_widget a:hover,
		.widget-footer-top-area button:focus,
		.widget-footer-top-area input[type="button"]:focus,
		.widget-footer-top-area input[type="reset"]:focus,
		.widget-footer-top-area input[type="submit"]:focus,
		.widget-footer-top-area button:hover,
		.widget-footer-top-area input[type="button"]:hover,
		.widget-footer-top-area input[type="reset"]:hover,
		.widget-footer-top-area input[type="submit"]:hover,
		.widget-footer-top-area input[type="color"],
		.widget-footer-top-area input[type="date"],
		.widget-footer-top-area input[type="datetime"],
		.widget-footer-top-area input[type="datetime-local"],
		.widget-footer-top-area input[type="email"],
		.widget-footer-top-area input[type="month"],
		.widget-footer-top-area input[type="number"],
		.widget-footer-top-area input[type="password"],
		.widget-footer-top-area input[type="range"],
		.widget-footer-top-area input[type="search"],
		.widget-footer-top-area input[type="tel"],
		.widget-footer-top-area input[type="text"],
		.widget-footer-top-area input[type="time"],
		.widget-footer-top-area input[type="url"],
		.widget-footer-top-area input[type="week"],
		.widget-footer-top-area select,
		.widget-footer-top-area textarea,
		.widget-footer-top-area code,
		.widget-footer-top-area kbd,
		.widget-footer-top-area tt,
		.widget-footer-top-area var,
		.widget-footer-top-area .widget_tag_cloud > div a,
		.widget-footer-top-area .wp_widget_tag_cloud > div a', 'background-color', 'fg2', '1.25'
	),

	array(
		'.widget-footer-top-area pre,
		.widget-footer-top-area .jetpack_subscription_widget .success,
		.widget-footer-top-area .jetpack_subscription_widget form,
		.widget-footer-top-area .widget_rss_links li,
		.widget-footer-top-area .jetpack_widget_social_icons a,
		.widget-footer-top-area .widget_wpcom_social_media_icons_widget a,
		.widget-footer-top-area .wp-playlist,
		.widget-footer-top-area .widget_blog_subscription .success,
		.widget-footer-top-area .widget_blog_subscription form', 'border-color', 'fg2', '1.25'
	),

	array(
		'.widget-footer-top-area .widget_archive ul,
		.widget-footer-top-area .widget_categories ul,
		.widget-footer-top-area .widget_goodreads div[class^="gr_custom_each_container"]:last-of-type,
		.widget-footer-top-area .widget_links ul,
		.widget-footer-top-area .widget_meta ul,
		.widget-footer-top-area .widget_nav_menu ul,
		.widget-footer-top-area .widget_pages ul,
		.widget-footer-top-area .widget_recent_comments ul,
		.widget-footer-top-area .widget_recent_entries ul,
		.widget-footer-top-area .widget_rss ul,
		.widget-footer-top-area .widget_rss_links p:last-of-type,
		.widget-footer-top-area .widget_rss_links ul,
		.widget-footer-top-area .widget_top-posts ul,
		.widget-footer-top-area .wp-playlist-item,
		.widget-footer-top-area .widget_authors ul,
		.widget-footer-top-area .widget_jp_blogs_i_follow ol,
		.widget-footer-top-area .widget_top-clicks ul,
		.widget-footer-top-area .widget_top-posts ul,
		.widget-footer-top-area .widget_upcoming_events_widget ul', 'border-bottom-color', 'fg2', '1.25'
	),

	array(
		'.widget-footer-top-area .widget_archive li,
		.widget-footer-top-area .widget_categories li,
		.widget-footer-top-area .widget_goodreads div[class^="gr_custom_each_container"],
		.widget-footer-top-area .widget_links li,
		.widget-footer-top-area .widget_meta li,
		.widget-footer-top-area .widget_nav_menu li,
		.widget-footer-top-area .widget_pages li,
		.widget-footer-top-area .widget_recent_comments li,
		.widget-footer-top-area .widget_recent_entries li,
		.widget-footer-top-area .widget_rss li,
		.widget-footer-top-area .widget_rss_links p,
		.widget-footer-top-area .widget_top-posts li,
		.widget-footer-top-area .widget_authors li,
		.widget-footer-top-area .widget_jp_blogs_i_follow li,
		.widget-footer-top-area .widget_top-clicks li,
		.widget-footer-top-area .widget_top-posts li,
		.widget-footer-top-area .widget_upcoming_events_widget li', 'border-top-color', 'fg2', '1.25'
	),

), __( 'Widget Top Footer Area' ) );

/* Additional color palettes */
add_color_palette( array(
    '#ffffff',
    '#73757D',
    '#2c313f',
    '#d82620',
    '#d82620',
), 'Red' );

add_color_palette( array(
    '#ffffff',
    '#73757D',
    '#2c313f',
    '#0e853b',
    '#0e853b',
), 'Green' );

add_color_palette( array(
    '#ffffff',
    '#73757D',
    '#2c313f',
    '#fdb000',
    '#2c313f',
), 'Orange & Dark Grey' );

add_color_palette( array(
    '#ffffff',
    '#000000',
    '#000000',
    '#14cca7',
    '#f2f2f2',
), 'Black, Turquoise & Light Grey' );

add_color_palette( array(
    '#ffffff',
    '#646a70',
    '#66c7f4',
    '#ec3e52',
    '#6c6ea0',
), 'Cyan, Red & Purple' );

add_color_palette( array(
    '#303030',
    '#ffffff',
    '#d0d0d0',
    '#3e69dc',
    '#3e69dc',
), 'Dark' );
