<?php

require_once( __DIR__ . '/wp-customize-global-styles-setting.php' );
require_once( __DIR__ . '/wp-customize-utils.php' );

class GlobalStylesColorCustomizer {

	private $section_key = 'customize-global-styles-colors';

	private $user_color_palette;

	function __construct() {
		add_action( 'customize_register', array( $this, 'initialize' ) );
		add_action( 'customize_preview_init', array( $this, 'customize_preview_js' ) );
		add_action( 'customize_register', array( $this, 'create_customization_style_element' ) );
		add_action( 'customize_save_after', array( $this, 'handle_customize_save_after' ) );
	}

	function customize_preview_js() {
		wp_enqueue_script( 'customizer-preview-color', get_template_directory_uri() . '/inc/customizer/wp-customize-colors-preview.js', array( 'customize-preview' ) );
		wp_add_inline_script( 'customizer-preview-color', 'var userColorSectionKey="' . $this->section_key . '";', 'before' );
		wp_localize_script( 'customizer-preview-color', 'userColorPalette', $this->user_color_palette );
	}

	function update_user_color_palette( $wp_customize ) {
		foreach ( $this->user_color_palette as $key => $palette_item ) {
			$setting = $wp_customize->get_setting( $this->section_key . $palette_item['slug'] );
			if ( null !== $setting->post_value() ) {
				$this->user_color_palette[ $key ]['color'] = $setting->post_value();
			}
		}
	}

	function create_customization_style_element( $wp_customize ) {
		wp_enqueue_style( 'global-styles-colors-customizations', ' ', array( 'global-styles' ) ); // This needs to load after global_styles, hence the dependency

		$this->update_user_color_palette( $wp_customize );

		$css = ':root,body{';
		foreach ( $this->user_color_palette as $key => $palette_item ) {
			$setting = $wp_customize->get_setting( $this->section_key . $palette_item['slug'] );
			$css    .= '--wp--preset--color--' . $palette_item['slug'] . ':' . $palette_item['color'] . ';';
		}
		$css .= '}';

		wp_add_inline_style( 'global-styles-colors-customizations', $css );
	}

	function initialize( $wp_customize ) {
		$this->user_color_palette = $this->build_user_color_palette();
		$this->register_color_controls( $wp_customize, $this->user_color_palette );
	}

	function build_user_color_palette() {
		// Get the merged theme.json.
		$theme_json = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_raw_data();

		$combined_color_palette = $theme_json['settings']['color']['palette']['theme'];
		$user_color_palette     = null;
		if ( isset( $theme_json['settings']['color']['palette']['custom'] ) ) {
			$user_color_palette = $theme_json['settings']['color']['palette']['custom'];
		}

		// NOTE: This should be removed once Gutenberg 12.1 lands stably in all environments
		elseif ( isset( $theme_json['settings']['color']['palette']['user'] ) ) {
			$user_color_palette = $theme_json['settings']['color']['palette']['user'];
		}
		// End Gutenberg < 12.1 compatibility patch

		// Combine theme settings with user settings.
		foreach ( $combined_color_palette as $key => $palette_item ) {
			//make theme color value the default
			$combined_color_palette[ $key ]['default'] = $combined_color_palette[ $key ]['color'];
			//use user color value if there is one
			$user_color_value = $this->get_user_color_value( $palette_item['slug'], $user_color_palette );
			if ( isset( $user_color_value ) ) {
				$combined_color_palette[ $key ]['color'] = $user_color_value;
			}
		}

		return $combined_color_palette;
	}

	function get_user_color_value( $slug, $palette ) {
		if ( ! isset( $palette ) ) {
			return null;
		}
		foreach ( $palette as $palette_item ) {
			if ( $palette_item['slug'] === $slug ) {
				return $palette_item['color'];
			}
		}
		return null;
	}

	function register_color_controls( $wp_customize, $palette ) {
		$theme = wp_get_theme();

		//Add a Section to the Customizer for these bits
		$wp_customize->add_section(
			$this->section_key,
			array(
				'capability'  => 'edit_theme_options',
				'description' => sprintf( __( 'Color Customization for %1$s', 'blockbase' ), $theme->name ),
				'title'       => __( 'Colors', 'blockbase' ),
			)
		);

		foreach ( $palette as $palette_item ) {
			$this->register_color_control( $wp_customize, $palette_item );
		}
	}

	function register_color_control( $wp_customize, $palette_item ) {
		$setting_key = $this->section_key . $palette_item['slug'];

		$global_styles_setting = new WP_Customize_Global_Styles_Setting(
			$wp_customize,
			$setting_key,
			array(
				'default'    => $palette_item['default'],
				'user_value' => $palette_item['color'],
			)
		);
		$wp_customize->add_setting(
			$global_styles_setting,
			array(
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$setting_key,
				array(
					'section' => $this->section_key,
					'label'   => $palette_item['name'],
				)
			)
		);
	}

	function handle_customize_save_after( $wp_customize ) {
		//update the palette based on the controls
		$this->update_user_color_palette( $wp_customize );

		// Get the user's theme.json from the CPT.
		$user_custom_post_type_id = WP_Theme_JSON_Resolver_Gutenberg::get_user_global_styles_post_id();
		$global_styles_controller = new Gutenberg_REST_Global_Styles_Controller();
		$get_request              = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' );

		$get_request->set_param( 'id', $user_custom_post_type_id );
		$global_styles = $global_styles_controller->get_item( $get_request );

		// converts data to array (in some cases settings and styles are objects insted of arrays)
		$new_settings = (array) $global_styles->data['settings'];
		$new_styles   = (array) $global_styles->data['styles'];

		// Set the new color settings
		$new_settings['color']['palette']['custom'] = $this->user_color_palette;

		// Add the updated global styles to the update request
		$update_request = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' );
		$update_request->set_param( 'id', $user_custom_post_type_id );
		$update_request->set_param( 'settings', $new_settings );
		$update_request->set_param( 'styles', $new_styles );

		// Update the theme.json with the new settings.
		$updated_global_styles = $global_styles_controller->update_item( $update_request );
		delete_transient( 'global_styles' );
		delete_transient( 'global_styles_' . get_stylesheet() );
		delete_transient( 'gutenberg_global_styles' );
		delete_transient( 'gutenberg_global_styles_' . get_stylesheet() );
	}

	function check_if_colors_are_default() {
		foreach ( $this->user_color_palette as $palette_color ) {
			if ( strtoupper( $palette_color['color'] ) !== strtoupper( $palette_color['default'] ) ) {
				return false;
			}
		}
		return true;
	}
}

new GlobalStylesColorCustomizer;
