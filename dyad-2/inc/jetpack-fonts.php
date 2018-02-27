<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
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
			array( 'property' => 'font-family', 'value' => '"Noto Serif", Georgia, serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '50px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Serif", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '1.05em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		pre,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Console", Monaco, "Courier New", monospace' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre:before',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
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
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#site-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-toggle',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#site-navigation ul ul li',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-banner-header .banner-featured',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-banner h1',
		array(
			array( 'property' => 'font-size', 'value' => '45px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-banner .slick-next,
		.site-banner .slick-prev',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-body h1,
		.entry-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '36px' ),
		)
	);
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title h1',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.posts .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.link-more',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.link-more a',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.is-singular:not(.home) .entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta .cat-links',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.is-singular .entry-posted',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page.is-singular .edit-link',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.is-singular.no-post-thumbnail .entry-meta .cat-links,
		.is-singular.no-post-thumbnail .entry-posted',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.is-singular .post-navigation .nav-links span',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-link,
		.is-singular .post-navigation .nav-links span.nav-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Noto Serif", Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.is-singular .post-navigation .nav-links span.nav-subtitle',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments-area',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments-title .add-comment-link',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-footer',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-footer .author.vcard',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol.children .comment-footer .author.vcard',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform label',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation a',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span button,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover,
		.posts-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.81em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.footer-bottom-info',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget h1,
		.widget h2,
		.widget h3,
		.widget h4,
		.widget h5,
		.widget h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget .post-date,
		.widget .rss-date',
		array(
			array( 'property' => 'font-size', 'value' => '.81em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_calendar tr td#next,
		.widget_calendar tr td#prev',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.is-singular.archive-eventbrite .entry-header h1',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-banner h1',
		array(
			array( 'property' => 'font-size', 'value' => '52px' ),
		),
		array(
			'screen and (min-width: 1601px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-banner h1',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
		),
		array(
			'screen and (max-width: 1400px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-banner h1',
		array(
			array( 'property' => 'font-size', 'value' => '35px' ),
		),
		array(
			'screen and (max-width: 1200px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-banner h1',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array(
			'screen and (max-width: 680px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.posts .entry-inner-content',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (min-width: 1601px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.is-singular .entry-header h1,
		.error404 .entry-header h1,
		.page-header h1,
		.page-template-eventbrite-index .page-header h1,
		.single-event .entry-header h1',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
		),
		array(
			'screen and (max-width: 1200px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.is-singular.archive-eventbrite .entry-header h1',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		),
		array(
			'screen and (max-width: 1200px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.is-singular:not(.eventbrite-archive) .entry-header h1,
		.error404 .entry-header h1,
		.page-header h1',
		array(
			array( 'property' => 'font-size', 'value' => '35px' ),
		),
		array(
			'screen and (max-width: 960px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.is-singular:not(.eventbrite-archive) .entry-header h1,
		.error404 .entry-header h1,
		.page-header h1,
		.page-template-eventbrite-index .page-header h1,
		.single-event .entry-header h1',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		),
		array(
			'screen and (max-width: 680px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.is-singular.archive-eventbrite .entry-header h1',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
		),
		array(
			'screen and (max-width: 680px)',
		)
	);

	return $category_rules;
} );
