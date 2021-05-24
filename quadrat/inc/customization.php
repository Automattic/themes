<?php

require_once 'wp-customize-global-styles-setting.php';

class GlobalStylesCustomizer {

	private $custom_colors;

	function __construct() {
		add_action( 'customize_register', array( $this, 'set_customizations' ) );

		add_action( 'customize_register', array( $this, 'register_section' ) );

		/* Customizer Preview JS */
		add_action( 'customize_preview_init', array( $this, 'customize_preview_js' ) );
	}

	/**
	 * Gets the color from a CSS variable.
	 *
	 * This might already be in Gutenberg.
	 */
	function get_color( $color, $palette ) {
		// Is this a HEX?
		if ( 0 === strpos( $color, '#' ) ) {
			// If so just return.
			return $color;
		}

		// Is this a variable?
		if ( 0 === strpos( $color, 'var(--wp--preset--color--' ) ) {
			// If so just return the palette
			$color_slug = preg_replace( '/var\(--wp--preset--color--(.*)\)/', '$1', $color );
			$key        = array_search( $color_slug, array_column( $palette, 'slug' ), true );
			return $palette[ $key ]['color'];
		}
	}

	function set_customizations() {
		$theme_json    = WP_Theme_JSON_Resolver::get_merged_data()->get_raw_data();
		$color_palette = $theme_json['settings']['color']['palette'];

		$this->custom_colors = array(
			'name'        => __( 'Colors' ),
			'type'        => 'section',
			'slug'        => 'customize-global-styles',
			'description' => __( 'Color Customization for Quadrat' ),
			'controls'    => array(
				array(
					'name'           => __( 'Foreground Color' ),
					'type'           => 'color',
					'default'        => $this->get_color( $theme_json['styles']['color']['text'], $color_palette ),
					'selector'       => 'body',
					'property'       => 'color',
					'declaration'    => 'color',
					'slug'           => 'text',
					'json_structure' => array( 'styles', 'color', 'text' ),
					'variable'       => '--wp--style--color--text',
				),
				array(
					'name'           => __( 'Background Color' ),
					'type'           => 'color',
					'default'        => $this->get_color( $theme_json['styles']['color']['background'], $color_palette ),
					'selector'       => 'body',
					'property'       => 'color',
					'declaration'    => 'background-color',
					'slug'           => 'background',
					'json_structure' => array( 'styles', 'color', 'background' ),
					'variable'       => '--wp--style--color--background',
				),
				array(
					'name'           => __( 'Link Color' ),
					'type'           => 'color',
					'default'        => $this->get_color( $theme_json['styles']['elements']['link']['color']['text'], $color_palette ),
					'selector'       => 'a',
					'declaration'    => 'color',
					'property'       => 'text',
					'slug'           => 'color',
					'json_structure' => array( 'styles', 'elements', 'link', 'color', 'text' ),
					'variable'       => '--wp--style--link--color',
				),
				array(
					'name'           => __( 'Border Color' ),
					'type'           => 'color',
					'default'        => $this->get_color( $theme_json['styles']['border']['color'], $color_palette ),
					'selector'       => 'body',
					'declaration'    => 'border-color',
					'property'       => 'border',
					'slug'           => 'color',
					'json_structure' => array( 'styles', 'border', 'color' ),
					'variable'       => '--wp--style--border--color',
				),
			),
		);
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
		$setting_key = $section_key . $custom_option['variable'];

		$global_styles_setting = new WP_Customize_Global_Styles_Setting(
			$wp_customize,
			$setting_key,
			array(
				'default'           => esc_html( $custom_option['default'] ),
				'json_structure'    => $custom_option['json_structure'],
				'sanitize_callback' => 'sanitize_hex_color',
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
