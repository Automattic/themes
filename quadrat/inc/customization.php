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
		return $decoded->settings->defaults->custom_meta;
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

		// Add Color Controls
		foreach ( $this->theme_customizations as $custom_section ) {

			if ( 'section' === $custom_section->type ) {

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

					$setting_key = 'customizer-bridge-' . $custom_option->slug;

					if ( 'color' === $custom_option->type ) {

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
					} elseif ( 'boolean' === $custom_option->type ) {

						$wp_customize->add_setting( $setting_key );
						$wp_customize->add_control(
							$setting_key,
							array(
								'label'       => esc_html__( $custom_option->name ),
								'description' => $custom_option->description,
								'section'     => $section_key,
								'type'        => 'checkbox',
								'settings'    => $setting_key,
							)
						);

					}
				}
			}
		}

	}

}
new CustomizerBridge;
