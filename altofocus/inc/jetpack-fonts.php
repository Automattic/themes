<?php

add_filter( 'typekit_add_font_category_rules', 'altofocus_custom_font_rules' );

function altofocus_custom_font_rules( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-family', 'value' => 'sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		pre,
		samp',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1, h2, h3, h4, h5, h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.17em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '.83em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '.67em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '14.0625px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
			array( 'property' => 'font-size', 'value' => '14.0625px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.top-navigation li a',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.top-navigation .children li > a:after,
		.top-navigation .sub-menu li > a:after',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.dropdown-toggle:after',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation-fixed .nav-links a',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-navigation .screen-reader-text,
		.post-navigation .screen-reader-text,
		.posts-navigation .screen-reader-text',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-navigation .nav-next,
		.comment-navigation .nav-previous,
		.post-navigation .nav-next,
		.post-navigation .nav-previous,
		.posts-navigation .nav-next,
		.posts-navigation .nav-previous',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation .meta-nav,
		.post-navigation .meta-nav,
		.posts-navigation .meta-nav',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-body .fn',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);



	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .comment-reply-title small,
		.comment-respond .comment-reply-title small',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title,
		.comment-reply-title,
		.comment-navigation .screen-reader-text,
		.posts-navigation .screen-reader-text,
		.post-navigation .screen-reader-text,
		.posted-on,
		.hfeed .site-main .grid-item-featured:not(.has-post-thumbnail) .entry-header .entry-title,
		.comment-navigation .nav-previous,
		.comment-navigation .nav-next,
		.posts-navigation .nav-previous,
		.posts-navigation .nav-next,
		.post-navigation .nav-previous,
		.post-navigation .nav-next,
		.comment-body .fn',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array( 'screen and (min-width: 37.5em)' )
	);


	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-content,
		.entry-content,
		.entry-summary',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array( 'screen and (min-width: 37.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#secondary .widget_calendar caption',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#secondary .widget_rss li .rsswidget',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#secondary .widget_rss li .rss-date',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#secondary .widget_search .screen-reader-text',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#secondary .widget_calendar caption,
		#secondary .widget-grofile .grofile-meta h4,
		#secondary .widget_recent_entries ul li,
		#secondary .widget_recent_comments .recentcommentstexttop,
		#secondary .widget_recent_comments .recentcommentstextend',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span button,
		#infinite-handle span button:hover',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-branding .site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-size', 'value' => '22.5px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-branding .site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-branding .site-description',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array( 'screen and (min-width: 50em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.byline,
		.byline a,
		.entry-footer,
		.hfeed .hentry .entry-header-wrap .posted-on',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array( 'screen and (min-width: 37.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed .page-header .page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed .search-form .screen-reader-text',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed .hentry .entry-title,
		.hfeed .hentry .entry-header-wrap .entry-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed .hentry .entry-title,
		.hfeed .hentry .entry-header-wrap .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array( 'screen and (min-width: 37.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hfeed .hentry .posted-on',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed .site-main .grid-item-featured:not(.has-post-thumbnail) .entry-header .entry-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed .page-header .page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed:not(.home):not(.blog) .site-main .page-header .page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed:not(.home):not(.blog) .site-main .not-found .page-header .page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content,
		.entry-summary,
		.page-content',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.posted-on',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.byline,
		.byline a,
		.hfeed .hentry .entry-header-wrap .posted-on',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer ul li a,
		.entry-footer',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.single .hentry .entry-title,
		.page .hentry.page .entry-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", "Georgia", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.single .hentry .entry-title,
		.page .hentry.page .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '37.5px' ),
		),
		array( 'screen and (min-width: 37.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.flex-pauseplay a:before',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry .entry-content > #jp-post-flair .jp-relatedposts-items .jp-relatedposts-post,
		.hentry .entry-content > .sd-sharing-enabled .jp-relatedposts-items .jp-relatedposts-post',
		array(
			array( 'property' => 'font-family', 'value' => '"Karla", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	return $category_rules;
}
