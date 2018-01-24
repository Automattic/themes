<?php
if ( ! function_exists( 'radcliffe_2_hero_area' ) ) :
/**
 *  Prints HTML with contact information.
 */
function radcliffe_2_hero_area() {
	$display = get_theme_mod( 'radcliffe_2_hero_area_display',     '' );
	$title   = get_theme_mod( 'radcliffe_2_hero_area_title',       '' );
	$content = get_theme_mod( 'radcliffe_2_hero_area_content',     '' );
	$button  = get_theme_mod( 'radcliffe_2_hero_area_button_text', '' );
	$url     = get_theme_mod( 'radcliffe_2_hero_area_button_url',  '' );
	$image   = get_theme_mod( 'radcliffe_2_hero_area_background',  '' );
	$class   = 'hero-area';

	// If we are not on the front page, return.
	if ( ! is_front_page() ) {
		return;
	}

	// If the display option is unchecked, return.
	if ( ! $display && ! is_customize_preview() ) {
		return;
	}

	// If all the options are empty, return.
	if ( ( ! $title && ! $content && ! $button && ! $url ) && ! is_customize_preview() ) {
		return;
	}

	// If we are in the Customize preview and stuff's empty, add classes
	if ( is_customize_preview() ) {
		if ( ! $title ) {
			$class .= ' hero-no-title';
		}
		if ( ! $content ) {
			$class .= ' hero-no-content';
		}
		if ( ! $button ) {
			$class .= ' hero-no-buttontext';
		}
		if ( ! $url ) {
			$class .= ' hero-no-buttonlink';
		}
	}

	// Add extra class if there's an image background.
	if ( $image ) {
		$class .= ' has-post-thumbnail';
	} ?>

	<div class="<?php echo $class; ?>" <?php radcliffe_2_hero_area_background_image(); ?>>
			<div class="hero-area-wrapper">
			<?php if ( $title || is_customize_preview() ) : ?>
				<h2 class="hero-area-title"><?php echo esc_html( $title ); ?></h2>
			<?php endif; ?>

			<?php if ( $content || is_customize_preview() ) : ?>
				<div class="hero-area-content"><?php echo wp_kses_post( $content ); ?></div>
			<?php endif; ?>

			<?php if ( ( $url && $button ) || is_customize_preview() ) : ?>
				<div class="hero-area-button">
					<a class="button" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $button ); ?></a>
				</div>
			<?php endif; ?>
		</div><!-- .hero-area-wrapper -->
	</div><!-- .hero-area -->

	<?php
}
endif;

/**
 * Add uploaded image as background image.
 */
function radcliffe_2_hero_area_background_image() {
	$image = get_theme_mod( 'radcliffe_2_hero_area_background', '' );

	if ( ! $image ) {
		return;
	}

	printf( 'style="background-image: url(\'%s\');"', esc_url( $image ) );
}

/**
 * Add inline CSS needed for overlay opacity
 *
 * @see wp_add_inline_style()
 */
function radcliffe_2_hero_opacity_css() {
	$opacity = get_theme_mod( 'radcliffe_2_hero_overlay_opacity', '40' );
	$css = '.hero-area:before { opacity: ' . $opacity/100 . '; }';

	wp_add_inline_style( 'radcliffe-2-style', $css );
}
add_filter( 'wp_enqueue_scripts', 'radcliffe_2_hero_opacity_css' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/hero-area/hero-area-customizer.php';
