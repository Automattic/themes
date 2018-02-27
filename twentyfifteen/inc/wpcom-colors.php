<?php
// Main Background Color
add_color_rule( 'bg', '#f1f1f1', array(
	// Background
	array(
		'body', 'background-color',
	),
),
__( 'Background', 'twentyfifteen' ) );


// Header and Sidebar Background Color
add_color_rule( 'txt', '#ffffff', array(
	// Background
	array(
		'body:before,
		.small-screen .site-header', 'background-color'
	),

	// Color - Same as the background color
	array(
		'.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"],
		.widget_calendar tbody a,
		.widget_calendar tbody a:hover,
		.widget_calendar tbody a:focus', 'color'
	),

	// Border
	array(
		'.secondary-toggle:hover,
		.secondary-toggle:focus,
		.widget input:focus,
		.widget textarea:focus', 'border-color', 'txt', 1.4
	),

	// Outline
	array(
		'.site-title a,
		.sidebar a:focus,
		.dropdown-toggle:focus', 'outline-color', 'txt', 1.4
	),

	// Border Lower contrast
	array(
		'.main-navigation ul,
		.main-navigation li,
		.secondary-toggle,
		.widget input,
		.widget textarea,
		.widget table,
		.widget th,
		.widget td,
		.widget pre,
		.widget li,
		.widget ul ul,
		.widget_categories .children,
		.widget_nav_menu .sub-menu,
		.widget_pages .children,
		.widget abbr[title],
		.widget-area .milestone-header,
		.widget-area .milestone-countdown,
		.widget-area .milestone-message', 'border-color', 'txt', 1.2
	),

	// Background Color - Same as the border color above
	array(
		'.dropdown-toggle:hover,
		.dropdown-toggle:focus,
		.widget hr', 'background-color', 'txt', 1.2
	),
),
__( 'Header and Sidebar Background Color', 'twentyfifteen' ) );


// Header and Sidebar Link Color.
add_color_rule( 'link', '#333333', array(
	// Background
	array(
		'.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"],
		.widget_calendar tbody a', 'background-color', 'txt', 3
	),

	// Color
	array(
		'.site-title a,
		.site-description,
		.secondary-toggle,
		.secondary-toggle:before,
		.secondary a,
		.dropdown-toggle:after,
		.widget-title,
		.widget blockquote cite,
		.widget blockquote small,
		.milestone-widget .event,
		.milestone-widget .difference', 'color', 'txt', 3
	),

	// Border
	array(
		'.textwidget a,
		.widget_gravatar a', 'border-color', 'txt', 3
	),
),
__( 'Header and Sidebar Link Color', 'twentyfifteen' ) );


// Header and Sidebar Text Color
add_color_rule( 'fg1', '#707070', array(
	// Background Color
	array(
		'.widget button:hover,
		.widget button:focus,
		.widget input[type="button"]:hover,
		.widget input[type="button"]:focus,
		.widget input[type="reset"]:hover,
		.widget input[type="reset"]:focus,
		.widget input[type="submit"]:hover,
		.widget input[type="submit"]:focus,
		.widget_calendar tbody a:hover,
		.widget_calendar tbody a:focus', 'background-color', 'txt', 1.6
	),

	// Color
	array(
		'.site-title a:hover,
		.site-title a:focus,
		.secondary a:hover,
		.secondary a:focus,
		.main-navigation .menu-item-description,
		.widget,
		.widget blockquote,
		.widget .wp-caption-text,
		.widget .gallery-caption', 'color', 'txt', 1.6
	),

	// Border Color
	array(
		'.widget blockquote', 'border-color', 'txt', 1.6
	),
),
__( 'Header and Sidebar Text Color', 'twentyfifteen' ) );


