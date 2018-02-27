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
 * @package Affinity
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses affinity_header_style()
 */
function affinity_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'affinity_custom_header_args', array(
		'random-default'         => true,
		'default-text-color'     => 'e8e9ea',
		'width'                  => 2000,
		'height'                 => 1200,
		'flex-height'            => true,
		'wp-head-callback'       => 'affinity_header_style',
	) ) );

	register_default_headers( array(
		'header-image-1' => array(
			'url'           => '%s/assets/img/autumn.jpg',
			'thumbnail_url' => '%s/assets/img/thumbs/autumn.jpg',
			'description'   => esc_html__( 'Autumn Path', 'affinity' ),
		),
		'header-image-2' => array(
			'url'           => '%s/assets/img/car.jpg',
			'thumbnail_url' => '%s/assets/img/thumbs/car.jpg',
			'description'   => esc_html__( 'Vintage Car', 'affinity' ),
		),
		'header-image-3' => array(
			'url'           => '%s/assets/img/typewriter.jpg',
			'thumbnail_url' => '%s/assets/img/thumbs/typewriter.jpg',
			'description'   => esc_html__( 'Typewriter', 'affinity' ),
		),
		'header-image-4' => array(
			'url'           => '%s/assets/img/tulips.jpg',
			'thumbnail_url' => '%s/assets/img/thumbs/tulips.jpg',
			'description'   => esc_html__( 'Tulips', 'affinity' ),
		),
		'header-image-5' => array(
			'url'           => '%s/assets/img/camera.jpg',
			'thumbnail_url' => '%s/assets/img/thumbs/camera.jpg',
			'description'   => esc_html__( 'Vintage Camera', 'affinity' ),
		),
	) );
}
add_action( 'after_setup_theme', 'affinity_custom_header_setup' );

if ( ! function_exists( 'affinity_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see affinity_custom_header_setup().
 */
function affinity_header_style() {
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
endif; // affinity_header_style
