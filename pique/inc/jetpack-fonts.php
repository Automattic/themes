<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-family', 'value' => 'sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dfn',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
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
		'.archive .read-more a,
		.blog .read-more a,
		.search-results .read-more a,
		button,
		input,
		optgroup,
		select,
		textarea',
		array(
			array( 'property' => 'font', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'optgroup',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.archive .read-more a,
		.blog .read-more a,
		.search-results .read-more a,
		body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Lora, Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-branding .site-title,
		.widget-title,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pique-template-testimonials .pique-testimonials article .entry-content cite,
		blockquote cite',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '38px' ),
			array( 'property' => 'font-family', 'value' => 'Lora, Georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-branding .site-title,
		.widget-title,
		h3',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.999em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.414em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
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
		'.pique-template-testimonials .pique-testimonials article .entry-content,
		blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pique-template-testimonials .pique-testimonials article .entry-content cite,
		blockquote cite',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
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
		'label',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => '500' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input[type="email"],
		input[type="password"],
		input[type="search"],
		input[type="text"],
		input[type="url"],
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input[type="email"],
		input[type="password"],
		input[type="search"],
		input[type="text"],
		input[type="url"]',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.archive .read-more a,
		.blog .read-more a,
		.button,
		.search-results .read-more a,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

		TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pique-template-recent-posts .read-more a,
		.pique-panel .edit-link a',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-branding .site-title',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-branding .site-description',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation,
		.woocommerce-breadcrumb,
		.woocommerce-result-count,
		.woocommerce-ordering .orderby,
		.product .onsale,
		ul.products li.product .added_to_cart,
		.woocommerce-pagination,
		.single-product div.product .related h2,
		.woocommerce-checkout-payment ul .payment_box p,
		.woocommerce-order-details h2,
		.woocommerce-customer-details h2,
		.woocommerce-tabs .panel h2:first-of-type,
		.woocommerce-tabs ul.tabs li a,
		.woocommerce-MyAccount-navigation a,
		.woocommerce.widget_layered_nav_filters .amount,
		.woocommerce-breadcrumb,
		.woocommerce-result-count,
		.woocommerce-ordering .orderby',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation .nav-next a,
		.comment-navigation .nav-previous a,
		.post-navigation .nav-next a,
		.post-navigation .nav-previous a,
		.posts-navigation .nav-next a,
		.posts-navigation .nav-previous a',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation .nav-next a span,
		.comment-navigation .nav-previous a span,
		.post-navigation .nav-next a span,
		.post-navigation .nav-previous a span,
		.posts-navigation .nav-next a span,
		.posts-navigation .nav-previous a span',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget select',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pique-template-testimonials .pique-testimonials article .entry-content .widget cite:not(.widget-title),
		.site-branding .widget .site-title:not(.widget-title),
		.widget .pique-template-testimonials .pique-testimonials article .entry-content cite:not(.widget-title),
		.widget .site-branding .site-title:not(.widget-title),
		.widget .widget-title:not(.widget-title),
		.widget blockquote cite:not(.widget-title),
		.widget h2:not(.widget-title),
		.widget h3:not(.widget-title),
		.widget h4:not(.widget-title),
		blockquote .widget cite:not(.widget-title)',
		array(
			array( 'property' => 'font-family', 'value' => 'Lora, Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '29px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_recent_comments li',
		array(
			array( 'property' => 'font-family', 'value' => 'Lora, Georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

		TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.overlay',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_recent_comments li a',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rssSummary',
		array(
			array( 'property' => 'font-family', 'value' => 'Lora, Georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.textwidget',
		array(
			array( 'property' => 'font-family', 'value' => 'Lora, Georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_tag_cloud .tagcloud',
		array(
			array( 'property' => 'font-family', 'value' => 'Lora, Georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_calendar caption',
		array(
			array( 'property' => 'font-family', 'value' => 'Lora, Georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pique-sidebar .widget-area',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'(max-width: 767px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata,
		.entry-meta,
		.reply,
		.widget_rss .rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.cat-links,
		.tags-links',
		array(
			array( 'property' => 'font-family', 'value' => 'Lora, Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform .comment-notes,
		#commentform .logged-in-as',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#form-allowed-tags',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author .fn',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-content',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pingback,
		.trackback',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer',
		array(
			array( 'property' => 'font-family', 'value' => 'Karla, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer #infinity-blog-title',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.archive .read-more .infinite-scroll #infinite-handle a,
		.blog .read-more .infinite-scroll #infinite-handle a,
		.infinite-scroll #infinite-handle .archive .read-more a,
		.infinite-scroll #infinite-handle .blog .read-more a,
		.infinite-scroll #infinite-handle .search-results .read-more a,
		.infinite-scroll #infinite-handle button,
		.search-results .read-more .infinite-scroll #infinite-handle a',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.archive .read-more .infinite-scroll #infinite-handle a:hover,
		.blog .read-more .infinite-scroll #infinite-handle a:hover,
		.infinite-scroll #infinite-handle .archive .read-more a:hover,
		.infinite-scroll #infinite-handle .blog .read-more a:hover,
		.infinite-scroll #infinite-handle .search-results .read-more a:hover,
		.infinite-scroll #infinite-handle button:hover,
		.search-results .read-more .infinite-scroll #infinite-handle a:hover',
		array(
			array( 'property' => 'font-size', 'value' => '19px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.tiled-gallery-caption,
		.wp-caption-text',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	return $category_rules;
} );
