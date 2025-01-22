<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @package Dyad
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses dyad_2_header_style()
 * @uses dyad_2_admin_header_style()
 * @uses dyad_2_admin_header_image()
 */
function dyad_2_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'dyad_2_custom_header_args', array(
		'width'                  => 1800,
		'height'                 => 720,
		'flex-height'            => false,
		'flex-width'             => true,
		'wp-head-callback'       => 'dyad_2_header_style',
	) ) );

}
add_action( 'after_setup_theme', 'dyad_2_custom_header_setup' );



if ( ! function_exists( 'dyad_2_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see dyad_2_custom_header_setup().
	 */
	function dyad_2_header_style() {
		$header_text_color = get_header_textcolor();

		// If no custom options for text are set, let's bail
		// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value.
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
endif; // dyad_2_header_style
