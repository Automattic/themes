<?php
/**
 * Color Palette Customizer Control
 *
 * Based on https://github.com/HardeepAsrani/o2
 */

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Color_Palette_Control' ) ) {
	class Color_Palette_Control extends WP_Customize_Control {

		public $type = 'color-palette';

		public function enqueue() {
			wp_enqueue_style( 'color-customization', get_template_directory_uri() . '/inc/customizer/wp-customize-color-palette-control.css' );
		}

		public function render_content() {
			?>
				<label>
					<?php if ( ! empty( $this->label ) ) : ?>
						<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<?php endif;
					if ( ! empty( $this->description ) ) : ?>
						<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
					<?php endif; ?>
					<div class="color-palette-group">
					<?php foreach ( $this->choices as $value => $label ) : ?>
						<input name="color_palette_<?php echo esc_attr( $this->id ); ?>" id="color_palette_<?php echo esc_attr( $this->id ); ?>_<?php echo esc_attr( $value ); ?>" type="radio" value="<?php echo esc_attr( $value ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?> >
							<label for="color_palette_<?php echo esc_attr( $this->id ); ?>_<?php echo esc_attr( $value ); ?>" class="color-option">
								<div class="custom-color-palette">
									<span class="color-palette-label"><?php echo esc_html( $label['label'] ); ?></span>
									<?php foreach ( $label['colors'] as $slug => $color ) : ?>
										<div class="color-stripe" style="background-color: <?php echo esc_attr( $color ); ?>">&nbsp;</div>
									<?php endforeach; ?>
									</tr>
								</div>
							</label>
						</input>
					<?php endforeach; ?>
					</div>
				</label>
		<?php }
	}
}
