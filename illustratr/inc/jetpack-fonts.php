<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.0em' ),
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
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '1.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2:not(.site-description)',
		array(
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '3.6em' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		),
		array( 'screen and (max-width: 767px)')
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.taxonomy-description',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.cat-links,
		.featured-post',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-main .portfolio-entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-list .pingback .comment-body',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta-details',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.no-comments',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption .wp-caption-dd,
		.wp-caption .wp-caption-text',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery .gallery-item .gallery-caption',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.tiled-gallery .tiled-gallery-caption',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-size', 'value' => '0.73em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content > .jp-relatedposts .jp-relatedposts-post .jp-relatedposts-post-context,
		.entry-sharedaddy > .jp-relatedposts .jp-relatedposts-post .jp-relatedposts-post-context,
		.page-content > .jp-relatedposts .jp-relatedposts-post .jp-relatedposts-post-context,
		.page-content > .sharedaddy .jp-relatedposts .jp-relatedposts-post .jp-relatedposts-post-context,
		.entry-content > .sharedaddy .jp-relatedposts .jp-relatedposts-post .jp-relatedposts-post-context,
		.entry-sharedaddy > .sharedaddy .jp-relatedposts .jp-relatedposts-post .jp-relatedposts-post-context',
		array(
			array( 'property' => 'font-family', 'value' => '"PT Serif", serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	return $category_rules;
} );
