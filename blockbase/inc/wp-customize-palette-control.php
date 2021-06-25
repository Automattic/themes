<?php
/**
 * Color Palette Customizer Control 
 * 
 * Props to https://github.com/HardeepAsrani/o2 go here
 */

function color_palette_control( $wp_customize ) {

	class Color_Palette_Control extends WP_Customize_Control {

		public $type = 'color-palette';

		public function enqueue() {
			wp_enqueue_style( 'color-customization', get_template_directory_uri() . '/inc/color-customization.css' );
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
							<span><?php echo esc_attr( $label['label'] ); ?></span>
							<table class="color-palette">
								<tr>
								<?php foreach ( $label['colors'] as $color ) : ?>
									<td style="background-color: <?php echo esc_attr( $color['color'] ); ?>">&nbsp;</td>
								<?php endforeach; ?>
								</tr>
							</table>
						</label>
					</input>		
				<?php endforeach; ?>
				</div>
			</label>
		<?php }

	}

	$wp_customize->add_setting( 'color_palette', array(
		'default' => 'default-palette',
		'capability' => 'edit_theme_options'
	));
	
	$wp_customize->add_control(new Color_Palette_Control($wp_customize, 'color_palette', array(
		'label' => __('Color Scheme', 'textdomain'),
		'description' => __('Choose a color scheme for your website.', 'textdomain'),
		'section' => 'customize-global-styles',
		'choices' => array (
			'default-palette' => array(
				'label' => 'Default Palette',
				'colors' => array( 
					array(
						"slug" => "primary",
						"color" => "#112233"
					),
					array(
						"slug" => "secondary",
						"color" => "#cccccc"
					),
					array(
						"slug" => "background",
						"color" => "#ff0000"
					)
				)
			),
			'palette-1' => array(
				'label' => 'Palette 1',
				'colors' => array( 
					array(
						"slug" => "primary",
						"color" => "#ff0000"
					),
					array(
						"slug" => "secondary",
						"color" => "#cccccc"
					)
				)
			),
		),
		'settings' => 'color_palette'
	)));
}
add_action( 'customize_register', 'color_palette_control' );