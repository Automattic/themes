<?php
/* Custom Colors: TextBook */



/**
 * TAN --------------------
 */

add_color_rule( 'bg', '#f0eeec', array(

	// Background-color
	array( 'body,
			.entry-content table tbody tr:nth-child(even)', 'background-color', 12 ),

	// Background-color, darken to #e1dfdc
	array( '.testimonials,
			.testimonials .entry-content', 'background-color', '-0.5', '#222222' ),

	// Border color, contrast black
	array( '.comment-meta:before', 'border-color', '#222222', 12 ),

	// Border color, darken to #e1dfdc
	array( '.testimonials .hentry .entry-content:after', 'border-top-color', '-0.5', '#222222' ),
	array( '.testimonials .hentry .entry-content:after', 'border-left-color', '-0.5', '#222222' ),

), __( 'Background Color' ) );



/**
 * BURGUNDY --------------------
 */

add_color_rule( 'link', '#ce4639', array(

	// Border color

	// Border color, no contrast
	array( 'button,
			button:active,
			button:focus,
			input[type="button"],
			input[type="button"]:active,
			input[type="button"]:focus,
			input[type="reset"],
			input[type="reset"]:active,
			input[type="reset"]:focus,
			input[type="submit"],
			input[type="submit"]:active,
			input[type="submit"]:focus,
			.card:nth-of-type(3n+1) .entry-content,
			.card:nth-of-type(3n+1) .entry-header,
			.card:nth-of-type(3n+1) .entry-header .entry-meta:before', 'border-color' ),

	// Border color, contrast bg
	array( '.comments-title,
			.comment-list,
			.comment-respond,
			.comments-area ol > li:nth-of-type(3n+1) .comment-respond,
			.comments-area ol > li:nth-of-type(3n+1) .comment-body .avatar,
			.entry-content table tbody,
			.entry-content table td,
			.entry-content table th,
			.hentry > .sharedaddy:not(#jp-post-flair),
			.highlander-enabled #respond,
			.post-navigation,
			.posts-navigation,
			.comment-navigation,
			.search-box,
			.single .hentry,
			.page .page,
			.single .hentry:not(.post),
			.single .jetpack-testimonial,
			.single .hentry .post-thumbnail:before,
			.testimonials .hentry:nth-of-type(3n+1) .entry-content,
			.flex-direction-nav a,
			#jp-post-flair > *,
			#jp-post-flair .jp-relatedposts .jp-relatedposts-headline em:before,
			#jp-post-flair div.sharedaddy h3.sd-title:before,
			#jp-post-flair h3.sd-title:before,
			.card .entry-header .entry-meta:before,
			.hentry > .sharedaddy:not(#jp-post-flair) .sd-title:before,
			.menu-toggle.toggled-on,
			.main-navigation .dropdown-toggle.toggled-on,
			.main-navigation > div > ul,
			.main-navigation > div > ul li:before,
			.post-navigation .nav-next:before,
			.post-navigation .nav-previous:before,
			.post-navigation a .meta-nav:before,
			.posts-navigation .nav-next:before,
			.posts-navigation .nav-previous:before,
			.posts-navigation a .meta-nav:before,
			.comment-navigation .nav-next:before,
			.comment-navigation .nav-previous:before,
			.comment-navigation a .meta-nav:before,
			.main-navigation .children:before,
			.main-navigation .sub-menu:before', 'border-color', 'bg', 2 ),

	// Border side color, contrast bg
	array( '.testimonials .hentry:nth-of-type(3n+1) .entry-content:before', 'border-top-color', 'bg', 2 ),
	array( '.testimonials .hentry:nth-of-type(3n+1) .entry-content:before', 'border-left-color', 'bg', 2 ),

	// Border color, contrast black
	array( '.search-box .search-submit:focus,
			.single .hentry .entry-header:before,
			.single .hentry .entry-meta:before,
			.single .hentry .entry-title:before,
			.entry-breadcrumbs:before,
			.featured-content-inner .hentry:nth-of-type(3n+1):before,
			.featured-content-inner .hentry:nth-of-type(3n+1) .post-thumbnail,
			.footer-widget-area .widget:nth-of-type(3n+2):before', 'border-color', '#222222' ),

	// Text color

	// Text color, contrast bg
	array( '#masthead .site-branding a:hover,
			#masthead .site-branding a:active,
			#masthead .search-toggle a:hover,
			#masthead .search-toggle a:active,
			#masthead .jetpack-social-navigation a:active,
			#masthead .jetpack-social-navigation a:hover,
			.search-toggle a:active,
			.search-toggle a:hover,
			.site-content #secondary .widget:nth-of-type(3n+1) a,
			.testimonials .hentry:nth-of-type(3n+1) a', 'color', 'bg', 3 ),

	// Text color, contrast white
	array( '.main-navigation a,
			button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"],
			.entry-content a,
			.entry-content a:visited,
			.edit-link a,
			#jp-post-flair .jp-relatedposts .jp-relatedposts-headline em,
			#jp-post-flair div.sharedaddy h3.sd-title,
			#jp-post-flair h3.sd-title,
			#jp-post-flair div#jp-relatedposts div.jp-relatedposts-items-visual .jp-relatedposts-post .jp-relatedposts-post-a,
			.card:nth-of-type(3n+1) .entry-header a,
			.card:nth-of-type(3n+1) .star,
			.hentry > .sharedaddy:not(#jp-post-flair) .sd-title,
			.flex-direction-nav a,
			.flex-direction-nav a:before,
			.comment-navigation a,
			.comments-area ol > li:nth-of-type(3n+1) a,
			.highlander-enabled #main #respond .comment-form-service a,
			.posts-navigation .nav-links a,
			.post-navigation .nav-links a,
			.comments-navigation .nav-links a', 'color', '#ffffff', 2 ),

	// Text color, contrast black
	array( '.entry-breadcrumbs a,
			.single .hentry .entry-meta > *,
			.featured-content-inner .hentry:nth-of-type(3n+1) .entry-meta a,
			.comments-area > ol > li:nth-of-type(3n+1) h3 small a,
			.comment-reply-title a', 'color', '#222222' ),

	array( 'button:active,
			button:focus,
			input[type="button"]:active,
			input[type="button"]:focus,
			input[type="reset"]:active,
			input[type="reset"]:focus,
			input[type="submit"]:active,
			input[type="submit"]:focus,
			.card .entry-content,
			.card:nth-of-type(3n+1) .entry-content,
			.comment-navigation a:active,
			.comment-navigation a:focus,
			.main-navigation .dropdown-toggle.toggled-on,
			.menu-toggle.toggled-on,
			.single .hentry .cat-links li:nth-of-type(3n+3) a,
			.site-content #secondary .widget_categories li:nth-of-type(3n+3) a,
			.site-content #secondary .widget_tag_cloud div a:nth-of-type(3n+3),
			.site-content #secondary .wp_widget_tag_cloud div a:nth-of-type(3n+3)', 'background-color' ),

	// Background color

	// Background color, contrast black
	array( '.search-box .search-submit:focus', 'background-color' ),

	array( '.single .hentry .meta-sep,
			.featured-content-inner .hentry:nth-of-type(3n+1) .post-thumbnail', 'background-color', '#222222' ),

), __( 'Category Color 1', 'textbook' ) );



/**
 * GREEN --------------------
 */

add_color_rule( 'fg1', '#26866d', array(

	// Border color
	array( '.main-navigation .dropdown-toggle:focus,
			#infinite-handle > span button,
			#infinite-handle > span button:active,
			#infinite-handle > span button:focus,
			.card:nth-of-type(3n+2) .entry-content,
			.card:nth-of-type(3n+2) .entry-header,
			.card:nth-of-type(3n+2) .entry-header .entry-meta:before', 'border-color' ),

	// Fill color
	array( '.main-navigation .dropdown-toggle:focus svg', 'fill' ),

	// Border color, contrast bg
	array( '.testimonials .hentry:nth-of-type(3n+2) .entry-content,
			.comments-area ol > li:nth-of-type(3n+2) .comment-respond,
			.comments-area ol > li:nth-of-type(3n+2) .comment-body .avatar', 'border-color', 'bg', 2 ),
	array( '.testimonials .hentry:nth-of-type(3n+2) .entry-content:before', 'border-top-color', 'bg', 2 ),
	array( '.testimonials .hentry:nth-of-type(3n+2) .entry-content:before', 'border-left-color', 'bg', 2 ),

	// Border color, contrast black
	array( '.featured-page-highlight .hentry,
			.featured-content-inner .hentry:nth-of-type(3n+2):before,
			.featured-content-inner .hentry:nth-of-type(3n+2) .post-thumbnail,
			.footer-widget-area .widget:nth-of-type(3n+3):before', 'border-color', '#222222' ),

	// Background color

	// Background color, no contrast
	array( '#infinite-handle > span button:active,
			#infinite-handle > span button:focus,
			.card:nth-of-type(3n+2) .entry-content,
			.single .hentry .cat-links li:nth-of-type(3n+1) a,
			.site-content #secondary .widget_categories li:nth-of-type(3n+1) a,
			.site-content #secondary .widget_tag_cloud div a:nth-of-type(3n+1),
			.site-content #secondary .wp_widget_tag_cloud div a:nth-of-type(3n+1)', 'background-color' ),

	// Background color, contrast black
	array( '.featured-content-inner .hentry:nth-of-type(3n+2) .post-thumbnail', 'background-color', '#222222' ),

	// Text color

	// Text color, contrast bg
	array( '.site-content #secondary .widget:nth-of-type(3n+2) a,
			.testimonials .hentry:nth-of-type(3n+2) a', 'color', 'bg', 3 ),

	// Text color, contrast white
	array( '#infinite-handle > span button,
			.entry-content a:active,
			.entry-content a:focus,
			.entry-content a:hover,
			.card:nth-of-type(3n+2) .entry-header a,
			.card:nth-of-type(3n+2) .star,
			.comments-area ol > li:nth-of-type(3n+2) a', 'color', '#ffffff', 2 ),

	// Text color, contrast black
	array( '.featured-content-inner .hentry:nth-of-type(3n+2) .entry-meta a,
			.featured-page-highlight .hentry a,
			.comments-area > ol > li:nth-of-type(3n+2) h3 small a', 'color', '#222222' ),

), __( 'Category Color 2', 'textbook' ) );



/**
 * PURPLE --------------------
 */

add_color_rule( 'fg2', '#604d88', array(

	// Background-color
	array( '.card:nth-of-type(3n+3) .entry-content,
			.single .hentry .cat-links li:nth-of-type(3n+2) a,
			.site-content #secondary .widget_categories li:nth-of-type(3n+2) a,
			.site-content #secondary .widget_tag_cloud div a:nth-of-type(3n+2),
			.site-content #secondary .wp_widget_tag_cloud div a:nth-of-type(3n+2)', 'background-color' ),

	// Background color, contrast black
	array( '.featured-content-inner .hentry:nth-of-type(3n+3) .post-thumbnail', 'background-color', '#222222' ),

	// Border color
	array( '.card:nth-of-type(3n+3) .entry-content,
			.card:nth-of-type(3n+3) .entry-header,
			.card:nth-of-type(3n+3) .entry-header .entry-meta:before', 'border-color' ),

	// Border color, contrast bg
	array( '.testimonials .hentry:nth-of-type(3n+3) .entry-content,
			.comments-area ol > li:nth-of-type(3n+3) .comment-respond,
			.comments-area ol > li:nth-of-type(3n+3) .comment-body .avatar', 'border-color', 'bg', 2 ),

	array( '.testimonials .hentry:nth-of-type(3n+3) .entry-content:before', 'border-top-color', 'bg', 2 ),
	array( '.testimonials .hentry:nth-of-type(3n+3) .entry-content:before', 'border-left-color', 'bg', 2 ),

	// Border color, contrast black
	array( '.featured-content-inner .hentry:nth-of-type(3n+3):before,
			.featured-content-inner .hentry:nth-of-type(3n+3) .post-thumbnail,
			.footer-widget-area .widget:nth-of-type(3n+4):before', 'border-color', '#222222' ),

	// Text color, contrast bg
	array( '.site-content #secondary .widget:nth-of-type(3n+3) a,
			.testimonials .hentry:nth-of-type(3n+3) a', 'color', 'bg', 3 ),

	// Text color, contrast white
	array( '.card:nth-of-type(3n+3) .entry-header a,
			.card:nth-of-type(3n+3) .star,
			.comments-area > ol > li:nth-of-type(3n+3) a', 'color', '#ffffff', 2 ),

	// Text color, contrast black
	array( '.featured-content-inner .hentry:nth-of-type(3n+3) .entry-meta a,
			.comments-area > ol > li:nth-of-type(3n+3) h3 small a', 'color', '#222222' ),

), __( 'Category Color 3', 'textbook' ) );



/**
 * BLACK --------------------
 */

add_color_rule( 'txt', '#222222', array(

	// Leave Empty

), __( 'Dark Color', 'textbook' ) );



/**
 * BLACK --------------------
 */

add_color_rule( 'extra', '#222222', array(


	// Text color, contrast bg
	array( '#masthead .site-branding a,
			#masthead .site-description,
			#masthead .search-toggle a,
			#masthead .jetpack-social-navigation a,
			.testimonials .entry-content p,
			.testimonials-header,
			.testimonials .entry-header', 'color', 'bg', 5 ),

	// Background color
	array( '.search-box .search-submit,
			.posts-navigation a:hover,
			.posts-navigation a:focus,
			.post-navigation a:hover,
			.post-navigation a:focus,
			.comment-navigation a:hover,
			.comment-navigation a:focus', 'background' ),

	// Background color
	array( '.search-box .search-submit', 'border-color' ),

), __( 'Text Color', 'textbook' ) );



/**
 * BLACK --------------------
 */

add_color_rule( 'extra', '#434343', array(

	// Text color, contrast bg
	array( 'body', 'color', 'bg', 5 ),

) );



/**
 * WHITE --------------------
 */

add_color_rule( 'extra', '#ffffff', array(

	// 1st Card color offset
	array( 'button:hover,
			input[type="button"]:hover,
			input[type="reset"]:hover,
			input[type="submit"]:hover,
			button:focus,
			input[type="button"]:focus,
			input[type="reset"]:focus,
			input[type="submit"]:focus,
			.search-box .search-submit,
			.menu-toggle.toggled-on,
			.card:nth-of-type(3n+1):hover .star,
			.card:nth-of-type(3n+1) .entry-content a,
			.card:nth-of-type(3n+1) .entry-content,
			.single .hentry .cat-links li:nth-of-type(3n+3) a,
			.site-content #secondary .widget_categories li:nth-of-type(3n+3) a,
			.site-content #secondary .widget_tag_cloud div a:nth-of-type(3n+3),
			.site-content #secondary .wp_widget_tag_cloud div a:nth-of-type(3n+3)', 'color', 'link' ),

	array( '.card:nth-of-type(3n+1) .entry-content .entry-meta:before,
			.posts-navigation .nav-next:focus .meta-nav,
			.posts-navigation .nav-previous:focus .meta-nav,
			.posts-navigation a:focus .meta-nav:before,
			.post-navigation .nav-next:focus .meta-nav,
			.post-navigation .nav-previous:focus .meta-nav,
			.post-navigation a:focus .meta-nav:before,
			.comment-navigation .nav-next:hover .meta-nav,
			.comment-navigation .nav-next:focus .meta-nav,
			.comment-navigation .nav-previous:hover .meta-nav,
			.comment-navigation .nav-previous:focus .meta-nav,
			.comment-navigation a:hover .meta-nav:before,
			.comment-navigation a:focus .meta-nav:before', 'border-color', 'link' ),

	// 2nd Card color offset
	array( '.card:nth-of-type(3n+2):hover .star,
			.card:nth-of-type(3n+2) .entry-content a,
			.card:nth-of-type(3n+2) .entry-content,
			.single .hentry .cat-links li:nth-of-type(3n+1) a,
			.site-content #secondary .widget_categories li:nth-of-type(3n+1) a,
			.site-content #secondary .widget_tag_cloud div a:nth-of-type(3n+1),
			.site-content #secondary .wp_widget_tag_cloud div a:nth-of-type(3n+1)', 'color', 'fg1' ),

	array( '.card:nth-of-type(3n+2) .entry-content .entry-meta:before', 'border-color', 'fg1' ),

	// 3rd Card color offset
	array( '.card:nth-of-type(3n+3):hover .star,
			.card:nth-of-type(3n+3) .entry-content a,
			.card:nth-of-type(3n+3) .entry-content,
			.single .hentry .cat-links li:nth-of-type(3n+2) a,
			.site-content #secondary .widget_categories li:nth-of-type(3n+2) a,
			.site-content #secondary .widget_tag_cloud div a:nth-of-type(3n+2),
			.site-content #secondary .wp_widget_tag_cloud div a:nth-of-type(3n+2)', 'color', 'fg2' ),

	array( '.card:nth-of-type(3n+3) .entry-content .entry-meta:before', 'border-color', 'fg2' ),

	// White on Black
	array( '.single .hentry .cat-links li:nth-of-type(3n+1):hover a,
			.single .hentry .cat-links li:nth-of-type(3n+2):hover a,
			.single .hentry .cat-links li:nth-of-type(3n+3):hover a,
			.single .hentry .entry-meta > *:hover,
			.featured-content-inner .hentry .entry-meta a:hover,
			.featured-content-inner .hentry .entry-meta a:active,
			.posts-navigation .nav-links a:hover,
			.post-navigation .nav-links a:hover,
			.comment-navigation .nav-links a:hover,
			.posts-navigation a:focus,
			.post-navigation a:focus,
			.comment-navigation a:focus', 'color', '#222222' ),

	// White on Black
	array( 'button,
			#infinite-handle > span button', 'background-color', 'bg', 1 ),

) );



// Extra CSS
function textbook_extra_css() {

	$color_array = get_theme_mod( 'colors_manager' );

	$bg     = $color_array['colors']['bg'];     // Tan
	$link   = $color_array['colors']['link'];   // Burgundy
	$fg1    = $color_array['colors']['fg1'];    // Green
	$fg2    = $color_array['colors']['fg2'];    // Purple
	$text   = '#222222'; // $color_array['colors']['txt']; // Black
	$extra2 = '#ffffff'; // $color_array['colors']['extra']; // White

?>

<?php
/**
 * TAN --------------------
 */
?>

@media screen and (min-width: 50em) {

	/* filter */

	.archive.header-image .site-header:before,
	.header-image .site-header:before,
	.page.header-image .site-header:before,
	.search.header-image .site-header:before,
	.single.header-image .site-header:before {
	  filter: <?php echo $bg; ?>;
	}

}

<?php
/**
 * BURGUNDY --------------------
 */
 ?>

@media screen and (min-width: 50em) {

	/* border-color */

	#masthead .main-navigation .children:before,
	#masthead .main-navigation .sub-menu:before,
	#masthead .main-navigation .children li:before,
	#masthead .main-navigation .children ul:before,
	#masthead .main-navigation .sub-menu li:before,
	#masthead .main-navigation .sub-menu ul:before,
	.main-navigation.toggled-on > div > ul {
		border-color: <?php echo $link; ?>;
	}

	/* border-bottom-color */

	.main-navigation.add-seperators > div > ul > li:before {
		border-bottom-color: <?php echo $link; ?>;
	}

	/* color */

	.search-toggle a:active,
	.search-toggle a:hover {
		color: <?php echo $link; ?>;
	}

}

@media screen and (min-width: 37.5em) {

	/* border-right-color */

	.post-navigation .nav-previous:before,
	.posts-navigation .nav-previous:before,
	.comments-navigation .nav-previous:before,
	.single .hentry .entry-meta:before {
		border-right-color: <?php echo $link; ?>;
	}

	/* border-left-color */

	.post-navigation .nav-next:before,
	.posts-navigation .nav-next:before,
	.comments-navigation .nav-next:before {
		border-left-color: <?php echo $link; ?>;
	}

	/* border-top-color */

	.single .hentry .comments-link:before {
		border-top-color: <?php echo $link; ?>;
	}

}

<?php
/**
 * GREEN --------------------
 */
 ?>

<?php
/**
 * PURPLE --------------------
 */
 ?>

<?php
/**
 * WHITE --------------------
 */
 ?>

@media screen and (min-width: 50em) {

	/* color */

	.main-navigation a:hover,
	.main-navigation > div > ul > li:hover a:hover,
	.main-navigation > div > ul > li.focus a:hover,
	.main-navigation > div > ul > li.focus a:focus,
	.main-navigation.toggled-on > div > ul > li:hover a:hover,
	.main-navigation.toggled-on > div > ul > li.focus a:hover,
	.main-navigation.toggled-on > div > ul > li.focus a:focus
	.main-navigation .children li a,
	.main-navigation .sub-menu li a {
		color: <?php echo $extra2; ?>;
	}

	#masthead .main-navigation > div ul li:hover > button,
	#masthead .main-navigation > div ul li.focus > button,
	#masthead .main-navigation > div ul li:hover > button.toggled-on,
	#masthead .main-navigation > div ul li.focus > button.toggled-on {
		border-color: <?php echo $extra2; ?>;
	}

	.main-navigation > div ul li:hover > button svg,
	.main-navigation > div ul li.focus > button svg,
	.main-navigation > div ul li:hover > button svg,
	.main-navigation > div ul li.focus > button svg {
		fill: <?php echo $extra2; ?>;
	}

	.archive.header-image .site-header:before,
	.header-image .site-header:before,
	.page.header-image .site-header:before,
	.search.header-image .site-header:before,
	.single.header-image .site-header:before {
		filter: <?php echo $extra2; ?>;
	}
}

@media screen and (min-width: 37.5em) {

	/* color */

	.single .hentry .cat-links a {
		color: <?php echo $extra2; ?>;
	}

}

<?php
/**
 * BLACK --------------------
 */
 ?>

@media screen and (min-width: 50em) {

	/* background-color */

	.main-navigation .children,
	.main-navigation .sub-menu,
	.main-navigation > div > ul > li:hover,
	.main-navigation > div > ul > li.focus,
	.main-navigation.toggled-on > div > ul > li:hover,
	.main-navigation.toggled-on > div > ul > li.focus,
	.main-navigation .sub-menu li.menu-item-has-children:hover ul li,
	.main-navigation .sub-menu li.page_item_has_children:hover ul li,
	.main-navigation .children li.menu-item-has-children:hover ul li,
	.main-navigation .children li.page_item_has_children:hover ul li {
		background-color: <?php echo $text; ?>;
	}

	/* border-color */

	.main-navigation .dropdown-toggle.toggled-on,
	.main-navigation.add-seperators > div > ul > li:last-child:nth-child(-n+4):hover:before,
	.main-navigation.add-seperators > div > ul > li:nth-child(5n):nth-last-child(-n+6) ~ li:hover:before {
		border-color: <?php echo $text; ?>;
	}

	/* color */

	.main-navigation a:hover span,
	.main-navigation li.focus a span,
	.main-navigation .dropdown-toggle.toggled-on, {
		color: #CCCCCC;
	}

	/* dropdown indicator override */

	#masthead .menu-toggle.toggled-on,
	#masthead .main-navigation .dropdown-toggle.toggled-on {
		background: transparent;
		border-color: #CCCCCC;
	}
}

@media screen and (min-width: 37.5em) {

	/* background-color */

	.single .hentry .entry-header,
	.single .hentry .post-thumbnail {
		background-color: <?php echo $text; ?>;
	}

}

<?php }
add_theme_support( 'custom_colors_extra_css', 'textbook_extra_css' );

/**
 * Additional color palettes
 */
add_color_palette( array(
	'#f0eeec',
	'',
	'#325cb8',
	'#cf0202',
	'#facc14'
), __( 'Blue, Red & Yellow', 'textbook' ) );

add_color_palette( array(
	'#e0e2e5',
	'',
	'#235380',
	'#21303e',
	'#235380'
), __( 'Navy Blue on Grey', 'textbook' ) );

add_color_palette( array(
	'#dddddd',
	'',
	'#0c758c',
	'#f2b05e',
	'#bf0a2b'
), __( 'Blue, Yellow & Red', 'textbook' ) );

add_color_palette( array(
	'#ffffff',
	'',
	'#000000',
	'#000000',
	'#000000'
), __( 'Black on White', 'textbook' ) );

add_color_palette( array(
	'#000000',
	'',
	'#c44d58',
	'#fb974b',
	'#9ec746'
), __( 'Red, Orange & Green', 'textbook' ) );

add_color_palette( array(
	'#f0eeec',
	'',
	'#85798b',
	'#c69b80',
	'#c9b868'
), __( 'Pastel Purple, Cream, & Yellow', 'textbook' ) );
