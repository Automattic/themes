<?php

require_once 'wp-customize-global-styles-setting.php';

class GlobalStylesCustomizer {

	private $palette_colors;

	function __construct() {
		add_action( 'customize_register', array( $this, 'parse_theme_palette_colors' ) );

		add_action( 'customize_register', array( $this, 'register_section' ) );

		/* Customizer Preview JS */
		add_action( 'customize_preview_init', array( $this, 'customize_preview_js' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'create_customization_style_element' ) );
	}

	function create_customization_style_element() {
		//NOTE: The original implementation wasn't quite this convelouted (there was no noop.css file, etc) but I couldn't get it to work otherwise.
		//I'm sure this doesn't need to be this complicated.  But in the end the <style> element for the preview tool to work on is what this is for.
		wp_enqueue_style( 'global-styles-customizations', get_stylesheet_directory_uri() . '/assets/noop.css', array(), true, true ); // This needs to load after global_styles, hence the dependency
		wp_add_inline_style( 'global-styles-customizations', '{}' );
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

	function parse_theme_palette_colors() {
		$theme_json    = WP_Theme_JSON_Resolver_Gutenberg::get_theme_data()->get_raw_data();
		$color_palette = $theme_json['settings']['color']['palette'];

		$color_options = array();

		foreach ( $color_palette as $palette_item ) {

			array_push(
				$color_options,
				array(
					'name'     => $palette_item['name'],
					'type'     => 'color',
					'default'  => $this->get_color( $palette_item['color'], $color_palette ),
					'selector' => 'body',
					'property' => 'color',
					'slug'     => $palette_item['slug'],
				)
			);
		}

		$this->palette_colors = array(
			'name'        => __( 'Colors' ),
			'type'        => 'section',
			'slug'        => 'customize-global-styles',
			'description' => __( 'Color Customization for Quadrat' ),
			'controls'    => $color_options,
		);
	}

	/* Preview JS */
	function customize_preview_js() {
		wp_enqueue_script( 'customizer-preview-color', get_stylesheet_directory_uri() . '/inc/customizer-preview.js', array( 'customize-preview' ) );
		wp_localize_script( 'customizer-preview-color', 'global_styles_settings', $this->palette_colors );
	}

	function register_section( $wp_customize ) {
		if ( 'section' !== $this->palette_colors['type'] ) {
			return;
		}

		$section_key = $this->palette_colors['slug'];

		//Add a Section to the Customizer for these bits
		$wp_customize->add_section(
			$section_key,
			array(
				'capability'  => 'edit_theme_options',
				'description' => $this->palette_colors['description'],
				'title'       => $this->palette_colors['name'],
			)
		);

		// Add Controls
		foreach ( $this->palette_colors['controls'] as $custom_option ) {
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
