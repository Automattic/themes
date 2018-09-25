<?php
/* Custom Colors: Radcliffe 2 */

// Background
add_color_rule( 'bg', '#ffffff', array(
	array( 'body', 'background-color' ),

	array( '.comment-wrapper,
		.pingback,
		.trackback',
		'background-color', '0.5' ),
	array( '.comment-wrapper:after', 'border-right-color' ),
	array( '.hero-area .button,
			.hero-area .button:focus,
			.hero-area .button:hover', 'background', 'link', 1 ),

	array( 'table tbody > tr:nth-child(odd) > th,
 			table tbody > tr:nth-child(odd) > td', 'background-color', 'bg', 1.5 ),

	array( '.widget li,
		.contact-info-area', 'border-color', 'bg', 1.5 ),

	array( '.hero-area .button:focus,
		.hero-area .button:hover', 'background-color', 'bg', 2 ),

	// Style pack - Colorful
	array( '.style-pack-colorful .contact-info-area,
		.style-pack-colorful .widget-area,
		.style-pack-colorful .site-footer', 'background-color' ),

	array( '.main-navigation.toggled .menu', 'background-color', 'bg', 1.5 ),

	// Style pack - Modern
	array( '.style-pack-modern .menu-toggle', 'border-color', 'bg', 2 ),

	// Style pack - Vintage
	array( '.style-pack-vintage .main-navigation.toggled .menu', 'background-color', 'bg', 2 ),

	array( '.style-pack-vintage .menu-toggle,
		.style-pack-vintage.single-post article,
		.style-pack-vintage.page article,
		.site-header .contact-info-area:before,
		.site-header .contact-info-area', 'border-color', 'bg', 2 ),

	array( '.style-pack-vintage.single-post article,
 			.style-pack-vintage.page article', 'background-color', 'bg', 1.25 ),

	// Woocommerce
	array( '.woocommerce-tabs ul.tabs li.active:hover a,
			.woocommerce-tabs ul.tabs li.active a', 'background-color' ),
	array( '.woocommerce-tabs ul.tabs li.active', 'border-bottom-color' ),

) );

// Main Accent Color
add_color_rule( 'link', '#ca2017', array(
	array( 'a,
			a:visited,
			.jetpack-social-navigation a:hover,
			.jetpack-social-navigation a:focus', 'color', 'bg' ),

	array( 'a:hover,
			a:focus,
			a:active', 'color', 'bg', 3 ),

	array( '#wp-calendar tfoot a:hover,
			.posts-navigation a:hover,
			.comment-navigation a:hover,
			.entry-footer a:hover,
			.entry-meta a:hover,
			.post-navigation a:hover,
			.site-info a:hover,
			.contact-info-area a:focus,
			.contact-info-area a:hover,
			.site-title a:hover', 'color', 'bg' ),

	array( '.hero-area .button,
			.hero-area .button:focus,
			.hero-area .button:hover', 'color' ),

	array( '.blog .entry-title a:hover,
			.search .entry-title a:hover,
			.archive .entry-title a:hover', 'color', '#000000' ),

	array( '#infinite-handle span:hover,
			.button:active,
			.button:focus,
			.button:hover,
			.bypostauthor .by-post-author,
			button:active,
			button:focus,
			button:hover,
			input[type="button"]:active,
			input[type="button"]:focus,
			input[type="button"]:hover,
			input[type="reset"]:active,
			input[type="reset"]:focus,
			input[type="reset"]:hover,
			input[type="submit"]:active,
			input[type="submit"]:focus,
			input[type="submit"]:hover', 'background-color', 'bg', 2 ),

	array( '.main-navigation.toggled li a:active,
			.main-navigation.toggled li a:focus,
			.main-navigation.toggled li a:hover,
			.main-navigation li:hover > a,
			.main-navigation li.focus > a,
			.main-navigation li.current-menu-item > a,
			.woocommerce-MyAccount-navigation li.is-active a,
			.hero-area', 'background-color' ),

	array( '.main-navigation ul ul > li:first-child:hover:after,
			.main-navigation ul ul > li.current-menu-item:first-child:after', 'border-bottom-color' ),

	array( '.main-navigation ul ul ul > li:first-child:hover:after,
			.main-navigation ul ul ul > li.current-menu-item:first-child:after', 'border-right-color' ),

	array( '.contact-info-area .icon', 'fill', 'bg' ),

	// Style Pack - Colorful
	array( '.style-pack-colorful .main-navigation li li:hover > a,
		.style-pack-colorful .main-navigation li li.focus > a', 'background-color' ),

	array( '.style-pack-colorful h1,
		.style-pack-colorful h2,
		.style-pack-colorful h3,
		.style-pack-colorful h4,
		.style-pack-colorful h5,
		.style-pack-colorful h6', 'color', 'bg', 4 ),

	array( '.style-pack-colorful .hero-area .button,
			.style-pack-colorful .hero-area .button:focus,
			.style-pack-colorful .hero-area .button:hover', 'color', '#ffffff' ),

	// Woocommerce
	array( '.woocommerce-page ul.products li.product a.added_to_cart,
			.woocommerce-page .entry-content .woocommerce-MyAccount-navigation li:hover > a,
			.woocommerce-MyAccount-navigation li.focus > a,
			.woocommerce-tabs ul.tabs li:hover a,
			.site-header-cart:hover>li>a,
			.site-header-cart.focus>li>a,
			.site-header-cart>li:hover>a,
			.site-header-cart>li.focus>a,
			.site-header-cart .widget_shopping_cart_content .woocommerce-mini-cart__buttons a', 'background-color' ),

	array( '.woocommerce-page .star-rating span:before,
			.woocommerce-page p.stars:hover a:before,
			.woocommerce-page p.stars.selected a.active:before,
			.woocommerce-page p.stars.selected a:not(.active):before,
			.woocommerce-tabs ul.tabs li.active a', 'color' ),

),
__( 'Main Accent' ) );

// White
add_color_rule( 'extra', '#ffffff', array(
	array( '#infinite-handle span,
			#wp-calendar tfoot a,
			.comment-navigation a,
			.entry-footer a,
			.entry-footer a:visited,
			.entry-meta,
			.entry-meta a,
			.entry-meta a:visited,
			.post-navigation a,
			.post-navigation a span,
			.posts-navigation a,
			.comment-header cite,
			.comment-header span a,
			input[type="color"],
			input[type="date"],
			input[type="datetime"],
			input[type="datetime-local"],
			input[type="email"],
			input[type="month"],
			input[type="number"],
			input[type="password"],
			input[type="range"],
			input[type="search"],
			input[type="tel"],
			input[type="text"],
			input[type="time"],
			input[type="url"],
			input[type="week"],
			textarea', 'color', 'bg', 3 ),

	array( '.blog .entry-title a,
			.blog .entry-title a:visited,
			.search .entry-title a,
			.search .entry-title a:visited,
			.archive .entry-title a,
			.archive .entry-title a:visited', 'color' ),

	array( '.main-navigation li:hover > a,
			.main-navigation li.focus > a,
			.main-navigation ul li.current-menu-item > a', 'color', 'link', 3 ),

	array( 'a:hover + .dropdown-toggle,
			a:focus + .dropdown-toggle,
			.dropdown-toggle:hover,
			.dropdown-toggle:focus,
			.main-navigation.toggled li a:hover,
			.main-navigation.toggled li a:focus,
			.main-navigation.toggled li a:active,
			.main-navigation.toggled li:hover > a,
			.main-navigation.toggled li.focus > a', 'color', 'link', 6 ),

	array( '.cat-links .icon,
			.tags-links .icon,
			.edit-link .icon', 'fill', 'bg' ),

	// Style Pack - Colorful
	array( '.style-pack-colorful .comments-title,
		.style-pack-colorful .comment-reply-title', 'color', 'bg' ),

	// Woocommerce
	array( '.woocommerce a.button', 'color', '#222222', 3 ),

	array( '.woocommerce a.button:hover,
			.woocommerce-page .site-header-cart:hover .count,
			.woocommerce-page .site-header-cart.focus .count,
			.woocommerce-page .site-header-cart li.is-active a,
			.woocommerce-page .site-header-cart ul ul a,
			.woocommerce-page .site-header-cart:hover>li>a,
			.woocommerce-page .site-header-cart.focus>li>a,
			.woocommerce-page .site-header-cart>li:hover>a,
			.woocommerce-page .site-header-cart>li.focus>a,
			.woocommerce-page ul.products li.product a.added_to_cart,
			.woocommerce-MyAccount-navigation li:hover > a,
			.woocommerce-MyAccount-navigation li.focus > a,
			.woocommerce-MyAccount-navigation li.is-active a,
			.woocommerce-MyAccount-navigation ul ul a,
			.woocommerce-tabs ul.tabs li:hover a,
			.woocommerce-page ul.woocommerce-message li,
			.woocommerce-page ul.woocommerce-info li,
			.woocommerce-page ul.woocommerce-error li,
			.site-header-cart .widget_shopping_cart_content .woocommerce-mini-cart__buttons a', 'color', 'link', 3 ),

	array( '.site-header-cart:hover .icon,
			.site-header-cart.focus .icon', 'fill', 'link', 3 ),

	array( '.woocommerce-store-notice,
			.site-header-cart .widget_shopping_cart_content .product_list_widget li a,
			#site-header-cart .widget_shopping_cart_content .mini_cart_item,
			.site-header-cart ul ul a', 'color' ),
) );

// Light Grey
add_color_rule( 'extra', '#dddddd', array(
	array( 'blockquote:before,
 			blockquote:after', 'background-color', 'bg', 3 ),

	array( 'tbody', 'border-top', 'bg', 3 ),
	array( 'tbody,
		th,
		td', 'border-bottom', 'bg', 3 ),

	// Woocommerce
	array( '.woocommerce.widget_product_search .woocommerce-product-search .search-field', 'background-color' ),
) );

// Dark Grey
add_color_rule( 'extra', '#222222', array(
	array( '.main-navigation a,
			.main-navigation a:visited,
			.main-navigation li.current-menu-item,
			.post-navigation a,
			.site-title a,
			.site-title a:visited,
			.menu-toggle,
			.comment-header cite a,
			.contact-info-area,
			.contact-info-area a,
			body,
			button,
			input,
			select,
			textarea,
			th', 'color', 'bg' ),

	array( '.button,
			.header-search,
			.main-navigation ul ul a,
			button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"]', 'background-color' ),

	array( '.main-navigation ul ul > li:first-child:after', 'border-bottom-color' ),

	array( '.main-navigation ul ul ul > li:first-child:after', 'border-right-color' ),

	array( '.site', 'border-top-color' ),

	array( '.search-toggle .icon', 'fill', 'bg' ),

	// Style Pack - Colorful
	array( '.style-pack-colorful .entry-title,
		.style-pack-colorful .single .entry-title,
		.style-pack-colorful .page-template-default .entry-title,
		.style-pack-colorful .widget-title', 'color', 'bg' ),

	// Woocommerce
	array( '.woocommerce-page ul.products li.product .woocommerce-loop-product__title,
			.woocommerce-page ul.products li.product .price,
			.single-product div.product .product_meta a,
			.woocommerce-tabs ul.tabs li a', 'color', 'bg' ),

	array( '.woocommerce-page ul.products li.product .price ins .amount,
			.woocommerce-page .onsale', 'color', '#fff9c0' ),

	array( '.woocommerce-MyAccount-navigation a,
			.woocommerce-page .site-header-cart .count,
			.woocommerce-page .site-header-cart .cart-contents', 'color', 'bg' ),

	array( '.woocommerce-page .site-header-cart li.is-active a,
			.woocommerce-page .site-header-cart ul ul a,
			.woocommerce-page ul.products li.product a.added_to_cart:hover,
			.woocommerce-MyAccount-navigation ul ul a,
			.woocommerce-store-notice,
			.site-header-cart ul ul a', 'background-color' ),
) );

add_color_rule( 'extra', '#444444', array(
	array( 'th', 'color', 'bg', 6 ),

	// Woocommerce
	array( '.woocommerce-page ul.products li.product .price del,
			.woocommerce-page .star-rating:before,
			.woocommerce-page p.stars a:before,
			.woocommerce-page p.stars.selected a.active~a:before,
			.woocommerce-page p.stars a:hover~a:before,
			.woocommerce.widget_product_search .woocommerce-product-search .search-field', 'color', 'bg', 6 ),
) );

// Grey
add_color_rule( 'extra', '#888888', array(
	array( '.site-info,
			.site-info a,
			.archive .page-title,
			.search .page-title,
			.error404 .page-title', 'color', 'bg', 3 ),

	// Woocommerce
	array( '.single-product div.product .entry-summary .price del,
			.single-product div.product .product_meta,
			.single-product div.product .commentlist .comment-text .meta', 'color', 'bg', 3 ),
) );

// Mid Grey
add_color_rule( 'extra', '#666666', array(
	array( 'blockquote,
			.jetpack-social-navigation a,
			.jetpack-social-navigation a:visited,
			.dropdown-toggle,
			.dropdown-toggle:hover
			.dropdown-toggle:hover,
			.main-navigation.toggled ul a', 'color', 'bg' ),

	// Style Pack - Vintage
	array( '.style-pack-vintage .entry-content blockquote', 'color', '#f7f7f4' ),
) );

// Black
add_color_rule( 'extra', '#000000', array(
	array( '.comments-area,
			.respond,
			#infinite-handle span', 'background-color', 0.1 ),

	array( '.archive:not(.style-pack-vintage) .entry-header,
			.blog:not(.style-pack-vintage) .entry-header,
			.search-results:not(.style-pack-vintage) .entry-header', 'background-color', 0.35 ),

	array( '.archive:not(.style-pack-vintage) article:nth-of-type(even) .entry-header,
			.blog:not(.style-pack-vintage) article:nth-of-type(even) .entry-header,
			.search-results:not(.style-pack-vintage) article:nth-of-type(even) .entry-header', 'background-color', 0.4 ),

	array( '.archive .entry-header:hover,
			.archive article:nth-of-type(even) .entry-header:hover,
			.blog .entry-header:hover,
			.blog  article:nth-of-type(even) .entry-header:hover,
			.search-results .entry-header:hover,
			.search-results  article:nth-of-type(even) .entry-header:hover', 'background-color', 0.75 ),

	array( '.comments-area,
			.entry-author,
			.entry-links,
			.page-header,
			.post-navigation,
			.respond,
			.post-nav-wrapper,
			.site-footer,
			.widget-area,
			.main-navigation.toggled ul,
			#wp-calendar thead th', 'border-top-color', 0.15 ),

	array( '.comments-title,
			.error-404 .page-header,
			.no-results .page-header,
			.page.no-featured-image .site-header,
			.search-no-results .page-header,
			.single.no-featured-image .site-header,
			#wp-calendar thead th,
			#wp-calendar tbody', 'border-bottom-color', 0.15 ),

	array( '.contact-info-area', 'border-color', 0.15 ),

	// Woocommerce
	array( '.woocommerce-page .site-header-cart ul ul a,
			.woocommerce-products-header,
			.woocommerce-page table.shop_table_responsive,
			.woocommerce-page table.shop_table_responsive thead th,
			.woocommerce-page table.shop_table_responsive tbody tr,
			.woocommerce-cart .cart_totals .shop_table tr,
			.woocommerce-checkout .shop_table thead,
			.woocommerce-checkout .shop_table tbody,
			.woocommerce-checkout .shop_table tfoot,
			.single-product div.product .cart,
			.single-product div.product .product_meta,
			.single-product div.product .commentlist .comment,
			.woocommerce-tabs ul.tabs,
			.woocommerce-tabs ul.tabs li,
			.woocommerce-page .upsells.products,
			.woocommerce-page .related.products', 'border-color', 0.15 ),

) );

// Green (Woocommerce)
add_color_rule( 'extra', '#0f834d', array(

	// Woocommerce
	array( '.woocommerce-page .stock.in-stock,
			.woocommerce-password-strength.strong', 'color', 'bg' ),

	array( '.woocommerce-page .form-row.woocommerce-validated input.input-text,
			.woocommerce-page .form-row.woocommerce-validated .select2-selection', 'border-color', 'bg' ),

	array( '.woocommerce-message,
			.woocommerce-info,
			.woocommerce-error,
			.woocommerce-noreviews,
			p.no-comments', 'border-color', 'bg' ),
) );

// Red (Woocommerce)
add_color_rule( 'extra', '#e2401c', array(

	// Woocommerce
	array( '.woocommerce-page .stock.out-of-stock,
			.woocommerce-password-strength.short,
			.woocommerce-password-strength.bad,
			.woocommerce-page .required', 'color', 'bg' ),

	array( '.form-row.woocommerce-invalid input.input-text', 'border-color', 'bg' ),

	array( '.woocommerce-error,
			ul.woocommerce-error li', 'background-color' ),

) );

// Blue (Woocommerce)
add_color_rule( 'extra', '#e2401c', array(

	// Woocommerce
	array( '.woocommerce-password-strength.good', 'color', 'bg' ),

	array( '.widget_price_filter .ui-slider .ui-slider-handle,
			.widget_price_filter .ui-slider .ui-slider-range', 'background-color', 'bg' ),

) );

function radcliffe_2_extra_css() { ?>

.style-pack-vintage .comment-wrapper,
.style-pack-vintage .pingback,
.style-pack-vintage .trackback {
	background-color: transparent;
}

.style-pack-colorful.archive article:nth-of-type(3n+1) .entry-header,
.style-pack-colorful.blog article:nth-of-type(3n+1) .entry-header,
.style-pack-colorful.search-results article:nth-of-type(3n+1) .entry-header,
.style-pack-colorful.archive article:nth-of-type(3n+2) .entry-header,
.style-pack-colorful.blog article:nth-of-type(3n+2) .entry-header,
.style-pack-colorful.search-results article:nth-of-type(3n+2) .entry-header,
.style-pack-colorful.archive article:nth-of-type(3n+3) .entry-header,
.style-pack-colorful.blog article:nth-of-type(3n+3) .entry-header,
.style-pack-colorful.search-results article:nth-of-type(3n+3) .entry-header {
	background-color: rgba( 0, 0, 0, 0.35 );
}

.style-pack-colorful.archive article:nth-of-type(3n+1) .entry-header:hover,
.style-pack-colorful.blog article:nth-of-type(3n+1) .entry-header:hover,
.style-pack-colorful.search-results article:nth-of-type(3n+1) .entry-header:hover,
.style-pack-colorful.archive article:nth-of-type(3n+2) .entry-header:hover,
.style-pack-colorful.blog article:nth-of-type(3n+2) .entry-header:hover,
.style-pack-colorful.search-results article:nth-of-type(3n+2) .entry-header:hover,
.style-pack-colorful.archive article:nth-of-type(3n+3) .entry-header:hover,
.style-pack-colorful.blog article:nth-of-type(3n+3) .entry-header:hover,
.style-pack-colorful.search-results article:nth-of-type(3n+3) .entry-header:hover {
	background-color: rgba( 0, 0, 0, 0.75 );
}

.style-pack-colorful .hero-area-button .button {
	background-color: #fff;
	box-shadow: 0 5px 0 0 #ccc;
}

.style-pack-colorful .hero-area-button .button:hover {
	background-color: #fff;
	box-shadow: 0 10px 0 0 #ccc;
}

.style-pack-colorful .hero-area-button .button:focus,
.style-pack-colorful .hero-area-button .button:active {
	background-color: #fff;
	box-shadow: 0 0 0 0 #ccc;
}

@media screen and (max-width: 768px) {
	.site-header .main-navigation.toggled ul ul {
		background-color: transparent;
		border-top: 0;
	}

	.site-header .main-navigation li.current-menu-item > a {
		background-color: transparent;
		color: #666;
	}

	.site-header .main-navigation li.current-menu-item > a {
		color: inherit;
	}

	.style-pack-vintage.single-post article,
	.style-pack-vintage.page article {
		background-color: none;
		border: 0;
	}
}

@media screen and (min-width: 768px) {
	.main-navigation .sub-menu a,
	.main-navigation .sub-menu a:visited {
		color: #fff;
	}
}

<?php }
add_theme_support( 'custom_colors_extra_css', 'radcliffe_2_extra_css' );

//Additional palettes
add_color_palette( array(
	'#ffffff',
	'',
	'#e2632a',
), 'White and Orange' );

add_color_palette( array(
	'#ffffff',
	'',
	'#20a6e8',
), 'White and Blue' );

add_color_palette( array(
	'#e5e5e5',
	'',
	'#3d348b',
), 'Grey and Purple' );

add_color_palette( array(
	'#3a3a3a',
	'',
	'#e7c52b',
), 'Dark Grey and Yellow' );

add_color_palette( array(
	'#303030',
	'',
	'#6fb3aa',
), 'Dark Grey and Green' );

add_color_palette( array(
	'#413e4a',
	'',
	'#a86b96',
), 'Dark Purple and Pink' );
