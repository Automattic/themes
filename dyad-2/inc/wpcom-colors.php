<?php
/* Custom Colors: Dyad */

//Background
add_color_rule( 'bg', '#292c2f', array(
	array( '.site-header:before,
		.is-singular .entry-media-thumb,
		#commentform input[type="submit"],
		#infinite-handle,
		.posts-navigation,
		.site-footer,
		.site-header-cart .widget_shopping_cart_content,
		.widget_shopping_cart .mini_cart_item .remove:hover', 'background-color' ),

	array( '.site-header-cart .widget_shopping_cart:before', 'border-bottom-color' ),

	array( '.bypostauthor .comment-author:before', 'color' ),

	// contrast against white
	array( '#site-navigation ul ul li', 'background-color', '#ffffff', 3 ),

	array( '#site-navigation ul ul:before', 'border-bottom-color', '#ffffff', 3 ),

	array( '#site-navigation ul ul ul:before', 'border-right-color', '#ffffff', 3 ),

	array( '.posts .entry-inner:before', 'color', '#ffffff' ),

	// slightly darker version of this colour
	array( '.posts,
		.posts .entry-media,
		.comments-area-wrapper,
		.milestone-widget .milestone-header,
		.footer-bottom-info', 'background-color', '-0.5' ),

	array( '.milestone-widget .milestone-countdown', 'border-color', '-0.5' ),

	array( '.milestone-widget .milestone-countdown,
		.milestone-widget .milestone-message', 'color', '#ffffff', 2 ),

	// slightly darker version of this colour
	array( '.site-header #site-navigation ul li', 'border-color', '-1.0' ),

	// contrast against this colour
	array( '.comment-author.vcard cite', 'color', 'bg', 6 ),

	array( '.bypostauthor .comment-author:before', 'background-color', 'bg', 6 ),

	array( '.comment-meta,
		.comment .reply:before,
		.comment .reply a', 'color', 'bg', 4 ),

	array( '.comment-meta', 'border-bottom-color', 'bg', 2 ),

) );

// Text
add_color_rule( 'txt', '#616a74', array(

	// Contrast against bg
	array('#infinite-handle span button,
		#infinite-handle span button:hover,
		#infinite-handle span button:focus,
		.posts-navigation a,
		.widget,
		.site-footer', 'color', 'bg', 5),

	array( '.comments-area-wrapper', 'color', 'bg' ),

	array( '.widget_search ::-webkit-input-placeholder', 'color', 'bg', 3),
	array( '.widget_search :-moz-placeholder', 'color', 'bg', 3),
	array( '.widget_search ::-moz-placeholder', 'color', 'bg', 3),
	array( '.widget_search :-ms-input-placeholder', 'color', 'bg', 3),

	array('.site-header,
		#site-navigation a,
		.menu-toggle,
		.comments-title .add-comment-link,
		.comments-title,
		.comments-title a,
		.comments-area-wrapper,
		.comments-area-wrapper h1,
		.comments-area-wrapper h2,
		.comments-area-wrapper h3,
		.comments-area-wrapper h4,
		.comments-area-wrapper h5,
		.comments-area-wrapper h6,
		.comment-body pre,
		.comment-footer .author.vcard,
		.comment-footer,
		#commentform input[type="submit"],
		.widget h1,
		.widget h2,
		.widget h3,
		.widget h4,
		.widget h5,
		.widget h6,
		.widget a,
		.widget button,
		.widget_search input,
		.widget input[type="submit"],
		.widget-area select,
		.widget_flickr #flickr_badge_uber_wrapper a:hover,
		.widget_flickr #flickr_badge_uber_wrapper a:link,
		.widget_flickr #flickr_badge_uber_wrapper a:active,
		.widget_flickr #flickr_badge_uber_wrapper a:visited,
		.widget_goodreads div[class^="gr_custom_each_container"],
		.milestone-header', 'color', 'bg', 12),

	array( '.widget ul li,
		.widget_jp_blogs_i_follow ol li', 'border-top-color', 'bg', 0.2 ),
	array( '.comment-footer,
		.widget ul li,
		.widget_jp_blogs_i_follow ol li', 'border-bottom-color', 'bg', 0.2 ),

	array( '.comments-title,
		.comments-area-wrapper blockquote,
		#commentform input[type="text"],
		#commentform input[type="email"],
		#commentform input[type="url"],
		#commentform textarea,
		.widget .tagcloud a,
		.widget.widget_tag_cloud a,
		.wp_widget_tag_cloud a,
		.widget button,
		.widget input[type="submit"],
		.widget table,
		.widget th,
		.widget td,
		.widget input,
		.widget select,
		.widget textarea', 'border-color', 'bg', 0.2 ),

	// Contrast against link
	array( '.site-banner-header .banner-featured', 'color', 'link' ),

	// Contrast against white
	array( '.error404-widgets .widget a', 'color', '#ffffff' ),
	array( '.error404 .entry-content .widget ul li', 'color', '#ffffff', 3 ),

) );

// bright blue
add_color_rule( 'link', '#678db8', array(
	array( '.site-banner-header .banner-featured,
		.banner-custom-header .site-banner-header h1:before,
		.has-post-thumbnail .entry-meta .cat-links,
		.widget_shopping_cart .mini_cart_item .remove,
		.woocommerce-tabs ul.tabs li.active a,
		.widget_price_filter .ui-slider .ui-slider-handle,
		.widget_price_filter .ui-slider .ui-slider-range,
		.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger', 'background-color' ),
	array( '.button,
		button,
		input[type="submit"],
		.onsale', 'background-color', '#ffffff', 2 ),
	array( '.button,
		button,
		input[type="submit"],
		table.shop_table td.actions .coupon .button', 'border-color' ),

	// text
	array( '.single-product div.product .price .amount,
		.star-rating span:before,
		p.stars:hover a:before,
		p.stars.selected a.active:before,
		p.stars.selected a:not(.active):before', 'color' ),

	// Contrast against white
	array( '.error404 .entry-content .widget ul li', 'border-color', '#ffffff', 2 ),

) );

// yellow
add_color_rule( 'fg1', '#e7ae01', array(
	// contrast against white
	array( 'pre:before,
		.link-more a,
		.posts .hentry:hover .link-more a,
		.is-singular .entry-inner:after,
		.error404 .entry-inner:after,
		.page-template-eventbrite-index .page-header:after,
		.single-event .entry-header:after,
		.is-singular .post-navigation .nav-links:after,
		.single-product div.product:after,
		.single-product .product section:first-of-type::after,
		.product .button,
		ul.products li.product .button', 'background-color', '#ffffff', 1 ),

	// contrast against link
	array( '.has-post-thumbnail.is-singular:not(.home) .entry-header .cat-links a', 'color', 'link', 3 ),
) );

add_color_rule( 'extra', '#ffffff', array(

	// contrast against Accent #1
	array( '.link-more a', 'color', 'fg1', 2 ),

) );

//Extra CSS
function dyad_extra_css() { ?>

	blockquote,
	blockquote cite,
	.comments-area-wrapper blockquote,
	.comments-area-wrapper blockquote cite {
		color: inherit;
	}

	.site-header,
	.is-scrolled .site-header,
	.home .site-header,
	.blog .site-header {
		background: transparent;
		text-shadow: none;
	}

	#page .site-header:before {
		bottom: 0;
		content: "";
		display: block;
		left: 0;
		opacity: 0.8;
		position: absolute;
		right: 0;
		top: 0;
		z-index: 0;
	}

	#site-navigation ul ul a {
		color: #fff;
	}

	.banner-featured {
		text-shadow: none;
	}

	.posts .entry-inner:before {
		opacity: 0.3;
	}

	.posts .hentry:not(.has-post-thumbnail) .entry-inner:after {
			border-color: #ddd;
	}

	.posts .hentry:not(.has-post-thumbnail):before {
		border-color: #e1e1e1;
	}

	.posts .hentry .link-more a {
		opacity: 1.0;
		-webkit-transition: opacity 0.3s;
		transition: opacity 0.3s;
	}

	.posts .hentry:hover .link-more a {
		opacity: 0.75;
	}

	.posts .edit-link a {
		color: #ccc;
	}

	.posts .edit-link a:hover {
		color: #aaa;
	}

	.widget thead tr,
	.widget tr:hover {
		background-color: rgba(0,0,0,0.1);
	}

	@media only screen and (max-width: 1200px) {
		.site-header:before,
		.is-scrolled .site-header:before {
			opacity: 1.0;
		}

		.has-post-thumbnail .entry-header .entry-meta .cat-links {
			background-color: transparent;
		}

		.has-post-thumbnail.is-singular:not(.home) .entry-header .cat-links a,
		.has-post-thumbnail.is-singular:not(.home) .entry-header .cat-links {
    		color: #6a6c6e !important;
		}
	}

	@media only screen and (max-width: 960px) {
		#site-navigation ul a,
		#site-navigation ul ul a {
			color: inherit;
		}

		.site-header #site-navigation ul ul li {
			background-color: transparent;
		}
	}

<?php }
add_theme_support( 'custom_colors_extra_css', 'dyad_extra_css' );


//Additional palettes
add_color_palette( array(
	'#42282f',
	'#653f49',
	'#d6655a',
	'#74a588',
) );

add_color_palette( array(
	'#1e1e20',
	'#2a2c2b',
	'#dc3522',
	'#d9cb9e',
) );

add_color_palette( array(
	'#193441',
	'#3e606f',
	'#91aa9d',
	'#d1dbbd',
) );

add_color_palette( array(
	'#ffffff',
	'#dddddd',
	'#01a2a6',
	'#1ed3d7',
) );

add_color_palette( array(
	'#26231c',
	'#787166',
	'#accfcc',
	'#baaf9e'
) );

add_color_palette( array(
	'#111625',
	'#baaf9e',
	'#571b3c',
	'#accfcc'
) );
