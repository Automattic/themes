<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer,
		.entry-meta,
		.site-info',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title,
		h1,
		h2:not(.author-title),
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => 'Poppins, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title,
		.post-type-archive-jetpack-testimonial .page-title,
		h1',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
			array( 'property' => 'font-size', 'value' => '2.5rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		.comments-title,
		h2:not(.author-title)',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title,
		.widget-title,
		.widgettitle,
		h3',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-size', 'value' => '1.5625rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title,
		h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
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
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
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
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation a,
		.posts-navigation a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation .meta-nav',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-navigation .post-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Poppins, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-size', 'value' => '1.5625rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_calendar caption',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-name',
		array(
			array( 'property' => 'font-family', 'value' => 'Poppins, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-size', 'value' => '1.5625rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author .fn',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-link',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-title small',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.no-comments',
		array(
			array( 'property' => 'font-family', 'value' => 'Poppins, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-content .contact-form label',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .tiled-gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer .container',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer .blog-credits,
		#infinite-footer .blog-credits a,
		#infinite-footer .blog-info a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-main #infinite-handle span button,
		.site-main #infinite-handle span button:focus,
		.site-main #infinite-handle span button:hover',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry div#jp-relatedposts h3.jp-relatedposts-headline,
		.hentry div.sd-rating h3.sd-title,
		.hentry div.sharedaddy h3.sd-title',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry div.sharedaddy h3.sd-title',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'div#jp-relatedposts',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .testimonial-entry-content',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .testimonial-entry-title',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_goodreads div[class^="gr_custom_title"] a,
		.widget_goodreads div[class^=gr_custom_container] a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_goodreads div[class^="gr_custom_title"]',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.button',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer,
		.entry-meta,
		.site-info,
		.widget-small,
		.widget-small input,
		.widget-small select,
		.widget-small textarea',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title,
		.post-type-archive-jetpack-testimonial .page-title,
		h1',
		array(
			array( 'property' => 'font-size', 'value' => '49px' ),
			array( 'property' => 'font-size', 'value' => '3.0625rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-small h1',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
			array( 'property' => 'font-size', 'value' => '2.5rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		.comments-title,
		h2:not(.author-title)',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
			array( 'property' => 'font-size', 'value' => '2.5rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-small h2',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title,
		.widgettitle,
		.widget-title,
		h3',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-small h3,
		.widget-small .widgettitle,
		.widget-small .widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-size', 'value' => '1.5625rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title,
		h4',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-size', 'value' => '1.5625rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-small h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-small h5',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-small h6',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-size', 'value' => '1.5625rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-small blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-small button,
		.widget-small input[type="button"],
		.widget-small input[type="reset"],
		.widget-small input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation .meta-nav',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-navigation .post-title',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author-title',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-title small',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.no-comments',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
			array( 'property' => 'font-size', 'value' => '2.5rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-small .wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .tiled-gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-small .tiled-gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer .container',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-main #infinite-handle span button,
		.site-main #infinite-handle span button:focus,
		.site-main #infinite-handle span button:hover',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry div.sharedaddy h3.sd-title',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'div#jp-relatedposts',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.button',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-small .button',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation ul,
		.main-navigation.toggled-on ul',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 896px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#comments #respond h3',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments #respond .form-submit',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.aboutme_widget #am_name',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-size', 'value' => '1.5625rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.aboutme_widget #am_headline',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#comments #respond h3',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
			array( 'property' => 'font-size', 'value' => '2.5rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments #respond .form-submit',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.aboutme_widget #am_name',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-small.aboutme_widget #am_name',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-size', 'value' => '1.5625rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.aboutme_widget #am_headline',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-size', 'value' => '1.5625rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-small.aboutme_widget #am_headline',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	return $category_rules;
} );
