<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace, monospace' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bolder' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		samp',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace, monospace' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input,
		optgroup,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'::-webkit-file-upload-button',
		array(
			array( 'property' => 'font', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.button,
		button,
		.entry .entry-content .wp-block-file,
		.entry .entry-content .wp-block-file .wp-block-file__button,
		input,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		optgroup,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#cancel-comment-reply-link,
		.comment-metadata,
		.comment-reply-link,
		.discussion-meta-info,
		.entry-footer,
		.entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-description .author-link,
		.comment-author .fn,
		.comments-title,
		.error-404 .page-title,
		.main-navigation,
		.no-comments,
		.not-found .page-title,
		.page-description,
		.page-links,
		.pagination .nav-links,
		.post-navigation .post-title,
		.site-info,
		.site-title,
		.sticky-post,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		img:after',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-description .author-link,
		.comment-author .fn,
		.comments-title,
		.error-404 .page-title,
		.main-navigation,
		.no-comments,
		.not-found .page-title,
		.page-description,
		.pagination .nav-links,
		.post-navigation .post-title,
		.site-title,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title,
		.error-404 .page-title,
		.has-larger-font-size,
		.not-found .page-title,
		h1',
		array(
			array( 'property' => 'font-size', 'value' => '1.6875em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title,
		.error-404 .page-title,
		.has-larger-font-size,
		.not-found .page-title,
		h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.25em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.wp-block-cover h2,
		.wp-block-cover-image h2,
		h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.6875em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.has-large-font-size,
		.has-regular-font-size,
		h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.125em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-author .fn,
		.nav-links,
		.no-comments,
		.page-description,
		.page-title,
		.site-description,
		.site-title,
		h2.author-title,
		h4,
		p.author-bio',
		array(
			array( 'property' => 'font-size', 'value' => '1.125em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content,
		.pagination .nav-links,
		h5',
		array(
			array( 'property' => 'font-size', 'value' => '0.88889em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#cancel-comment-reply-link,
		.comment-metadata,
		.comment-notes,
		.comment-reply-link,
		.discussion-meta-info,
		.entry-footer,
		.entry-meta,
		.has-small-font-size,
		.site-description,
		.sticky-post,
		h6,
		img:after',
		array(
			array( 'property' => 'font-size', 'value' => '0.88889em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-info',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-description,
		.page-links a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre',
		array(
			array( 'property' => 'font-size', 'value' => '0.88889em' ),
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font-size', 'value' => '0.88889em' ),
			array( 'property' => 'font-family', 'value' => 'Menlo, monaco, Consolas, Lucida Console, monospace' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '125%' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="ar"] .site *,
		html[lang="ary"] .site *,
		html[lang="azb"] .site *,
		html[lang="ckb"] .site *,
		html[lang="fa-IR"] .site *,
		html[lang="haz"] .site *,
		html[lang="ps"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => 'Tahoma, Arial, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="be"] .site *,
		html[lang="bg-BG"] .site *,
		html[lang="kk"] .site *,
		html[lang="mk-MK"] .site *,
		html[lang="mn"] .site *,
		html[lang="ru-RU"] .site *,
		html[lang="sah"] .site *,
		html[lang="sr-RS"] .site *,
		html[lang="tt-RU"] .site *,
		html[lang="uk"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => '\'Helvetica Neue\', Helvetica, \'Segoe UI\', Arial, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="zh-HK"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, \'PingFang HK\', \'Helvetica Neue\', "Microsoft YaHei New", STHeiti Light, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="zh-TW"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, \'PingFang TC\', \'Helvetica Neue\', "Microsoft YaHei New", STHeiti Light, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="zh-CN"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, \'PingFang SC\', \'Helvetica Neue\', "Microsoft YaHei New", STHeiti Light, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="bn-BD"] .site *,
		html[lang="hi-IN"] .site *,
		html[lang="mr"] .site *,
		html[lang="ne-NP"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="el"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => '\'Helvetica Neue\', Helvetica, Arial, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="gu"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="he-IL"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => '\'Arial Hebrew\', Arial, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="ja"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Hiragino Sans", Meiryo, "Helvetica Neue", sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="ko-KR"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => '\'Apple SD Gothic Neo\', \'Malgun Gothic\', \'Nanum Gothic\', Dotum, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="th"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => '\'Sukhumvit Set\', \'Helvetica Neue\', helvetica, arial, sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="vi"] .site *',
		array(
			array( 'property' => 'font-family', 'value' => '\'Libre Franklin\', sans-serif !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'table',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'th',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.button,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '0.88889em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.contact-form label',
		array(
			array( 'property' => 'font-weight', 'value' => '600 !important' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation button',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.main-navigation .main-menu > li > a',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.main-navigation .sub-menu > li.mobile-parent-nav-menu-item',
		array(
			array( 'property' => 'font-size', 'value' => '0.88889em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .main-menu .menu-item-has-children:not(.off-canvas):focus-within > .sub-menu .sub-menu > li > a::before',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .main-menu .menu-item-has-children.is-focused:not(.off-canvas) > .sub-menu .sub-menu > li > a::before,
		.main-navigation .main-menu .menu-item-has-children:not(.off-canvas):focus > .sub-menu .sub-menu > li > a::before,
		.main-navigation .main-menu .menu-item-has-children:not(.off-canvas):hover > .sub-menu .sub-menu > li > a::before',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation .nav-next,
		.comment-navigation .nav-previous',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.screen-reader-text:focus',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.125em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-header.featured-image .site-featured-image .entry-header .entry-meta',
		array(
			array( 'property' => 'font-weight', 'value' => '500' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sticky-post',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry .entry-footer,
		.entry .entry-meta',
		array(
			array( 'property' => 'font-weight', 'value' => '500' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author-bio .author-description',
		array(
			array( 'property' => 'font-size', 'value' => '1.125em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond > small',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-list .pingback .comment-body,
		.comment-list .trackback .comment-body',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
			array( 'property' => 'font-weight', 'value' => '500' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-list .pingback .comment-body a:not(.comment-edit-link),
		.comment-list .trackback .comment-body a:not(.comment-edit-link)',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '19.55556px' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-list .pingback .comment-body .comment-edit-link,
		.comment-list .trackback .comment-body .comment-edit-link',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => '500' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment .comment-metadata .comment-edit-link,
		.comment .comment-metadata > a',
		array(
			array( 'property' => 'font-weight', 'value' => '500' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#cancel-comment-reply-link,
		.comment-reply-link',
		array(
			array( 'property' => 'font-weight', 'value' => '500' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-form .comment-notes,
		.comment-form label',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.archive .page-header .page-description:after,
		.archive .page-header .search-term:after,
		.error404 .page-header .page-description:after,
		.error404 .page-header .search-term:after,
		.search .page-header .page-description:after,
		.search .page-header .search-term:after',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.archive .page-header .page-description',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_archive ul li,
		.widget_categories ul li,
		.widget_meta ul li,
		.widget_nav_menu ul li,
		.widget_pages ul li,
		.widget_recent_comments ul li,
		.widget_recent_entries ul li,
		.widget_rss ul li',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => 'calc(22px * 1.125)' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_archive ul ul > li > a::before,
		.widget_categories ul ul > li > a::before,
		.widget_meta ul ul > li > a::before,
		.widget_nav_menu ul ul > li > a::before,
		.widget_pages ul ul > li > a::before,
		.widget_recent_comments ul ul > li > a::before,
		.widget_recent_entries ul ul > li > a::before,
		.widget_rss ul ul > li > a::before',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_tag_cloud .tagcloud',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry .entry-content .wp-block-button .wp-block-button__link',
		array(
			array( 'property' => 'font-size', 'value' => '0.88889em' ),
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry .entry-content .wp-block-archives li,
		.entry .entry-content .wp-block-categories li,
		.entry .entry-content .wp-block-latest-posts li',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => 'calc(22px * 1.125)' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry .entry-content .wp-block-categories ul > li > a::before',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry .entry-content .wp-block-preformatted',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry .entry-content .wp-block-verse',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry .entry-content .has-drop-cap:not(:focus):first-letter',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '5.7375em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry .entry-content .wp-block-pullquote p',
		array(
			array( 'property' => 'font-size', 'value' => '1.6875em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry .entry-content .wp-block-pullquote p em',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text,
		.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		.entry .entry-content .wp-block-audio figcaption,
		.entry .entry-content .wp-block-video figcaption,
		.entry .entry-content .wp-block-image figcaption,
		.entry .entry-content .wp-block-gallery .blocks-gallery-image figcaption,
		.entry .entry-content .wp-block-gallery .blocks-gallery-item figcaption,
		.entry .entry-content .wp-block-verse,
		.entry .entry-content .wp-block-pullquote cite',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_links li',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => '700' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_jp_blogs_i_follow li,
		.widget_rss_links li.widget_archive ul li,
		.widget_archive ul li,
		.widget_categories ul li,
		.widget_meta ul li,
		.widget_nav_menu ul li,
		.widget_pages ul li,
		.widget_recent_comments ul li,
		.widget_recent_entries ul li,
		.widget_rss ul li,
		.entry .entry-content .wp-block-archives li,
		.entry .entry-content .wp-block-categories li,
		.entry .entry-content .wp-block-latest-posts li',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-main #infinite-handle span button,
		.site-main #infinite-handle span button:focus,
		.site-main #infinite-handle span button:hover',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry div.sharedaddy h3.sd-title,
		.entry h3.sd-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry #jp-relatedposts h3.jp-relatedposts-headline',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry #jp-relatedposts .jp-relatedposts-items .jp-relatedposts-post,
		.entry #jp-relatedposts .jp-relatedposts-items-visual h4.jp-relatedposts-post-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry #jp-relatedposts .jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-context,
		.entry #jp-relatedposts .jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-date',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_authors > ul > li > a',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_eu_cookie_law_widget #eu-cookie-law',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_rss_links li',
		array(
			array( 'property' => 'font-family', 'value' => '"Crimson Text", "Baskerville Old Face", Garamond, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-block-jetpack-mailchimp #wp-block-jetpack-mailchimp_consent-text',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
		)
	);

	return $category_rules;
} );
