<?php

require_once 'wp-customize-global-styles-setting.php';

class GlobalStylesCustomizer {

	private $custom_colors;

	function __construct() {
		$this->custom_colors = array(
			'name'        => __( 'Colors' ),
			'type'        => 'section',
			'slug'        => 'customize-global-styles',
			'description' => __( 'Color Customization for Quadrat' ),
			'controls'    => array(
				array(
					'name'     => __( 'Foreground Color' ),
					'type'     => 'color',
					'default'  => '#FFD1D1', // TODO
					'selector' => 'body',
					'property' => 'color',
					'slug'     => 'text',
				),
				array(
					'name'     => __( 'Background Color' ),
					'type'     => 'color',
					'default'  => '#292C6D', //TOOD
					'selector' => 'body',
					'property' => 'background',
					'slug'     => 'background',
				),
			),
		);

		add_action( 'customize_register', array( $this, 'register_section' ) );

		/* Customizer Preview JS */
		add_action( 'customize_preview_init', array( $this, 'customize_preview_js' ) );
	}

	/* Preview JS */
	function customize_preview_js() {
		wp_enqueue_script( 'customizer-preview-color', get_stylesheet_directory_uri() . '/inc/customizer-preview.js', array( 'customize-preview' ) );
		wp_localize_script( 'customizer-preview-color', 'global_styles_settings', $this->custom_colors );
	}

	function register_section( $wp_customize ) {
		if ( 'section' !== $this->custom_colors['type'] ) {
			return;
		}

		$section_key = $this->custom_colors['slug'];

		//Add a Section to the Customizer for these bits
		$wp_customize->add_section(
			$section_key,
			array(
				'capability'  => 'edit_theme_options',
				'description' => $this->custom_colors['description'],
				'title'       => $this->custom_colors['name'],
			)
		);

		// Add Controls
		foreach ( $this->custom_colors['controls'] as $custom_option ) {
			if ( 'color' === $custom_option['type'] ) {
				$this->register_color_control( $wp_customize, $custom_option, $section_key );
			}
		}
	}

	function register_color_control( $wp_customize, $custom_option, $section_key ) {
		$setting_key = $section_key . $custom_option['slug'];

		$global_styles_setting = new WP_Customize_Global_Styles_Setting(
			$wp_customize,
			$setting_key,
			array(
				'default'           => esc_html( $custom_option['default'] ),
				'sanitize_callback' => 'sanitize_hex_color',
				'slug'              => $custom_option['slug'],
			)
		);

		$wp_customize->add_setting( $global_styles_setting );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$setting_key,
				array(
					'section' => $section_key,
					'label'   => $custom_option['name'],
				)
			)
		);
	}
}
new GlobalStylesCustomizer;
