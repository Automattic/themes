<?php

require_once 'wp-customize-global-styles-setting.php';

class GlobalStylesCustomizer {

	private $section_settings;
	private $user_color_palette;

	function __construct() {
		add_action( 'customize_register', array( $this, 'initialize' ) );
		add_action( 'customize_preview_init', array( $this, 'customize_preview_js' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'create_customization_style_element' ) );
		add_action( 'customize_save_after', array( $this, 'handle_customize_save_after' ) );
	}

	function customize_preview_js() {
		wp_enqueue_script( 'customizer-preview-color', get_template_directory_uri() . '/inc/customizer-preview.js', array( 'customize-preview' ) );
		wp_localize_script( 'customizer-preview-color', 'user_color_palette', $this->user_color_palette );
	}

	function create_customization_style_element() {
		//NOTE: The original implementation wasn't quite this convelouted (there was no noop.css file, etc) but I couldn't get it to work otherwise.
		//I'm sure this doesn't need to be this complicated.  But in the end the <style> element for the preview tool to work on is what this is for.
		wp_enqueue_style( 'global-styles-customizations', get_template_directory_uri() . '/assets/noop.css', array(), true, true ); // This needs to load after global_styles, hence the dependency
		wp_add_inline_style( 'global-styles-customizations', '{}' );
	}

	function initialize( $wp_customize ) {
		$this->user_color_palette = $this->build_user_color_palette();
		$this->register_color_controls( $wp_customize, $this->user_color_palette );
	}

	function build_user_color_palette() {

		$theme_json = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_raw_data();

		$theme_color_palette = $theme_json['settings']['color']['palette']['theme'];
		$user_color_palette  = $theme_json['settings']['color']['palette']['theme'];

		if ( isset( $theme_json['settings']['color']['palette']['user'] ) ) {
			$user_color_palette = $theme_json['settings']['color']['palette']['user'];
		}

		foreach ( $user_color_palette as $key => $palette_item ) {
			$user_color_palette[ $key ]['default'] = $this->get_theme_default_color_value( $palette_item['slug'], $theme_color_palette );
		}

		return $user_color_palette;
	}

	function get_theme_default_color_value( $slug, $palette ) {
		foreach ( $palette as $palette_item ) {
			if ( $palette_item['slug'] === $slug ) {
				return $palette_item['color'];
			}
		}
		return null;
	}

	function register_color_controls( $wp_customize, $palette ) {

		$section_key = 'customize-global-styles';
		$description = __( 'Color Customization for Quadrat' );
		$title       = __( 'Colors' );

		//Add a Section to the Customizer for these bits
		$wp_customize->add_section(
			$section_key,
			array(
				'capability'  => 'edit_theme_options',
				'description' => $description,
				'title'       => $title,
			)
		);

		foreach ( $palette as $palette_item ) {
			$this->register_color_control( $wp_customize, $palette_item, $section_key );
		}
	}

	function register_color_control( $wp_customize, $custom_option, $section_key ) {
		$setting_key = $section_key . $custom_option['slug'];

		$global_styles_setting = new WP_Customize_Global_Styles_Setting(
			$wp_customize,
			$setting_key,
			array(
				'default'           => $custom_option['default'],
				'sanitize_callback' => 'sanitize_hex_color',
				'slug'              => $custom_option['slug'],
				'user_value'        => $custom_option['color'],
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

	function handle_customize_save_after( $manager ) {

		//update the palette based on the controls
		foreach ( $this->user_color_palette as $key => $palette_item ) {
			$setting = $manager->get_setting( 'customize-global-styles' . $palette_item['slug'] );
			if ( isset( $setting->new_value ) ) {
				$this->user_color_palette[ $key ]['color'] = $setting->new_value;
			}
		}

		// Get the user's theme.json from the CPT
		$user_custom_post_type_id     = WP_Theme_JSON_Resolver_Gutenberg::get_user_custom_post_type_id();
		$user_theme_json_post         = get_post( $user_custom_post_type_id );
		$user_theme_json_post_content = json_decode( $user_theme_json_post->post_content );

		$user_theme_json_post_content->settings->color->palette = $this->user_color_palette;
		$user_theme_json_post->post_content                     = json_encode( $user_theme_json_post_content );

		return wp_update_post( $user_theme_json_post );
	}
}

new GlobalStylesCustomizer;
