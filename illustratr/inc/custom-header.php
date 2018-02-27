<?php
/**
 * Setup the WordPress core custom header feature.
 *
 * @uses illustratr_header_style()
 * @uses illustratr_admin_header_style()
 * @uses illustratr_admin_header_image()
 *
 * @package Illustratr
 */
function illustratr_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'illustratr_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '24282d',
		'width'                  => 1100,
		'height'                 => 250,
		'flex-width'             => true,
		'flex-height'            => true,
		'wp-head-callback'       => 'illustratr_header_style',
		'admin-head-callback'    => 'illustratr_admin_header_style',
		'admin-preview-callback' => 'illustratr_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'illustratr_custom_header_setup' );

if ( ! function_exists( 'illustratr_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see illustratr_custom_header_setup().
 */
function illustratr_header_style() {
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
		.site-title {
			color: #<?php echo $header_text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // illustratr_header_style

if ( ! function_exists( 'illustratr_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see illustratr_custom_header_setup().
 */
function illustratr_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			border: none;
		}
		#headimg {
			padding: 20px;
			background: #fff;
			font-size: 1.375em;
			text-align: center;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}
		#headimg h1,
		#desc {
		}
		#headimg h1 {
			margin: 0 0 10px;
			font-family: "Source Sans Pro", sans-serif;
			font-size: 3.6em;
			line-height: 1.1;
			font-weight: 900;
			text-transform: uppercase;
		}
		#headimg h1 a {
			text-decoration: none;
		}
		#desc {
			color: #b1b2b3 !important;
			font-family: "PT Serif", serif;
			font-size: 0.73em;
			line-height: 1.5;
			font-weight: normal;
			font-style: italic;
		}
		#headimg img {
			display: block;
			margin: 0 auto 20px auto;
		}
		#headimg img + h1 {
			margin-top: -5px;
		}
	</style>
<?php
}
endif; // illustratr_admin_header_style

if ( ! function_exists( 'illustratr_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see illustratr_custom_header_setup().
 */
function illustratr_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<?php if ( get_header_image() ) : ?>
			<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
		<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="displaying-header-text" id="desc"><?php bloginfo( 'description' ); ?></div>
	</div>
<?php
}
endif; // illustratr_admin_header_image
