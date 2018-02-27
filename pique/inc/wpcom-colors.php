<?php
/* Custom Colors: Pique */

// Background
add_color_rule( 'bg', '#ffffff', array(

	// No contast needed
	array( 'body,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		textarea:focus,
		.widget_price_filter .ui-slider .ui-slider-handle',
	'background-color' ),

	// Primary button text colour—needs contrast against button background
	array( 'button, .archive .read-more a, .blog .read-more a, .search-results .read-more a, .button, input[type="button"], input[type="reset"], input[type="submit"], .site-header-cart .woocommerce.widget_shopping_cart .product_list_widget li a, ul.products li.product .added_to_cart, .woocommerce-tabs ul.tabs li:not(.active) a, .demo_store, .demo_store a, .site-header-cart .woocommerce.widget_shopping_cart .woocommerce-mini-cart__buttons a, .woocommerce.widget_shopping_cart .woocommerce-mini-cart__buttons a',
	'color', 'link' ),

	array( '.woocommerce-tabs ul.tabs li.active',
	'border-bottom-color' ),
),
__( 'Background Color' ) );

// Main neutral colour — chocolate brown, used for navbars and other stuff in different tints
add_color_rule( 'txt', '#2d2a26', array(

	// Panels and overlays can't be white, since our text overlaid on top is white
	array( '.pique-panel:nth-of-type(even),
		#masthead,
		.overlay,
		.widget_price_filter .ui-slider .ui-slider-range',
	'background-color', '#ffffff' ),

	// Same deal with nav bar (text is always white)
	array( '.main-navigation',
	'background-color', '#ffffff' ),

	// Sub-menus and borders should be a smidge darker
	array( '.main-navigation',
	'border-color', '-0.25' ),

	array( '.main-navigation ul ul',
	'background-color', '-0.25' ),

	array( '.main-navigation ul ul::before',
	'border-bottom-color', '-0.25',  ),

	array( '.main-navigation ul ul ul::before',
	'border-right-color', '-0.25',  ),

	// Ah... this needs contrast against something, but I don't know what!
	array( '.widget ul a,
			.woocommerce.widget .amount,
			.woocommerce.widget .reviewer,
			.woocommerce.widget .total,
			.woocommerce.widget .quantity,
			.woocommerce.widget li del',
	'color' ),


	// Social media links don't need contrast here
	array( '.widget.widget_wpcom_social_media_icons_widget ul a, .widget.jetpack_widget_social_icons ul a,
					.secondary-links li a[href*="wordpress.org"]::before, .secondary-links li a[href*="facebook.com"]::before, .secondary-links li a[href*="twitter.com"]::before, .secondary-links li a[href*="dribbble.com"]::before, .secondary-links li a[href*="plus.google.com"]::before, .secondary-links li a[href*="pinterest.com"]::before, .secondary-links li a[href*="github.com"]::before, .secondary-links li a[href*="tumblr.com"]::before, .secondary-links li a[href*="youtube.com"]::before, .secondary-links li a[href*="flickr.com"]::before, .secondary-links li a[href*="vimeo.com"]::before, .secondary-links li a[href*="instagram.com"]::before, .secondary-links li a[href*="codepen.io"]::before, .secondary-links li a[href*="linkedin.com"]::before, .secondary-links li a[href*="foursquare.com"]::before, .secondary-links li a[href*="reddit.com"]::before, .secondary-links li a[href*="digg.com"]::before, .secondary-links li a[href*="getpocket.com"]::before, .secondary-links li a[href*="path.com"]::before, .secondary-links li a[href*="stumbleupon.com"]::before, .secondary-links li a[href*="spotify.com"]::before, .secondary-links li a[href*="twitch.tv"]::before, .secondary-links li a[href*="dropbox.com"]::before, .secondary-links li a[href*="/feed"]::before, .secondary-links li a[href*="skype"]::before, .secondary-links li a[href*="mailto"]::before',
	'background-color' ),

	array( '.widget.widget_wpcom_social_media_icons_widget ul a:hover, .widget.jetpack_widget_social_icons ul a:hover,
					.secondary-links li a[href*="wordpress.org"]:hover::before, .secondary-links li a[href*="facebook.com"]:hover::before, .secondary-links li a[href*="twitter.com"]:hover::before, .secondary-links li a[href*="dribbble.com"]:hover::before, .secondary-links li a[href*="plus.google.com"]:hover::before, .secondary-links li a[href*="pinterest.com"]:hover::before, .secondary-links li a[href*="github.com"]:hover::before, .secondary-links li a[href*="tumblr.com"]:hover::before, .secondary-links li a[href*="youtube.com"]:hover::before, .secondary-links li a[href*="flickr.com"]:hover::before, .secondary-links li a[href*="vimeo.com"]:hover::before, .secondary-links li a[href*="instagram.com"]:hover::before, .secondary-links li a[href*="codepen.io"]:hover::before, .secondary-links li a[href*="linkedin.com"]:hover::before, .secondary-links li a[href*="foursquare.com"]:hover::before, .secondary-links li a[href*="reddit.com"]:hover::before, .secondary-links li a[href*="digg.com"]:hover::before, .secondary-links li a[href*="getpocket.com"]:hover::before, .secondary-links li a[href*="path.com"]:hover::before, .secondary-links li a[href*="stumbleupon.com"]:hover::before, .secondary-links li a[href*="spotify.com"]:hover::before, .secondary-links li a[href*="twitch.tv"]:hover::before, .secondary-links li a[href*="dropbox.com"]:hover::before, .secondary-links li a[href*="/feed"]:hover::before, .secondary-links li a[href*="skype"]:hover::before, .secondary-links li a[href*="mailto"]:hover::before',
	'border-color' ),

	array( '.widget.widget_wpcom_social_media_icons_widget ul a:hover::before, .widget.jetpack_widget_social_icons ul a:hover,
					.secondary-links li a[href*="wordpress.org"]:hover::before, .secondary-links li a[href*="facebook.com"]:hover::before, .secondary-links li a[href*="twitter.com"]:hover::before, .secondary-links li a[href*="dribbble.com"]:hover::before, .secondary-links li a[href*="plus.google.com"]:hover::before, .secondary-links li a[href*="pinterest.com"]:hover::before, .secondary-links li a[href*="github.com"]:hover::before, .secondary-links li a[href*="tumblr.com"]:hover::before, .secondary-links li a[href*="youtube.com"]:hover::before, .secondary-links li a[href*="flickr.com"]:hover::before, .secondary-links li a[href*="vimeo.com"]:hover::before, .secondary-links li a[href*="instagram.com"]:hover::before, .secondary-links li a[href*="codepen.io"]:hover::before, .secondary-links li a[href*="linkedin.com"]:hover::before, .secondary-links li a[href*="foursquare.com"]:hover::before, .secondary-links li a[href*="reddit.com"]:hover::before, .secondary-links li a[href*="digg.com"]:hover::before, .secondary-links li a[href*="getpocket.com"]:hover::before, .secondary-links li a[href*="path.com"]:hover::before, .secondary-links li a[href*="stumbleupon.com"]:hover::before, .secondary-links li a[href*="spotify.com"]:hover::before, .secondary-links li a[href*="twitch.tv"]:hover::before, .secondary-links li a[href*="dropbox.com"]:hover::before, .secondary-links li a[href*="/feed"]:hover::before, .secondary-links li a[href*="skype"]:hover::before, .secondary-links li a[href*="mailto"]:hover::before',
	'color' ),

),
__( 'Panel & Menu Background' ) );

