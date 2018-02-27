<?php
/**
 *
 * @package Sketch
 */

/**
 * Setup the WordPress core custom header feature.
 *
 * @uses sketch_header_style()
 * @uses sketch_admin_header_style()
 * @uses sketch_admin_header_image()
 */
function sketch_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'sketch_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '333333',
		'width'                  => 1092,
		'height'                 => 400,
		'flex-height'            => true,
		'wp-head-callback'       => 'sketch_header_style',
		'admin-head-callback'    => 'sketch_admin_header_style',
		'admin-preview-callback' => 'sketch_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'sketch_custom_header_setup' );

if ( ! function_exists( 'sketch_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see sketch_custom_header_setup().
 */
function sketch_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
	if ( HEADER_TEXTCOLOR == $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo $header_text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // sketch_header_style

if ( ! function_exists( 'sketch_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see sketch_custom_header_setup().
 */
function sketch_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			background: white;
			border: none;
			font-size: 16px;
		}
		#headimg h1,
		#desc {
		}
		#headimg .site-branding-wrapper {
			border-bottom: 3px solid #eeeeee;
			margin: 0 0 27px;
			padding: 0 0 24px;
		}
		#headimg .site-branding-wrapper:before,
		#headimg .site-branding-wrapper:after {
			content: "";
			display: table;
		}
		#headimg .site-branding-wrapper:after {
			clear: both;
		}
		#headimg .site-branding {
			clear: none;
			float: left;
			margin-bottom: 14px;
			max-width: 50%;
		}
		#headimg h1 {
			clear: none;
			display: inline-block;
			font-family: Lato, Helvetica, Arial, sans-serif;
			font-size: 1.75em;
			font-weight: normal;
			line-height: 1;
			letter-spacing: 3px;
			margin: 0;
			max-width: 60%;
			text-transform: uppercase;
			vertical-align: middle;
		}
		#headimg a {
			text-decoration: none;
		}
		#desc {
			display: none;
		}
		#headimg .site-logo {
			max-height: 100px;
			width: auto;
			display: inline-block;
			margin-right: 14px;
			vertical-align: middle;
		}
		#headimg .custom-header {
			border-radius: 5px;
			display: block;
			margin: 0 auto;
			margin-bottom: 27px;
			max-width: 1092px;
			height: auto;
		}
	</style>
<?php
}
endif; // sketch_admin_header_style

if ( ! function_exists( 'sketch_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see sketch_custom_header_setup().
 */
function sketch_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<div class="site-branding-wrapper">
			<div class="site-branding">
				<?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
				<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<div class="displaying-header-text" id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
			</div>
		</div>
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="" class="custom-header">
		<?php endif; ?>
	</div>
<?php
}
endif; // sketch_admin_header_image
