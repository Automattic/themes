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
		return $decoded->settings->defaults->customizer;
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

		$css_variables = ':root {';
		foreach ( $this->theme_customizations as $custom_option ) {
			$css_variables = $css_variables . '--wp--custom--customizer--' . $custom_option->slug . ':' . get_theme_mod( 'customizer_' . $custom_option->slug ) . ';';
		}
		$css_variables = $css_variables . ';}';

		return $css_variables;
	}

	/**
	 * Use theme.json to determine what variables to provide dials for.
	 * Add those dials to the customizer interface.
	 */
	function customizer_bridge_register( $wp_customize ) {

		//Add a Section to the Customizer for these bits
		$wp_customize->add_section(
			'customizer_bridge_options',
			array(
				'capability' => 'edit_theme_options',
				'title'      => esc_html__( 'JSON Options', 'customizer-bridge' ),
			)
		);
		$wp_customize->get_section( 'customizer_bridge_options' )->description = __( 'This section of the customizer allows for customization of things defined in theme.json.' );

		// Add Color Controls
		foreach ( $this->theme_customizations as $custom_option ) {

			if ( 'color' !== $custom_option->type ) {
				break;
			}

			$wp_customize->add_setting(
				'customizer_' . $custom_option->slug,
				array(
					'default'           => esc_html( $custom_option->default ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'customizer_' . $custom_option->slug,
					array(
						'section' => 'customizer_bridge_options',
						'label'   => $custom_option->name,
					)
				)
			);
		}

		// TODO: Add other types of controls

	}

}
new CustomizerBridge;