// Alternate panel colour (currently dark teal)
add_color_rule( 'fg2', '#293942', array(
	// Again, this needs to contast against white so the text shows up
	array( '.pique-panel', 'background-color', '#ffffff',  ),
),
__( 'Alternate Panel Background' ) );

// Primary Accent colour - light blue, used for headings and links and stuff
add_color_rule( 'link', '#83b6cc', array(

	// Need contrast against background (always some variant of white—page is a mostly-opaque layer on top of the background)
	array( 'h1, h2, h3, blockquote cite, h4, h5, h6,
					input[type="text"]:focus,
					input[type="email"]:focus,
					input[type="url"]:focus,
					input[type="password"]:focus,
					input[type="search"]:focus,
					textarea:focus,
					button:hover,
					.archive .read-more a:hover,
					.blog .read-more a:hover,
					.search-results .read-more a:hover,
					.button:hover,
					input[type="button"]:hover,
					input[type="reset"]:hover,
					input[type="submit"]:hover,
					button:active,
					.archive .read-more a:active,
					.blog .read-more a:active,
					.search-results .read-more a:active,
					button:focus,
					.archive .read-more a:focus,
					.blog .read-more a:focus,
					.search-results .read-more a:focus,
					.button:active,
					.button:focus,
					input[type="button"]:active,
					input[type="button"]:focus,
					input[type="reset"]:active,
					input[type="reset"]:focus,
					input[type="submit"]:active,
					input[type="submit"]:focus,
					button.minimal,
					.archive .read-more a.minimal,
					.blog .read-more a.minimal,
					.search-results .read-more a.minimal,
					.button.minimal,
					input[type="button"].minimal,
					input[type="reset"].minimal,
					input[type="submit"].minimal,
					a,
					ul.products li.product .added_to_cart:hover,
					.woocommerce-message,
					.woocommerce-info,
					.woocommerce-error,
					.woocommerce-noreviews,
					p.no-comments,
					.site-header-cart .woocommerce.widget_shopping_cart .woocommerce-mini-cart__buttons a:hover,
					.woocommerce.widget_products .product_list_widget li a,
					.woocommerce.widget_recent_reviews .product_list_widget li a,
					.woocommerce.widget_shopping_cart .product_list_widget li a,
					.woocommerce.widget_top_rated_products .product_list_widget li a,
					.woocommerce.widget_recently_viewed_products .product_list_widget li a,
					.woocommerce.widget_shopping_cart .woocommerce-mini-cart__buttons a:hover,
					.widget_price_filter .ui-slider .ui-slider-handle',
	'color', '#ffffff' ),

	// Needs contrast against footer background—always dark (opaque block covers the image)
	array( '.widget-title',
	'color', '#1f1d1a' ),

	// Main navigation links -- need contrast against navbar colour
	array( '.main-navigation a:hover',
	'color', 'txt' ),

	// Active and focused input types. Don't need contrast per se, but should match the text color, so we'll apply the same rules.
	array( 'input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus, textarea:focus,
					button:hover, .archive .read-more a:hover, .blog .read-more a:hover, .search-results .read-more a:hover, .button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover,
					button:active, .archive .read-more a:active, .blog .read-more a:active, .search-results .read-more a:active, .button:active, input[type="button"]:active, input[type="reset"]:active, input[type="submit"]:active,
					button:focus, .archive .read-more a:focus, .blog .read-more a:focus, .search-results .read-more a:focus, .button:focus, input[type="button"]:focus, input[type="reset"]:focus, input[type="submit"]:focus,
					ul.products li.product .added_to_cart:hover,
					.woocommerce-tabs ul.tabs,
					.woocommerce-tabs ul.tabs li',
	'border-color', '#ffffff'  ),

	// Let's make active buttons use a similar shade for the background, but we'll dial back the opacity
	array( 'button:active, .button:active, input[type="button"]:active, input[type="reset"]:active, input[type="submit"]:active,
				.archive .read-more a:active, .blog .read-more a:active, .search-results .read-more a:active,
				button:focus, .button:focus, input[type="button"]:focus, input[type="reset"]:focus, input[type="submit"]:focus,
				.archive .read-more a:focus, .blog .read-more a:focus, .search-results .read-more a:focus',
	'background-color',  0.05 ),

	// We don't really need any contast here!
	array( '.widget, .pique-panel-content form, .overlay, .single-product div.product .related',
	'border-top-color', '#ffffff' ),

	array( '.comment-navigation, .posts-navigation, .post-navigation,
			table.shop_table thead tr, table.shop_table_responsive thead tr,
			.product .onsale,
			.product .onsale:after,
			.product .onsale:before',
	'border-color', '#ffffff' ),

	// Post navigation -- needs contrast against background
	array( '.comment-navigation .nav-previous a, .comment-navigation .nav-next a,	.posts-navigation .nav-previous a,	.posts-navigation .nav-next a,	.post-navigation .nav-previous a,	.post-navigation .nav-next a, .product .onsale',
	'color', '#ffffff' ),

	// Spans should be a smidge lighter
	array( '.comment-navigation .nav-previous a span, .comment-navigation .nav-next a span, .posts-navigation .nav-previous a span, .posts-navigation .nav-next a span, .post-navigation .nav-previous a span, .post-navigation .nav-next a span',
	'color', '-0.25',  ),

	// Make infinite span hovers a smidge lighter, too
	array( '.infinite-scroll #infinite-handle button:hover, .infinite-scroll #infinite-handle .archive .read-more a:hover, .archive .read-more .infinite-scroll #infinite-handle a:hover, .infinite-scroll #infinite-handle .blog .read-more a:hover, .blog .read-more .infinite-scroll #infinite-handle a:hover, .infinite-scroll #infinite-handle .search-results .read-more a:hover, .search-results .read-more .infinite-scroll #infinite-handle a:hover',
	'color', '-0.25',  ),

	// Typically appears on top of images, thus needs... no contrast?
	array( '.pique-template-testimonials .pique-testimonials article .entry-content cite,
					.site-branding .site-title,
					#pique-hero .pique-panel-content .entry-content em,
					.pique-template-grid .pique-panel-content h3,
					.pique-template-grid .pique-panel-content blockquote cite,
					blockquote .pique-template-grid .pique-panel-content cite,
					.pique-template-grid .pique-panel-content .pique-template-testimonials .pique-testimonials article .entry-content cite,
					.pique-template-testimonials .pique-testimonials article .entry-content .pique-template-grid .pique-panel-content cite,
					.pique-template-grid .pique-panel-content .site-branding .site-title,
					.site-branding .pique-template-grid .pique-panel-content .site-title,
					.pique-template-grid .pique-panel-content .widget-title,
					.pique-template-grid .pique-panel-content h3 a,
					.pique-template-grid .pique-panel-content blockquote cite a,
					blockquote .pique-template-grid .pique-panel-content cite a,
					.pique-template-grid .pique-panel-content .pique-template-testimonials .pique-testimonials article .entry-content cite a,
					.pique-template-testimonials .pique-testimonials article .entry-content .pique-template-grid .pique-panel-content cite a,
					.pique-template-grid .pique-panel-content .site-branding .site-title a,
					.site-branding .pique-template-grid .pique-panel-content .site-title a,
					.pique-template-grid .pique-panel-content .widget-title a,
					.pique-template-testimonials .pique-panel-content h3,
					.pique-template-testimonials .pique-panel-content blockquote cite,
					blockquote .pique-template-testimonials .pique-panel-content cite,
					.pique-template-testimonials .pique-panel-content .pique-testimonials article .entry-content cite,
					.pique-template-testimonials .pique-testimonials article .entry-content .pique-panel-content cite,
					.pique-template-testimonials .pique-panel-content .site-branding .site-title,
					.site-branding .pique-template-testimonials .pique-panel-content .site-title,
					.pique-template-testimonials .pique-panel-content .widget-title,
					.pique-template-testimonials .pique-panel-content h3 a,
					.pique-template-testimonials .pique-panel-content blockquote cite a,
					blockquote .pique-template-testimonials .pique-panel-content cite a,
					.pique-template-testimonials .pique-panel-content .pique-testimonials article .entry-content cite a,
					.pique-template-testimonials .pique-testimonials article .entry-content .pique-panel-content cite a,
					.pique-template-testimonials .pique-panel-content .site-branding .site-title a,
					.site-branding .pique-template-testimonials .pique-panel-content .site-title a,
					.pique-template-testimonials .pique-panel-content .widget-title a,
					.pique-template-recent-posts .pique-panel-content h3,
					.pique-template-recent-posts .pique-panel-content blockquote cite,
					blockquote .pique-template-recent-posts .pique-panel-content cite,
					.pique-template-recent-posts .pique-panel-content .pique-template-testimonials .pique-testimonials article .entry-content cite,
					.pique-template-testimonials .pique-testimonials article .entry-content .pique-template-recent-posts .pique-panel-content cite,
					.pique-template-recent-posts .pique-panel-content .site-branding .site-title,
					.site-branding .pique-template-recent-posts .pique-panel-content .site-title,
					.pique-template-recent-posts .pique-panel-content .widget-title,
					.pique-template-recent-posts .pique-panel-content h3 a,
					.pique-template-recent-posts .pique-panel-content blockquote cite a,
					blockquote .pique-template-recent-posts .pique-panel-content cite a,
					.pique-template-recent-posts .pique-panel-content .pique-template-testimonials .pique-testimonials article .entry-content cite a,
					.pique-template-testimonials .pique-testimonials article .entry-content .pique-template-recent-posts .pique-panel-content cite a,
					.pique-template-recent-posts .pique-panel-content .site-branding .site-title a,
					.site-branding .pique-template-recent-posts .pique-panel-content .site-title a,
					.pique-template-recent-posts .pique-panel-content .widget-title a,
					.infinite-scroll #infinite-handle button,
					.infinite-scroll #infinite-handle .archive .read-more a,
					.archive .read-more .infinite-scroll #infinite-handle a,
					.infinite-scroll #infinite-handle .blog .read-more a,
					.blog .read-more .infinite-scroll #infinite-handle a,
					.infinite-scroll #infinite-handle .search-results .read-more a,
					.search-results .read-more .infinite-scroll #infinite-handle a,
					.star-rating span:before,
					p.stars:hover a:before,
					p.stars.selected a.active:before,
					p.stars.selected a:not(.active):before,
					.woocommerce-tabs ul.tabs li:not(.active):hover a,
					.woocommerce-tabs ul.tabs li a,
					.woocommerce-MyAccount-content .woocommerce-info,
					.widget_price_filter .ui-slider .ui-slider-handle:hover,
					.widget_price_filter .ui-slider .ui-slider-handle.ui-state-active',
	'color' ),

	array( '.comment-list .children', 'border-left-color' ),

	// Button backgrounds -- need contrast with nothing
	array( 'button,
				.archive .read-more a,
				.blog .read-more a,
				.search-results .read-more a,
				.button,
				input[type="button"],
				input[type="reset"],
				input[type="submit"],
				ul.products li.product .added_to_cart,
				.woocommerce-tabs ul.tabs li:not(.active),
				.demo_store',
	'background' ),
),
__( 'Main Accent' ) );

