<?php
/**
 * Implement Custom Headers for the site
 *
 * @package Libretto
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses libretto_header_style()
 * @uses libretto_admin_header_style()
 * @uses libretto_admin_header_image()
 */
function libretto_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'libretto_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'faf9f5',
		'width'                  => 1600,
		'height'                 => 275,
		'flex-height'            => true,
		'flex-width'             => true,
		'wp-head-callback'       => 'libretto_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'libretto_custom_header_setup' );

if ( ! function_exists( 'libretto_header_style' ) ) :
	/**
	* Styles the header image and text displayed on the blog
	*
	* @see libretto_custom_header_setup().
	*/
	function libretto_header_style() {
		$header_text_color = get_header_textcolor();
		$header_image = libretto_get_header_image();

		// If no custom options for text are set, and there's no custom header, return early.
		// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
		if ( HEADER_TEXTCOLOR === $header_text_color AND ! isset( $header_image ) ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
	?>
		<style type="text/css">
		<?php if ( 'blank' === $header_text_color ) : // Hide text if user has set to hide ?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php endif; ?>

		<?php if ( HEADER_TEXTCOLOR !== $header_text_color ) : // Only apply custom header colour if not default ?>
			.title-block .site-title a,
			.header-image .title-block .site-title a,
			.title-block .site-description,
			.header-image .title-block .site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>

		<?php if ( isset( $header_image ) ) : // Show our custom header image if one exists ?>
			.libretto-has-header-image #masthead {
				background-image: url('<?php echo esc_url( $header_image ); ?>');
			}
		<?php endif; ?>
		</style>
		<?php
	} // libretto_header_style()
endif;
