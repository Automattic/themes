<?php
/**
 * Implements the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * @package TextBook
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses textbook_header_style()
 */
function textbook_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'textbook_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1980,
		'height'                 => 960,
		'flex-height'            => true,
		'wp-head-callback'       => 'textbook_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'textbook_custom_header_setup' );

if ( ! function_exists( 'textbook_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see textbook_custom_header_setup().
 */
function textbook_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value.
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
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
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // textbook_header_style