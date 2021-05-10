<?php
class CustomizerBridge {

	private $theme_customizations;

	function __construct() {
		add_action( 'customize_register', array( $this, 'customizer_bridge_register' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'customizer_bridge_output_variables' ) );
		$this->theme_customizations = $this->get_theme_customizations();
	}

	function get_theme_customizations() {
		$string  = file_get_contents( get_stylesheet_directory() . '/experimental-theme.json' );
		$decoded = json_decode( $string );
		return $decoded->settings->custom_meta;
	}

	/**
	 * Enqueue color variables for customizer & frontend.
	 */
	function customizer_bridge_output_variables() {
		wp_add_inline_style( 'customizer-style', $this->customizer_bridge_generate_custom_color_variables() );
	}

	/**
	 * Render the customized variables.
	 */
	function customizer_bridge_generate_custom_color_variables( $context = null ) {

		$css_variables = 'body {';
		foreach ( $this->theme_customizations as $custom_section ) {
			foreach ( $custom_section->controls as $custom_option ) {
				$css_variables = $css_variables . '--wp--custom--' . $custom_option->slug . ':' . get_theme_mod( 'customizer-bridge-' . $custom_option->slug ) . ';';
			}
		}
		$css_variables = $css_variables . '}';

		return $css_variables;
	}

	/**
	 * Use theme.json to determine what variables to provide dials for.
	 * Add those dials to the customizer interface.
	 */
	function customizer_bridge_register( $wp_customize ) {

		foreach ( $this->theme_customizations as $custom_section ) {
			$this->register_section( $custom_section, $wp_customize );
		}

	}

	function register_section( $custom_section, $wp_customize ) {
		if ( 'section' !== $custom_section->type ) {
			return;
		}

		$section_key = 'customizer-bridge-' . $custom_section->slug;

		//Add a Section to the Customizer for these bits
		$wp_customize->add_section(
			$section_key,
			array(
				'capability' => 'edit_theme_options',
				'title'      => esc_html__( $custom_section->name, 'customizer-bridge' ),
			)
		);

		$wp_customize->get_section( $section_key )->description = __( $custom_section->description );

		// Add Controls
		foreach ( $custom_section->controls as $custom_option ) {
			if ( 'color' === $custom_option->type ) {
				$this->register_color_control( $custom_option, $section_key, $wp_customize );
			}
		}
	}

	function register_color_control( $custom_option, $section_key, $wp_customize ) {
		$setting_key = 'customizer-bridge-' . $custom_option->slug;

		$wp_customize->add_setting(
			$setting_key,
			array(
				'default'           => esc_html( $custom_option->default ),
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$setting_key,
				array(
					'section' => $section_key,
					'label'   => $custom_option->name,
				)
			)
		);
	}
}
new CustomizerBridge;
