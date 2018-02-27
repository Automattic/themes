<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#masthead .site-title',
		array(
			array( 'property' => 'font-size', 'value' => '60px' ),
		),
		array(
			'only screen and (max-width: 1200px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", helvetica, arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
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
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '0.9375rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '0.9375rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
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
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.search-form ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.search-form :-moz-placeholder',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.search-form ::-moz-placeholder',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.search-form :-ms-input-placeholder',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#masthead .site-title',
		array(
			array( 'property' => 'font-size', 'value' => '80px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#masthead .site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.cat-links',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links span',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body:not(.single) .hentry .more-link',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '35px' ),
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-header .entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'body:not(.single) .format-aside .entry-header .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'body:not(.single) .format-audio .entry-title,
		body:not(.single) .format-gallery .entry-title,
		body:not(.single) .format-image .entry-title,
		body:not(.single) .format-link .entry-title,
		body:not(.single) .format-video .entry-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body:not(.single) .format-quote .entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.entry-content h2,
		.entry-content h3,
		.entry-content h4,
		.entry-content h5,
		.entry-content h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body:not(.single) .format-quote .entry-content',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body:not(.single) .format-status',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body:not(.single) .format-status .entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content .jetpack-recipe .jetpack-recipe-meta',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.posts-navigation .nav-next a,
		.posts-navigation .nav-previous a',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.single #primary article.post .tags-links,
		.single #primary article.jetpack-portfolio .tags-links,
		.single #primary article.attachment .tags-links',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.single #primary article.post .tags-links .tags-header,
		.single #primary article.jetpack-portfolio .tags-links .tags-header,
		.single #primary article.attachment .tags-links .tags-header',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.single #primary .author-description',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.single #primary .author-description h2',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.single #primary .author-link',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "Helvetica Neue", helvetica, arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation-container',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation-container .post-navigation-header',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-header .page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-header .taxonomy-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-header p',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#jp-post-flair h3,
		div#jp-relatedposts h3.jp-relatedposts-headline',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.rating-msg',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'div#jp-relatedposts h3.jp-relatedposts-headline em',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#comments .comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '21px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments .comment-author',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments .comment-metadata,
		#comments .reply,
		#comments .edit-link',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments .comment-navigation',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-content blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments-form-contain .comment-notes,
		.comments-form-contain .logged-in-as',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments-form-contain label',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.no-comments',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.contact-form label',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span button,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#colophon .site-info',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget .widget-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_calendar caption',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_goodreads div[class^="gr_custom_author"]',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_tag_cloud a,
		.wp_widget_tag_cloud a',
		array(
			array( 'property' => 'font-family', 'value' => '"Kalam", "Chalkboard", "Comic Sans", script' ),
			array( 'property' => 'font-size', 'value' => '15px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#masthead .site-description',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array(
			'only screen and (max-width: 1200px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-header .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		),
		array(
			'only screen and (max-width: 1200px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-header p',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'only screen and (max-width: 1200px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		),
		array(
			'only screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array(
			'only screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'only screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'only screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'only screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'only screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		),
		array(
			'only screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array(
			'only screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#comments .comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'only screen and (max-width: 600px)',
		)
	);

	return $category_rules;
} );
