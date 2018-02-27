<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * @package Button 2
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses button_2_header_style()
 * @uses button_2_admin_header_style()
 * @uses button_2_admin_header_image()
 */
function button_2_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'button_2_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'f78769',
		'width'                  => 982,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'button_2_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'button_2_custom_header_setup' );


if ( ! function_exists( 'button_2_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see button_2_custom_header_setup().
 */
function button_2_header_style() {
	$header_text_color = get_header_textcolor();
	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
	 */
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}
	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-title a:visited {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
