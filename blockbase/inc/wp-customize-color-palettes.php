<?php

require_once 'wp-customize-palette-control.php';

class GlobalStylesColorPalettes {
	private $palettes = array();

	function __construct() {
		add_action( 'customize_register', array( $this, 'color_palette_control' ) );
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'customize_preview_js' ) );
	}

	function customize_preview_js() {
		wp_enqueue_script( 'customizer-color-palettes', get_template_directory_uri() . '/inc/color-palettes-controls.js', array( 'customize-controls' ) );
		wp_localize_script( 'customizer-color-palettes', 'colorPalettes', $this->palettes );
	}

	function build_palettes( $theme_json ) {

		$default_palette = $theme_json['settings']['color']['palette']['theme'];

		$default_palette_setting = array();
		foreach ( $default_palette as $default_color ) {
			$default_palette_setting[ $default_color['slug'] ] = $default_color['color'];
		}

		$this->palettes['default-palette'] = array(
			'label'  => 'Default',
			'colors' => $default_palette_setting,
		);

		$custom_palettes = $theme_json['settings']['custom']['colorPalettes'];
		if ( ! empty( $custom_palettes ) ) {
			foreach ( $custom_palettes as $palette_slug => $custom_palette ) {
				$custom_palette_setting = array();
				foreach ( $custom_palette['colors'] as $color_slug => $color ) {
					$custom_palette_setting[ $color_slug ] = $color;
				}

				$this->palettes[ $palette_slug ] = array(
					'label'  => $custom_palette['label'],
					'colors' => $custom_palette_setting,
				);
			}
		}
	}

	function color_palette_control( $wp_customize ) {

		$theme_json = WP_Theme_JSON_Resolver_Gutenberg::get_theme_data()->get_raw_data();

		if ( ! isset( $theme_json['settings']['custom']['colorPalettes'] ) ) {
			return;
		}

		$wp_customize->add_setting(
			'color_palette',
			array(
				'default'    => 'default-palette',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage', // We need this to stop the page refreshing.
			)
		);

		$wp_customize->add_control(
			new Color_Palette_Control(
				$wp_customize,
				'color_palette',
				array(
					'label'       => __( 'Color Scheme', 'blockbase' ),
					'description' => __( 'Choose a color scheme for your website.', 'blockbase' ),
					'section'     => 'customize-global-styles',
					'choices'     => $this->palettes,
					'settings'    => 'color_palette',
				)
			)
		);

		$this->build_palettes( $theme_json );
	}
}

new GlobalStylesColorPalettes;
