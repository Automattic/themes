<?php
/**
 * Displays footer image from Customizer on front-page.php
 *
 * @package Lodestar
 */
?>
<?php
	$footer_image = get_theme_mod( 'lodestar_footer_image' );
	$has_footer_image = '';
	if ( ! empty( $footer_image ) ) {
		$has_footer_image = ' has-footer-image';
	}
	if ( ( ! empty( $footer_image ) || is_customize_preview() ) && lodestar_is_frontpage() ) { ?>
		<div class="footer-image lodestar-panel <?php echo esc_attr( $has_footer_image ); ?>" style="background-image: url( <?php echo esc_url( $footer_image ); ?> )">
			<span class="panel lodestar-footer-settings">
				<span class="lodestar-panel-title"><?php esc_html_e( 'Footer Image', 'lodestar' ); ?></span>
			</span>
		</div>
	<?php }
?>