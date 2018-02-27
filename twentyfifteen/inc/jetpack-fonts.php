<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'caption,
		td,
		th',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2:not(.site-description),
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Serif", serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote em,
		blockquote i',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote b,
		blockquote strong',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'address',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
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
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '125%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'th',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'::-webkit-input-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		':-moz-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'::-moz-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		':-ms-input-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .current-menu-item > a,
		.main-navigation .current_page_ancestor > a,
		.main-navigation .current_page_item > a',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .menu-item-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation .meta-nav',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation .post-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pagination',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pagination .current',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation,
		.image-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .skip-link',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.logged-in .site .skip-link',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-family', 'value' => '"Open Sans", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '22px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input,
		.widget select,
		.widget textarea',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_calendar caption',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Serif", serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_calendar tbody a',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rsswidget',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h1,
		.entry-content h1,
		.entry-summary h1,
		.page-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h2,
		.entry-content h2,
		.entry-summary h2,
		.page-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h3,
		.entry-content h3,
		.entry-summary h3,
		.page-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h4,
		.comment-content h5,
		.comment-content h6,
		.entry-content h4,
		.entry-content h5,
		.entry-content h6,
		.entry-summary h4,
		.entry-summary h5,
		.entry-summary h6,
		.page-content h4,
		.page-content h5,
		.page-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author-heading',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author-bio',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sticky-post',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links > span,
		.page-links a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-caption',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.format-aside .entry-title,
		.format-audio .entry-title,
		.format-chat .entry-title,
		.format-gallery .entry-title,
		.format-image .entry-title,
		.format-link .entry-title,
		.format-quote .entry-title,
		.format-status .entry-title,
		.format-video .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		.comments-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata,
		.pingback .edit-link',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-list .reply',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-list .reply a',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-form label',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-awaiting-moderation,
		.comment-notes,
		.form-allowed-tags,
		.logged-in-as',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.no-comments',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-info',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'screen and (min-width: 38.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.post-password-form input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .menu-item-description',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label,
		.post-navigation .meta-nav,
		.image-navigation,
		.comment-navigation,
		.author-heading,
		.author-bio,
		.entry-footer,
		.page-links a,
		.page-links span,
		.comment-metadata,
		.pingback .edit-link,
		.comment-list .reply,
		.comment-notes,
		.comment-awaiting-moderation,
		.logged-in-as,
		.comment-form label,
		.form-allowed-tags,
		.site-info,
		.wp-caption-text,
		.gallery-caption,
		.entry-caption',
			array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '29px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote cite,
		.widget blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '35px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.entry-summary h1,
		.page-content h1,
		.comment-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '35px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2,
		.entry-summary h2,
		.page-content h2,
		.comment-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '29px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3,
		.entry-summary h3,
		.page-content h3,
		.comment-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4,
		.entry-summary h4,
		.page-content h4,
		.comment-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5,
		.entry-content h6,
		.entry-summary h5,
		.entry-summary h6,
		.page-content h5,
		.page-content h6,
		.comment-content h5,
		.comment-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title,
		.comments-title,
		.comment-reply-title,
		.post-navigation .post-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.format-aside .entry-title,
		.format-image .entry-title,
		.format-video .entry-title,
		.format-quote .entry-title,
		.format-gallery .entry-title,
		.format-status .entry-title,
		.format-link .entry-title,
		.format-audio .entry-title,
		.format-chat .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array( 'screen and (min-width: 46.25em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.post-password-form input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .menu-item-description',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label,
		.post-navigation .meta-nav,
		.image-navigation,
		.comment-navigation,
		.author-heading,
		.author-bio,
		.entry-footer,
		.page-links a,
		.page-links span,
		.comment-metadata,
		.pingback .edit-link,
		.comment-list .reply,
		.comment-notes,
		.comment-awaiting-moderation,
		.logged-in-as,
		.comment-form label,
		.form-allowed-tags,
		.site-info,
		.wp-caption-text,
		.gallery-caption,
		.entry-caption',
			array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote cite,
		.widget blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '39px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.entry-summary h1,
		.page-content h1,
		.comment-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '39px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2,
		.entry-summary h2,
		.page-content h2,
		.comment-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3,
		.entry-summary h3,
		.page-content h3,
		.comment-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '27px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4,
		.entry-summary h4,
		.page-content h4,
		.comment-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5,
		.entry-content h6,
		.entry-summary h5,
		.entry-summary h6,
		.page-content h5,
		.page-content h6,
		.comment-content h5,
		.comment-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title,
		.comments-title,
		.comment-reply-title,
		.post-navigation .post-title',
		array(
			array( 'property' => 'font-size', 'value' => '27px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.format-aside .entry-title,
		.format-image .entry-title,
		.format-video .entry-title,
		.format-quote .entry-title,
		.format-gallery .entry-title,
		.format-status .entry-title,
		.format-link .entry-title,
		.format-audio .entry-title,
		.format-chat .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'screen and (min-width: 55em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.post-password-form input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .menu-item-description',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label,
		.post-navigation .meta-nav,
		.image-navigation,
		.comment-navigation,
		.author-heading,
		.author-bio,
		.entry-footer,
		.page-links a,
		.page-links span,
		.comment-metadata,
		.pingback .edit-link,
		.comment-list .reply,
		.comment-notes,
		.comment-awaiting-moderation,
		.logged-in-as,
		.comment-form label,
		.form-allowed-tags,
		.site-info,
		.wp-caption-text,
		.gallery-caption,
		.entry-caption',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote cite,
		.widget blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input,
		.widget select,
		.widget textarea',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget .wp-caption-text,
		.widget .gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);


	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '31px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.entry-summary h1,
		.page-content h1,
		.comment-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '31px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2,
		.entry-summary h2,
		.page-content h2,
		.comment-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3,
		.entry-summary h3,
		.page-content h3,
		.comment-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4,
		.entry-summary h4,
		.page-content h4,
		.comment-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5,
		.entry-content h6,
		.entry-summary h5,
		.entry-summary h6,
		.page-content h5,
		.page-content h6,
		.comment-content h5,
		.comment-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title,
		.comments-title,
		.comment-reply-title,
		.post-navigation .post-title',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.format-aside .entry-title,
		.format-image .entry-title,
		.format-video .entry-title,
		.format-quote .entry-title,
		.format-gallery .entry-title,
		.format-status .entry-title,
		.format-link .entry-title,
		.format-audio .entry-title,
		.format-chat .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array( 'screen and (min-width: 59.6875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.post-password-form input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .menu-item-description',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label,
		.post-navigation .meta-nav,
		.image-navigation,
		.comment-navigation,
		.author-heading,
		.author-bio,
		.entry-footer,
		.page-links a,
		.page-links span,
		.comment-metadata,
		.pingback .edit-link,
		.comment-list .reply,
		.comment-notes,
		.comment-awaiting-moderation,
		.logged-in-as,
		.comment-form label,
		.form-allowed-tags,
		.site-info,
		.wp-caption-text,
		.gallery-caption,
		.entry-caption',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);


	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote cite,
		.widget blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input,
		.widget select,
		.widget textarea',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '35px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.entry-summary h1,
		.page-content h1,
		.comment-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '35px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2,
		.entry-summary h2,
		.page-content h2,
		.comment-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '29px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3,
		.entry-summary h3,
		.page-content h3,
		.comment-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4,
		.entry-summary h4,
		.page-content h4,
		.comment-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5,
		.entry-content h6,
		.entry-summary h5,
		.entry-summary h6,
		.page-content h5,
		.page-content h6,
		.comment-content h5,
		.comment-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title,
		.comments-title,
		.comment-reply-title,
		.post-navigation .post-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.format-aside .entry-title,
		.format-image .entry-title,
		.format-video .entry-title,
		.format-quote .entry-title,
		.format-gallery .entry-title,
		.format-status .entry-title,
		.format-link .entry-title,
		.format-audio .entry-title,
		.format-chat .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array( 'screen and (min-width: 68.75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.post-password-form input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .menu-item-description',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label,
		.post-navigation .meta-nav,
		.image-navigation,
		.comment-navigation,
		.author-heading,
		.author-bio,
		.entry-footer,
		.page-links a,
		.page-links span,
		.comment-metadata,
		.pingback .edit-link,
		.comment-list .reply,
		.comment-notes,
		.comment-awaiting-moderation,
		.logged-in-as,
		.comment-form label,
		.form-allowed-tags,
		.site-info,
		.wp-caption-text,
		.gallery-caption,
		.entry-caption',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '27px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote cite,
		.widget blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input,
		.widget select,
		.widget textarea',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget .wp-caption-text,
		.widget .gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '39px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.entry-summary h1,
		.page-content h1,
		.comment-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '39px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2,
		.entry-summary h2,
		.page-content h2,
		.comment-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3,
		.entry-summary h3,
		.page-content h3,
		.comment-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '27px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4,
		.entry-summary h4,
		.page-content h4,
		.comment-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5,
		.entry-content h6,
		.entry-summary h5,
		.entry-summary h6,
		.page-content h5,
		.page-content h6,
		.comment-content h5,
		.comment-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title,
		.comments-title,
		.comment-reply-title,
		.post-navigation .post-title',
		array(
			array( 'property' => 'font-size', 'value' => '27px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.format-aside .entry-title,
		.format-image .entry-title,
		.format-video .entry-title,
		.format-quote .entry-title,
		.format-gallery .entry-title,
		.format-status .entry-title,
		.format-link .entry-title,
		.format-audio .entry-title,
		.format-chat .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'screen and (min-width: 77.5em)' )
	);

	return $category_rules;
} );