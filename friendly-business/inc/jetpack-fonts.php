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
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.button,
		button,
		input,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		optgroup,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'th',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#cancel-comment-reply-link,
		.author-description .author-link,
		.comment-author .fn,
		.comment-metadata,
		.comment-reply-link,
		.comments-title,
		.discussion-meta-info,
		.entry-meta,
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
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
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
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '1.6875em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.25em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title,
		.error-404 .page-title,
		.has-larger-font-size,
		.not-found .page-title,
		h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.6875em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry .entry-content .wp-block-cover-image .wp-block-cover-image-text,
		.entry .entry-content .wp-block-cover-image .wp-block-cover-text,
		.entry .entry-content .wp-block-cover-image h2,
		.entry .entry-content .wp-block-cover .wp-block-cover-image-text,
		.entry .entry-content .wp-block-cover .wp-block-cover-text,
		.entry .entry-content .wp-block-cover h2',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_links li,
		.widget_jp_blogs_i_follow li,
		.widget_rss_links li.widget_archive ul li,
		.widget_archive ul li,
		.widget_categories ul li,
		.widget_meta ul li,
		.widget_nav_menu ul li,
		.widget_pages ul li,
		.widget_recent_comments ul li,
		.widget_recent_entries ul li,
		.widget_rss ul li',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-main #infinite-handle span button,
		.site-main #infinite-handle span button:focus,
		.site-main #infinite-handle span button:hover',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry div.sharedaddy h3.sd-title,
		.entry h3.sd-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry #jp-relatedposts h3.jp-relatedposts-headline',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry #jp-relatedposts .jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-title a',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry #jp-relatedposts .jp-relatedposts-items .jp-relatedposts-post,
		.entry #jp-relatedposts .jp-relatedposts-items-visual h4.jp-relatedposts-post-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry #jp-relatedposts .jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-context,
		.entry #jp-relatedposts .jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-date',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_authors > ul > li > a',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_eu_cookie_law_widget #eu-cookie-law',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_rss_links li',
		array(
			array( 'property' => 'font-family', 'value' => '"Rubik", Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ),
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