// Secondary Accent colour: a sort of beige/tan used here and there
add_color_rule( 'fg1', '#e9d5c0', array(

	// Contrast against background--again, we fake this by using white
	array( 'a:hover, a:focus, a:active,
					.posts-navigation a,
					.site-main .posts-navigation a,
					.site-footer a,
					.pique-template-testimonials .pique-testimonials h2,
					.site-header-cart .woocommerce.widget_shopping_cart .product_list_widget li a:hover,
					.site-header-cart .woocommerce.widget .amount,
					.site-header-cart .woocommerce.widget .reviewer,
					.site-header-cart .woocommerce.widget .total,
					.site-header-cart .woocommerce.widget .quantity,
					.woocommerce-MyAccount-navigation li.is-active a,
					.footer-widget-area .woocommerce.widget .amount,
					.footer-widget-area .woocommerce.widget .reviewer,
					.footer-widget-area .woocommerce.widget .total,
					.footer-widget-area .woocommerce.widget .quantity,
					.woocommerce.widget ul a:hover,
					#tertiary .woocommerce.widget ul a:hover,
					#tertiary .woocommerce.widget:not(.widget_wpcom_social_media_icons_widget):not(.jetpack_widget_social_icons) ul a:hover',
	'color', '#ffffff'  ),

	// Navigation needs to contrast against navbar
	array( '.main-navigation .current_page_item > a,
					.main-navigation .current-menu-item > a,
					.main-navigation .current_page_ancestor > a,
					.main-navigation ul ul a',
	'color', 'txt',  ),

	// Social media icons should contrast against text colour (used for background)
	array( '.widget.widget_wpcom_social_media_icons_widget ul a::before, .widget.jetpack_widget_social_icons ul a,
			.secondary-links li a[href*="wordpress.org"]::before, .secondary-links li a[href*="facebook.com"]::before, .secondary-links li a[href*="twitter.com"]::before, .secondary-links li a[href*="dribbble.com"]::before, .secondary-links li a[href*="plus.google.com"]::before, .secondary-links li a[href*="pinterest.com"]::before, .secondary-links li a[href*="github.com"]::before, .secondary-links li a[href*="tumblr.com"]::before, .secondary-links li a[href*="youtube.com"]::before, .secondary-links li a[href*="flickr.com"]::before, .secondary-links li a[href*="vimeo.com"]::before, .secondary-links li a[href*="instagram.com"]::before, .secondary-links li a[href*="codepen.io"]::before, .secondary-links li a[href*="linkedin.com"]::before, .secondary-links li a[href*="foursquare.com"]::before, .secondary-links li a[href*="reddit.com"]::before, .secondary-links li a[href*="digg.com"]::before, .secondary-links li a[href*="getpocket.com"]::before, .secondary-links li a[href*="path.com"]::before, .secondary-links li a[href*="stumbleupon.com"]::before, .secondary-links li a[href*="spotify.com"]::before, .secondary-links li a[href*="twitch.tv"]::before, .secondary-links li a[href*="dropbox.com"]::before, .secondary-links li a[href*="/feed"]::before, .secondary-links li a[href*="skype"]::before, .secondary-links li a[href*="mailto"]::before',
	'color', 'txt',  ),

	array( '.widget.widget_wpcom_social_media_icons_widget ul a, .widget.jetpack_widget_social_icons ul a,
						.secondary-links li a[href*="wordpress.org"]::before, .secondary-links li a[href*="facebook.com"]::before, .secondary-links li a[href*="twitter.com"]::before, .secondary-links li a[href*="dribbble.com"]::before, .secondary-links li a[href*="plus.google.com"]::before, .secondary-links li a[href*="pinterest.com"]::before, .secondary-links li a[href*="github.com"]::before, .secondary-links li a[href*="tumblr.com"]::before, .secondary-links li a[href*="youtube.com"]::before, .secondary-links li a[href*="flickr.com"]::before, .secondary-links li a[href*="vimeo.com"]::before, .secondary-links li a[href*="instagram.com"]::before, .secondary-links li a[href*="codepen.io"]::before, .secondary-links li a[href*="linkedin.com"]::before, .secondary-links li a[href*="foursquare.com"]::before, .secondary-links li a[href*="reddit.com"]::before, .secondary-links li a[href*="digg.com"]::before, .secondary-links li a[href*="getpocket.com"]::before, .secondary-links li a[href*="path.com"]::before, .secondary-links li a[href*="stumbleupon.com"]::before, .secondary-links li a[href*="spotify.com"]::before, .secondary-links li a[href*="twitch.tv"]::before, .secondary-links li a[href*="dropbox.com"]::before, .secondary-links li a[href*="/feed"]::before, .secondary-links li a[href*="skype"]::before, .secondary-links li a[href*="mailto"]::before,
						.woocommerce-MyAccount-navigation li.is-active a',
	'border-color', 'txt' ),

	array( '.widget.widget_wpcom_social_media_icons_widget ul a:hover, .widget.jetpack_widget_social_icons ul a:hover,
				.secondary-links li a[href*="wordpress.org"]:hover::before, .secondary-links li a[href*="facebook.com"]:hover::before, .secondary-links li a[href*="twitter.com"]:hover::before, .secondary-links li a[href*="dribbble.com"]:hover::before, .secondary-links li a[href*="plus.google.com"]:hover::before, .secondary-links li a[href*="pinterest.com"]:hover::before, .secondary-links li a[href*="github.com"]:hover::before, .secondary-links li a[href*="tumblr.com"]:hover::before, .secondary-links li a[href*="youtube.com"]:hover::before, .secondary-links li a[href*="flickr.com"]:hover::before, .secondary-links li a[href*="vimeo.com"]:hover::before, .secondary-links li a[href*="instagram.com"]:hover::before, .secondary-links li a[href*="codepen.io"]:hover::before, .secondary-links li a[href*="linkedin.com"]:hover::before, .secondary-links li a[href*="foursquare.com"]:hover::before, .secondary-links li a[href*="reddit.com"]:hover::before, .secondary-links li a[href*="digg.com"]:hover::before, .secondary-links li a[href*="getpocket.com"]:hover::before, .secondary-links li a[href*="path.com"]:hover::before, .secondary-links li a[href*="stumbleupon.com"]:hover::before, .secondary-links li a[href*="spotify.com"]:hover::before, .secondary-links li a[href*="twitch.tv"]:hover::before, .secondary-links li a[href*="dropbox.com"]:hover::before, .secondary-links li a[href*="/feed"]:hover::before, .secondary-links li a[href*="skype"]:hover::before, .secondary-links li a[href*="mailto"]:hover::before',
	'background-color', '-0.5',  ),

	// No contrast needed
	array( 'hr,
					.bypostauthor',
	'background-color' ),

),
__( 'Secondary Accent' ) );

// Additional palettes
add_color_palette( array(
    '#bcbcbc',
    '#424242',
    '#4f98b8',
    '#e9e9e9',
    '#f29d37',
), 'Orange Crush' );

add_color_palette( array(
    '#58626f',
    '#000f3a',
    '#6097b5',
    '#ee7972',
    '#b6595c',
), 'Candy Floss' );

add_color_palette( array(
    '#f5ddca',
    '#aa6160',
    '#2f1129',
    '#f8f3de',
    '#8bac9b',
), 'Genteel' );

add_color_palette( array(
    '#f6f6f6',
    '#323232',
    '#8c2316',
    '#eeeeee',
    '#aa2e1d',
), 'Newspaper' );

add_color_palette( array(
    '#e6ddcd',
    '#133547',
    '#2a6263',
    '#92aa9b',
    '#061832',
), 'Blues Brother' );

add_color_palette( array(
    '#ffffff',
    '#000000',
    '#de78b7',
    '#eeeeee',
    '#707070',
), 'Leg Warmer' );
