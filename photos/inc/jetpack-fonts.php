<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
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
			array( 'property' => 'font-size', 'value' => '62.5%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		optgroup,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, "SF Pro Text", BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, "SF Pro Text", BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif' ),
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
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
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
		'caption,
		th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '1.5rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.required',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nav-links .nav-meta',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => '100' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.nav-links a',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, "SF Pro Text", BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-size', 'value' => '1.8rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nav-links .current',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.screen-reader-text:focus',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_calendar a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_goodreads h2[class^="gr_custom_header_"]',
		array(
			array( 'property' => 'font-size', 'value' => '2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_blog_subscription input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title,
		.page-title',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, "SF Pro Text", BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.page-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '34px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2,
		.page-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3,
		.page-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4,
		.page-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5,
		.page-content h5',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h6,
		.page-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => '100' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer span a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links .page-number',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta',
		array(
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata',
		array(
			array( 'property' => 'font-weight', 'value' => '100' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-body .comment-edit-link',
		array(
			array( 'property' => 'font-size', 'value' => '1.7rem' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-form .submit',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pingback .comment-body .url',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span button,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, "SF Pro Text", BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-info',
		array(
			array( 'property' => 'font-weight', 'value' => '100' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-footer .jetpack-social-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .menu-toggle span',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
			array( 'property' => 'font-weight', 'value' => '100' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title,
		.page-title',
		array(
			array( 'property' => 'font-size', 'value' => '42px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content,
		.entry-summary,
		.page-content',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.page-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '42px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2,
		.page-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '35px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3,
		.page-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '29px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4,
		.page-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5,
		.page-content h5',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h6,
		.page-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer,
		.nav-links .nav-meta,
		.page-links',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.nav-links a',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-size', 'value' => '2.4rem' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nav-links .arrow a,
		.nav-links .page-numbers',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.search-form .search-field',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		.comments-title,
		.no-comments',
		array(
			array( 'property' => 'font-size', 'value' => '2.4rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-body',
		array(
			array( 'property' => 'font-size', 'value' => '2.0rem' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta',
		array(
			array( 'property' => 'font-size', 'value' => '1.7rem' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '1.7rem' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget,
		.widget .widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-footer .site-info',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and ( min-width: 658px )',
		)
	);

	return $category_rules;
} );
