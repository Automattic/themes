<?php
/**
 * Color Palette Customizer Control
 *
 * Props to https://github.com/HardeepAsrani/o2 go here
 */

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Color_Palette_Control' ) ) {
	class Color_Palette_Control extends WP_Customize_Control {

		public $type = 'color-palette';

		public function enqueue() {
			wp_enqueue_style( 'color-customization', get_template_directory_uri() . '/inc/color-customization.css' );
		}

		public function render_content() {
			var_dump( $this->palettes);
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
									<span class="color-palette-label"><?php echo esc_attr( $label['label'] ); ?></span>
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

class GlobalStylesColorPalettes {
	private $palettes = array ();

	function __construct() {
		add_action( 'customize_register', array( $this, 'build_palettes' ) );
		add_action( 'customize_register', array( $this, 'color_palette_control' ) );
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'customize_preview_js' ) );
	}

	function customize_preview_js() {
		wp_enqueue_script( 'customizer-color-palettes', get_template_directory_uri() . '/inc/color-palettes-preview.js', array( 'customize-controls' ) );
		wp_localize_script( 'customizer-color-palettes', 'colorPalettes', $this->palettes );
	}

	function build_palettes() {
		$theme_json = WP_Theme_JSON_Resolver_Gutenberg::get_theme_data()->get_raw_data();
		$default_palette = $theme_json['settings']['color']['palette']['theme'];

		$default_palette_setting = [];
		foreach( $default_palette as $default_color ) {
			$default_palette_setting[ $default_color['slug'] ] = $default_color['color'];
		}

		$this->palettes['default-palette'] = array(
			'label' => 'Default Palette',
			'colors' => $default_palette_setting,
		);

		$custom_palettes = $theme_json['settings']['custom']['colorPalettes'];
		foreach( $custom_palettes as $palette_slug => $custom_palette ) {
			$custom_palette_setting = [];
			foreach( $custom_palette['colors'] as $color_slug => $color ) {
				$custom_palette_setting[ $color_slug ] = $color;
			}

			$this->palettes[ $palette_slug ] = array(
				'label' => $custom_palette['label'],
				'colors' => $custom_palette_setting,
			);
		}
	}

	function color_palette_control( $wp_customize ) {
		$wp_customize->add_setting( 'color_palette', array(
			'default' => 'default-palette',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage', // We need this to stop the page refreshing.
		) );

		$wp_customize->add_control(
			new Color_Palette_Control(
				$wp_customize,
				'color_palette',
				array(
					'label' => __('Color Scheme', 'blockbase'),
					'description' => __('Choose a color scheme for your website.', 'blockbase'),
					'section' => 'customize-global-styles',
					'choices' => $this->palettes,
					'settings' => 'color_palette'
				)
			)
		);
	}
}

new GlobalStylesColorPalettes;
