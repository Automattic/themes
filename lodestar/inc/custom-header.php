<?php
/**
 * Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * @package Lodestar
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses lodestar_header_style()
 */
function lodestar_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'lodestar_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/assets/images/header.jpg',
		'default-text-color'     => 'ffffff',
		'width'                  => 2000,
		'height'                 => 1200,
		'flex-height'            => true,
		'wp-head-callback'       => 'lodestar_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'lodestar_custom_header_setup' );

if ( ! function_exists( 'lodestar_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see lodestar_custom_header_setup().
 */
function lodestar_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: add_theme_support( 'custom-header' ) is default, hide text (returns 'blank') or any hex value.
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
 		return;
 	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' === $header_text_color ) :
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
endif; // lodestar_header_style
