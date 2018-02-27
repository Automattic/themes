<?php
/**
 * Rebalance Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * @link http://codex.wordpress.org/Custom_Headers
 *
 * @package Rebalance
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses rebalance_header_style()
 * @uses rebalance_admin_header_style()
 * @uses rebalance_admin_header_image()
 */
function rebalance_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'rebalance_custom_header_args', array(
		'default-image'      => '',
		'default-text-color' => '000000',
		'width'              => 1140,
		'height'             => 223,
		'flex-height'        => true,
		'wp-head-callback'   => 'rebalance_header_style'
	) ) );
}
add_action( 'after_setup_theme', 'rebalance_custom_header_setup' );

if ( ! function_exists( 'rebalance_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see rebalance_custom_header_setup().
 */
function rebalance_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value.
	if ( HEADER_TEXTCOLOR === $header_text_color ) {
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
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // rebalance_header_style