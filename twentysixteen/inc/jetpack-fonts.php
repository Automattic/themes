<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Merriweather, Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'::-webkit-input-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		':-moz-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'::-moz-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		':-ms-input-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote,
		.entry-content h3,
		.entry-summary h3,
		.comment-content h3,
		.textwidget h3,
		body:not(.search-results) .entry-summary,
		.aboutme_widget #am_name',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		button[disabled]:hover,
		button[disabled]:focus,
		input[type="button"],
		input[type="button"][disabled]:hover,
		input[type="button"][disabled]:focus,
		input[type="reset"],
		input[type="reset"][disabled]:hover,
		input[type="reset"][disabled]:focus,
		input[type="submit"],
		input[type="submit"][disabled]:hover,
		input[type="submit"][disabled]:focus,
		.main-navigation,
		.no-comments,
		.tagcloud a,
		.wp_widget_tag_cloud a,
		.top_rated div > p,
		.comments-area #respond .comment-form-fields p.comment-form-posting-as,
		.comments-area #respond .comment-form-fields p.comment-form-log-out,
		.comments-area #respond #comment-form-identity #comment-form-nascar p,
		.comments-area #respond #comment-form-subscribe p,
		.comments-area #respond p.form-submit input#comment-submit,
		.comment-content p.comment-likes span.comment-like-feedback,
		.jp-relatedposts-post-date,
		.jp-relatedposts-post-context',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label,
		.comment-form label,
		.entry-content .contact-form label,
		.post-navigation .meta-nav,
		.image-navigation,
		.comment-navigation,
		.menu-toggle,
		.widget_recent_entries .post-date,
		.widget_rss .rss-date,
		.widget_rss cite,
		.sticky-post,
		.entry-footer,
		.comment-metadata,
		.pingback .edit-link,
		.comment-reply-link,
		.page-links,
		.page-links a,
		.page-links > span,
		.pd-rating,
		.entry-content .portfolio-entry-meta,
		.entry-content #jp-relatedposts h3.jp-relatedposts-headline,
		.hentry div.sharedaddy h3.sd-title,
		.hentry h3.sd-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title,
		.post-navigation .post-title,
		.comments-title,
		.comment-reply-title,
		.page-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '23px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pagination',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '19px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body:not(.logged-in) .site .skip-link',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget .widget-title,
		.entry-content .portfolio-entry-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Montserrat, "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content h1,
		.entry-summary h1,
		.comment-content h1,
		.textwidget h1',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content h2,
		.entry-summary h2,
		.comment-content h2,
		.textwidget h2',
		array(
			array( 'property' => 'font-size', 'value' => '23px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small,
		.entry-content h4,
		.entry-content h5,
		.entry-content h6,
		.entry-summary h4,
		.entry-summary h5,
		.entry-summary h6,
		.comment-content h4,
		.comment-content h5,
		.comment-content h6,
		.textwidget h4,
		.textwidget h5,
		.textwidget h6,
		.entry-content .author-title,
		.comments-area #respond .form-submi',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description,
		.author-bio,
		.taxonomy-description,
		.entry-caption,
		.comment-notes,
		.comment-awaiting-moderation,
		.logged-in-as,
		.form-allowed-tags,
		.site-info,
		.wp-caption .wp-caption-text,
		.gallery-caption,
		.entry-content .portfolio-entry-content p,
		.entry-content .testimonial-entry-title,
		.entry-content .testimonial-entry-content p,
		.entry-content #jp-relatedposts .jp-relatedposts-items p,
		.entry-content #jp-relatedposts .jp-relatedposts-items-visual h4.jp-relatedposts-post-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Merriweather, Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
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
			array( 'property' => 'font-size', 'value' => '19px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title,
		.post-navigation .post-title',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		),
		array( 'screen and (min-width: 44.375em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-toggle',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 44.375em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '33px' ),
		),
		array( 'screen and (min-width: 44.375em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget,
		.widget blockquote cite,
		.widget blockquote small,
		.widget button,
		.widget input,
		.widget select,
		.widget textarea,
		.widget h4,
		.widget h5,
		.widget h6',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array( 'screen and (min-width: 56.875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget h1',
		array(
			array( 'property' => 'font-size', 'value' => '23px' ),
		),
		array( 'screen and (min-width: 56.875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget h2',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		),
		array( 'screen and (min-width: 56.875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget h3,
		.widget blockquote,
		.aboutme_widget #am_name',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (min-width: 56.875em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
		),
		array( 'screen and (min-width: 61.5625em)' )
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
			array( 'property' => 'font-size', 'value' => '23px' ),
		),
		array( 'screen and (min-width: 61.5625em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content h1,
		.entry-summary h1,
		.comment-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '33px' ),
		),
		array( 'screen and (min-width: 61.5625em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content h2,
		.entry-summary h2,
		.comment-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		),
		array( 'screen and (min-width: 61.5625em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content h3,
		.entry-summary h3,
		.comment-content h3,
		',
		array(
			array( 'property' => 'font-size', 'value' => '23px' ),
		),
		array( 'screen and (min-width: 61.5625em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content h4,
		.entry-content h5,
		.entry-content h6,
		.entry-summary h4,
		.entry-summary h5,
		.entry-summary h6,
		.comment-content h4,
		.comment-content h5,
		.comment-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		),
		array( 'screen and (min-width: 61.5625em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body:not(.search-results) .entry-summary,
		body:not(.search-results) .entry-summary blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '23px' ),
		),
		array( 'screen and (min-width: 75em)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body:not(.search-results) .entry-summary blockquote cite,
		body:not(.search-results) .entry-summary blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		),
		array( 'screen and (min-width: 75em)' )
	);

	return $category_rules;
} );
