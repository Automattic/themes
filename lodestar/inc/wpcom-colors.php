<?php
/* Custom Colors: Lodestar */

add_color_rule( 'bg', '#ffffff', array(
	array( 'body,
		.one-column .panel-content .wrap,
		.jetpack-social-navigation', 'background-color' ),

	array( '.site-footer .widget-area', 'background-color', '-0.5' ),

	// Colour; this background already contrasts against bg
	array( '.site-footer .jetpack-social-navigation a', 'color' ),

	// WooCommerce
	array( '.single-product div.product .woocommerce-tabs ul.tabs li.active', 'border-bottom-color' ),

),
__( 'Background' ) );


add_color_rule( 'txt', '#333333', array(

	// Color - Constrast against bg
	array( 'body,
		a:hover,
		a:focus,
		a:active,
		.entry-title a,
		.entry-content h1,
		.entry-content h2,
		.entry-content h3,
		.entry-content h4,
		.entry-content h5,
		.entry-content h6,
		.project-terms a.current-type,
		.panel-content .entry-title,
		.entry-meta,
		.lodestar-intro .entry-content,
		.lodestar-panel .jetpack-testimonial .entry-header h2,
		.widget-area .widget.woocommerce ul.product_list_widget li > a.remove,
		table.cart .product-remove a', 'color', 'bg', 12 ),

	array( 'input[type="text"],
		input[type="email"],
		input[type="url"],
		input[type="password"],
		input[type="search"],
		input[type="number"],
		input[type="tel"],
		input[type="range"],
		input[type="date"],
		input[type="month"],
		input[type="week"],
		input[type="time"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="color"],
		textarea', 'color', '#fff' ),

	array( 'input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="range"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="week"]:focus,
		input[type="time"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="color"]:focus,
		textarea:focus', 'color', '#fff' ),

	array( '.site-header,
		.header-top,
		.main-navigation ul ul ul,
		.main-navigation ul ul ul ul ul,
		.main-navigation ul ul ul ul ul ul ul,
		.main-navigation ul ul ul ul ul ul ul ul ul,
		.main-navigation ul ul ul ul ul ul ul ul ul ul ul,
		.main-navigation ul ul a:hover,
		.main-navigation ul ul a:focus,
		.main-navigation ul ul li:hover,
		.main-navigation ul ul li:focus,
		.main-navigation ul ul ul ul a:hover,
		.main-navigation ul ul ul ul a:focus,
		.main-navigation ul ul ul ul li:hover,
		.main-navigation ul ul ul ul li:focus,
		.main-navigation ul ul ul ul ul ul a:hover,
		.main-navigation ul ul ul ul ul ul a:focus,
		.main-navigation ul ul ul ul ul ul li:hover,
		.main-navigation ul ul ul ul ul ul li:focus,
		.main-navigation ul ul ul ul ul ul ul ul a:hover,
		.main-navigation ul ul ul ul ul ul ul ul a:focus,
		.main-navigation ul ul ul ul ul ul ul ul li:hover,
		.main-navigation ul ul ul ul ul ul ul ul li:focus,
		.main-navigation ul ul ul ul ul ul ul ul ul ul a:hover,
		.main-navigation ul ul ul ul ul ul ul ul ul ul a:focus,
		.main-navigation ul ul ul ul ul ul ul ul ul ul li:hover,
		.main-navigation ul ul ul ul ul ul ul ul ul ul li:focus,
		.site-info,
		button,
		button:hover,
		button:focus,
		input[type="button"],
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="reset"],
		input[type="reset"]:hover,
		input[type="reset"]:focus,
		input[type="submit"],
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		#infinite-handle span button,
		#infinite-handle span button:hover,
		#infinite-handle span button:focus', 'background-color' ),

	// Background - contrast against bg
	array( '.main-navigation li:hover,
		.main-navigation li:focus,
		.main-navigation a:hover,
		.main-navigation a:focus,
		.main-navigation ul ul,
		.main-navigation ul ul ul ul,
		.main-navigation ul ul ul ul ul ul,
		.main-navigation ul ul ul ul ul ul ul ul,
		.main-navigation ul ul ul ul ul ul ul ul ul ul,
		.main-navigation ul ul ul a:hover,
		.main-navigation ul ul ul a:focus,
		.main-navigation ul ul ul li:hover,
		.main-navigation ul ul ul li:focus,
		.main-navigation ul ul ul ul ul a:hover,
		.main-navigation ul ul ul ul ul a:focus,
		.main-navigation ul ul ul ul ul li:hover,
		.main-navigation ul ul ul ul ul li:focus,
		.main-navigation ul ul ul ul ul ul ul a:hover,
		.main-navigation ul ul ul ul ul ul ul a:focus,
		.main-navigation ul ul ul ul ul ul ul li:hover,
		.main-navigation ul ul ul ul ul ul ul li:focus,
		.main-navigation ul ul ul ul ul ul ul ul ul a:hover,
		.main-navigation ul ul ul ul ul ul ul ul ul a:focus,
		.main-navigation ul ul ul ul ul ul ul ul ul li:hover,
		.main-navigation ul ul ul ul ul ul ul ul ul li:focus,
		.main-navigation ul ul ul ul ul ul ul ul ul ul ul a:hover,
		.main-navigation ul ul ul ul ul ul ul ul ul ul ul a:focus,
		.main-navigation ul ul ul ul ul ul ul ul ul ul ul li:hover,
		.main-navigation ul ul ul ul ul ul ul ul ul ul ul li:focus,
		.main-navigation ul,
		.main-navigation ul li.current_page_item > a,
		.main-navigation ul li.current-menu-item > a,
		.main-navigation ul li.current_page_ancestor > a', 'background-color', 'txt', 1.5 ),

	// WooCommerce
	array( '.star-rating span:before,
			span.price,
			p.price,
			span.price ins,
			p.price ins,
			.widget_layered_nav_filters ul li a:before', 'color', 'bg' ),

	array( '.woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a,
			.woocommerce-page .button,
			.woocommerce-page .button:visited,
			.woocommerce-page .hover,
			.woocommerce-page .button:hover,
			.site-header-cart .widget_shopping_cart .woocommerce-mini-cart__buttons .button,
			.site-header-cart .widget_shopping_cart .woocommerce-mini-cart__buttons .button:hover,
			.site-header-cart .button,
			.site-header-cart .button:visited', 'background-color' ),

	array( '.site-header-cart .widget_shopping_cart', 'background-color', 'txt', 1.5 ),

	array( '.onsale,
			table.cart .product-remove a:hover,
			.woocommerce-message:before,
			.woocommerce-info:before,
			.woocommerce-error:before,
			.woocommerce-noreviews:before,
			p.no-comments:before,
			.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger:before', 'background-color', 'bg', 1.5 ),

	array( '.woocommerce-message,
		.woocommerce-info,
		.woocommerce-error,
		.woocommerce-noreviews,
		p.no-comments', 'border-color', 'bg' ),
),
__( 'Text' ) );


add_color_rule( 'link', '#999999', array(
	// Color - contrast against bg
	array( 'a,
		a:visited,
		.entry-title a:hover,
		.entry-title a:focus', 'color', 'bg' ),

	array( 'button,
		button:hover,
		button:focus,
		input[type="button"],
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="reset"],
		input[type="reset"]:hover,
		input[type="reset"]:focus,
		input[type="submit"],
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		#infinite-handle span button,
		#infinite-handle span button:hover,
		#infinite-handle span button:focus', 'color', 'txt' ),

	// Background - contrast against bg
	array( '.site-footer .jetpack-social-navigation a,
		.site-footer .jetpack-social-navigation a:hover,
		.site-footer .jetpack-social-navigation a:focus',
		'background-color', 'bg' ),

	// WooCommerce
	array( '.widget_price_filter .ui-slider .ui-slider-range,
		.widget_price_filter .ui-slider .ui-slider-handle', 'background-color', 'bg' ),

	array( '.woocommerce-page .button,
		.site-header-cart .widget_shopping_cart .woocommerce-mini-cart__buttons .button,
		.site-header-cart .widget_shopping_cart .woocommerce-mini-cart__buttons .button:hover', 'color', 'txt' ),

),
__( 'Link' ) );


/* Extra Colour Rules */
add_color_rule( 'extra', '#ffffff', array(
	// Color - contrast against bg
	array( '.site-footer .widget-area', 'color', 'bg' ),

	array( 'input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="range"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="week"]:focus,
		input[type="time"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="color"]:focus,
		textarea:focus,
		.post-navigation .nav-links,
		.entry-author', 'border-color', 'bg', 4 ),

	// Color - contrast against txt
	array( '.header-top,
		.header-top a,
		.header-top a:visited,
		.header-top a:hover,
		.header-top a:focus,
		.site-top-content span.site-top-content-2,
		.menu-toggle,
		.menu-toggle:hover,
		.menu-toggle:focus,
		.site-info,
		.site-info a,
		.site-info:visited', 'color', 'txt', 14 ),

	// Border - contrast against txt
	array( '.menu-toggle,
		.menu-toggle:hover,
		.menu-toggle:focus', 'border-color', 'txt' ),

	// Woocommerce
	array( '.woocommerce-message:before,
			.woocommerce-info:before,
			.woocommerce-error:before,
			.woocommerce-noreviews:before,
			p.no-comments:before', 'color', 'txt' ),

	array( '.site-header-cart .cart-contents .count', 'color', 'txt', 14 ),
	array( '.onsale', 'color', 'txt' ),

) );

add_color_rule( 'extra', '#bbbbbb', array(
	// Border - low contrast against bg
	array( 'input[type="text"],
		input[type="email"],
		input[type="url"],
		input[type="password"],
		input[type="search"],
		input[type="number"],
		input[type="tel"],
		input[type="range"],
		input[type="date"],
		input[type="month"],
		input[type="week"],
		input[type="time"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="color"],
		textarea,
		select', 'border-color', 'bg', 5 ),

	// Background - low contrast against bg
	array( 'hr', 'background-color', 'bg', 3 ),

	// Border - contrast against bg
	array( 'td,
		th,
		blockquote,
		.lodestar-front-page article:not(.has-post-thumbnail),
		.jetpack-testimonial .entry-content,
		.widget ul li,
		.widget_product_categories ul li li,
		.single-product div.product .woocommerce-tabs .woocommerce-Tabs-panel,
		.single-product div.product .woocommerce-tabs ul.tabs li,
		.widget .tagcloud a:hover,
		.widget .tagcloud a:focus,
		.widget.widget_tag_cloud a:hover,
		.widget.widget_tag_cloud a:focus,
		.wp_widget_tag_cloud a:hover,
		.wp_widget_tag_cloud a:focus,
		.jetpack-social-navigation,
		.woocommerce-checkout-payment ul.payment_methods,
		.woocommerce-checkout-payment .form-row', 'border-color', 'bg', 1.5 ),
) );

add_color_rule( 'extra', '#555555', array(
	// Colour - contrast against bg
	array( '.entry-content div.sharedaddy h3,
		.entry-content div.sharedaddy h3.sd-title,
		.entry-content div#jp-relatedposts h3.jp-relatedposts-headline', 'color', 'bg' ),

) );

add_color_rule( 'extra', '#111111', array(
	// Background
	array( '.main-navigation ul', 'background' ),
) );

/* Extra CSS */
function lodestar_extra_css() { ?>

	body .header-top a:hover,
	body .header-top a:focus,
	.menu-toggle:hover,
	.menu-toggle:focus,
	.site-top-content-2,
	.site-footer .jetpack-social-navigation a:hover,
	.site-footer .jetpack-social-navigation a:focus {
		opacity: 0.8;
	}

	body .header-top #site-navigation a:hover,
	body .header-top #site-navigation a:focus {
		opacity: 1.0;
	}

	body .site-branding,
	body .site-branding a {
		color: #fff;
	}

	body .site-description,
	body .site-description a {
		color: #ccc;
	}

	pre,
	mark,
	ins {
		background: rgba(0,0,0,0.15);
	}

	.entry-content h1,
	.entry-content h2,
	.panel-content .entry-title,
	.entry-meta {
		opacity: 0.6;
	}

	.lodestar-intro .entry-content {
		opacity: 0.7;
	}

	.entry-content h5,
	.entry-content h6 {
		opacity: 0.8;
	}

	button:hover,
	button:focus,
	input[type="button"]:hover,
	input[type="button"]:focus,
	input[type="reset"]:hover,
	input[type="reset"]:focus,
	input[type="submit"]:hover,
	input[type="submit"]:focus,
	#infinite-handle span button:hover,
	#infinite-handle span button:focus,
	.woocommerce-page .button:hover,
	.woocommerce-page .button:focus,
	.site-header-cart .button:hover,
	.site-header-cart .button:focus {
		opacity: 0.8;
	}

	table.shop_table {
		border: none;
	}

	table.shop_table th,
	.woocommerce-checkout-payment .payment_box {
		background: rgba(0,0,0,0.15);
	}

	@media only screen and ( max-width: 59.9999em ) {
		.main-navigation li:hover,
		.main-navigation li:focus,
		.main-navigation a:hover,
		.main-navigation a:focus,
		.main-navigation ul ul {
			background: transparent !important;
		}
	}

	@media only screen and ( min-width: 60em ) {
		.main-navigation ul,
		#top-menu {
			background-color: transparent;
		}
	}

<?php
}
add_theme_support( 'custom_colors_extra_css', 'lodestar_extra_css' );

add_color_palette( array(
	'#333333',
	'#111111',
	'#a7c5bd',
), __( 'Grey and Green' ) );

add_color_palette( array(
	'#39425a',
	'#525a74',
	'#b8c6df'
), __( 'Blue') );

add_color_palette( array(
	'#f1f1f1',
	'#4c4c4c',
	'#e95870'
), __( 'Light Grey and Pink') );

add_color_palette( array(
	'#ffffff',
	'#766862',
	'#1e9acc'
), __( 'White, Brown, and Blue' ) );

add_color_palette( array(
	'#ebe8df',
	'#367690',
	'#db623d'
), __( 'Beige, Blue, and Orange' ) );

add_color_palette( array(
	'#ffffff',
	'#a92727',
	'#474843'
), __( 'White, Red, and Grey' ) );