// Additional CSS
add_theme_support( 'custom_colors_extra_css', 'twentyfifteen_extra_css' );
function twentyfifteen_extra_css() { ?>
	.small-screen .widget button,
	.small-screen .widget input[type="button"],
	.small-screen .widget input[type="reset"],
	.small-screen .widget input[type="submit"],
	.small-screen .widget_calendar tbody a,
	.small-screen .widget_calendar tbody a:hover,
	.small-screen .widget_calendar tbody a:focus {
		color: #fff;
	}

	.small-screen .widget button,
	.small-screen .widget input[type="button"],
	.small-screen .widget input[type="reset"],
	.small-screen .widget input[type="submit"],
	.small-screen .widget_calendar tbody a {
		background-color: #333;
	}

	.small-screen .secondary a,
	.small-screen .dropdown-toggle:after,
	.small-screen .widget-title,
	.small-screen .widget blockquote cite,
	.small-screen .widget blockquote small {
		color: #333;
	}

	.small-screen .textwidget a {
		border-color: #333;
	}

	.small-screen .widget button:hover,
	.small-screen .widget button:focus,
	.small-screen .widget input[type="button"]:hover,
	.small-screen .widget input[type="button"]:focus,
	.small-screen .widget input[type="reset"]:hover,
	.small-screen .widget input[type="reset"]:focus,
	.small-screen .widget input[type="submit"]:hover,
	.small-screen .widget input[type="submit"]:focus,
	.small-screen .widget_calendar tbody a:hover,
	.small-screen .widget_calendar tbody a:focus {
		background-color: #707070;
		background-color: rgba(51, 51, 51, 0.7);
	}

	.small-screen .secondary a:hover,
	.small-screen .secondary a:focus,
	.small-screen .main-navigation .menu-item-description,
	.small-screen .widget,
	.small-screen .widget blockquote,
	.small-screen .widget .wp-caption-text,
	.small-screen .widget .gallery-caption {
		color: #707070;
		color: rgba(51, 51, 51, 0.7);
	}

	.small-screen .widget blockquote {
		border-color: #707070;
		border-color: rgba(51, 51, 51, 0.7);
	}

	.small-screen .widget input:focus,
	.small-screen .widget textarea:focus {
		border-color: #c1c1c1;
		border-color: rgba(51, 51, 51, 0.3);
	}

	.small-screen .sidebar a:focus,
	.small-screen .dropdown-toggle:focus {
		outline-color: #c1c1c1;
		outline-color: rgba(51, 51, 51, 0.3);
	}

	.small-screen .main-navigation ul,
	.small-screen .main-navigation li,
	.small-screen .widget input,
	.small-screen .widget textarea,
	.small-screen .widget table,
	.small-screen .widget th,
	.small-screen .widget td,
	.small-screen .widget pre,
	.small-screen .widget li,
	.small-screen .widget ul ul,
	.small-screen .widget_categories .children,
	.small-screen .widget_nav_menu .sub-menu,
	.small-screen .widget_pages .children,
	.small-screen .widget abbr[title]	{
		border-color: #eaeaea;
		border-color: rgba(51, 51, 51, 0.1);
	}

	.small-screen .dropdown-toggle:hover,
	.small-screen .dropdown-toggle:focus,
	.small-screen .widget hr {
		background-color: #eaeaea;
		background-color: rgba(51, 51, 51, 0.1);
	}

	.small-screen .widget-area .milestone-header,
	.small-screen .widget-area .milestone-countdown,
	.small-screen .widget-area .milestone-message {
		border-color: #eaeaea;
		border-color: rgba(51, 51, 51, 0.1);
		color: inherit;
	}

	.small-screen .milestone-widget .event,
	.small-screen .milestone-widget .difference {
		color: #333;
	}
<?php
}


// Free color palettes
add_color_palette( array(
	'#f4ca16', // Main Background Color
	'#ffdf00', // Header and Sidebar Background Color
	'#111111', // Header and Sidebar Link Color
	'#706624', // Header and Sidebar Text Color
	'',
), 'Yellow' );

add_color_palette( array(
	'#ffe5d1',
	'#e53b51',
	'#ffffff',
	'#f7c5cb',
	'',
), 'Pink' );

add_color_palette( array(
	'#674970',
	'#2e2256',
	'#ffffff',
	'#c1bdcd',
	'',
), 'Purple' );

add_color_palette( array(
	'#e9f2f9',
	'#55c3dc',
	'#ffffff',
	'#ccedf5',
	'',
), 'Blue' );

add_color_palette( array(
	'#111111',
	'#202020',
	'#bebebe',
	'#8f8f8f',
	'',
), 'Dark' );