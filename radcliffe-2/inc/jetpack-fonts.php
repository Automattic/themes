<?php
/* Custom Fonts: Radcliffe 2 */

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dfn,
		cite,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		samp,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		pre,
		samp',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'optgroup',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Times,"Times New Roman",serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
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
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5,
		h6',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'line-height', 'value' => '2.4em' ),
		)
	);


	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title,
		.archive .page-title,
		.comment-header',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.header-search .s,
		.entry-meta,
		.site-footer,
		.main-navigation a,
		.entry-footer,
		.post-navigation a span,
		.comment-actions,
		.comment-navigation,
		#wp-calendar tfoot a,
		form,
		input,
		button,
		.button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		#infinite-handle span',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation ul ul a',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-toggle',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-toggle .icon',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation a span',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation a,
		.posts-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation a',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation a',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		.button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '40px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '60px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.header-search .s',
		array(
			array( 'property' => 'font-size', 'value' => '36px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-footer',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget,
		.contact-info-area',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-info',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar tfoot a',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar thead th',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.search-form .search-field',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Times,"Times New Roman",serif' ),
			array( 'property' => 'font-size', 'value' => '40px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '60px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta,
		.entry-meta a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-content,
		.entry-content,
		.entry-summary',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-title',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.archive .page-title,
		.search .page-title,
		.error404 .page-title',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title,
		.comment-reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-header cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-header span',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-content',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-actions a',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'form label,
		.comment-respond .logged-in-as,
		.comment-respond .comment-notes',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hero-area-wrapper',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hero-area-wrapper',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hero-title-area',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hero-title-area',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hero-area .button',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hero-area .button',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation.toggled ul a',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array( 'only screen and (max-width: 768px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-content,
		.entry-content,
		.entry-summary',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta,
		.entry-meta a',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'form label,
		.comment-respond .logged-in-as,
		.comment-respond .comment-notes',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#inifnite-handle span',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments-title,
		.comment-reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		),
		array( 'only screen and (min-width: 600px)' )
	);

	// Woocommerce
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.woocommerce-breadcrumb,
		.woocommerce-result-count,
		.woocommerce-ordering,
		.woocommerce-ordering select,
		table.shop_table_responsive,
		.woocommerce-store-notice',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ul.products li.product a.added_to_cart,
		.woocommerce-checkout .checkout .payment_box p,
		.woocommerce-checkout .checkout [for="payment_method_paypal"]>a',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.woocommerce-tabs ul.tabs li a',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ul.products li.product .price,
		.single-product div.product .commentlist .comment-text .meta,
		.woocommerce-breadcrumb,
		.woocommerce-result-count,
		.woocommerce-ordering,
		.woocommerce-ordering select',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.onsale',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.single-product div.product .entry-summary .price,
		.single-product div.product .product_meta,
		.woocommerce-pagination .page-numbers li,
		.woocommerce.widget .amount,
		.woocommerce.widget .reviewer,
		.woocommerce.widget .total,
		.woocommerce.widget .quantity',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.single-product div.product .entry-summary .price del,
		.woocommerce-cart .cart-subtotal th:not([data-title="Subtotal"]),
		.woocommerce-MyAccount-navigation ul ul a,
		.site-header-cart .count,
		.site-header-cart ul ul a',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.woocommerce-MyAccount-content address',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.single-product div.product .reset_variations,
		.single-product div.product .commentlist .comment-text .description',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.woocommerce-MyAccount-navigation a,
		.site-header-cart .cart-contents',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.single-product div.product .woocommerce-Reviews-title,
		.single-product div.product .comment-reply-title,
		.woocommerce-checkout .checkout [for="payment_method_paypal"],
		.upsells.products>h2:first-of-type,
		.related.products>h2:first-of-type',
		array(
			array( 'property' => 'font-family', 'value' => '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.woocommerce.widget_product_search .woocommerce-product-search .search-field',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'ul.products li.product .woocommerce-loop-product__title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'text-transform', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.woocommerce-cart .cart_totals h2',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	return $category_rules;
} );
