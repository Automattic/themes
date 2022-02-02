<?php

require_once ( __DIR__ . '/wp-customize-global-styles-setting.php' );
require_once ( __DIR__ . '/wp-customize-utils.php' );

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
		if ( $this->theme_duotone_settings ) {
			wp_enqueue_script( 'colord', get_template_directory_uri() . '/inc/customizer/vendors/colord.min.js' );
			wp_localize_script( 'customizer-preview-color', 'userColorDuotone', $this->theme_duotone_settings );
		}
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
		$this->theme_duotone_settings = $this->get_theme_duotone_settings();
		$this->register_color_controls( $wp_customize, $this->user_color_palette );
	}

	function get_theme_duotone_settings() {
		// Get the merged theme.json.
		$theme_json = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_raw_data();

		if ( array_key_exists( 'settings', $theme_json ) && array_key_exists( 'color', $theme_json['settings'] ) && array_key_exists( 'duotone', $theme_json['settings']['color'] ) && array_key_exists( 'theme', $theme_json['settings']['color']['duotone'] ) ) {
			return $theme_json['settings']['color']['duotone']['theme'];
		}

		return false;
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
		else if ( isset( $theme_json['settings']['color']['palette']['user'] ) ) {
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
				'default'           => $palette_item['default'],
				'user_value'        => $palette_item['color'],
			)
		);
		$wp_customize->add_setting(
			$global_styles_setting,
			array(
				'sanitize_callback' => 'sanitize_hex_color'
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
		if ( method_exists( 'WP_Theme_JSON_Resolver_Gutenberg', 'get_user_global_styles_post_id' ) ) { // This is the new name.
			$user_custom_post_type_id = WP_Theme_JSON_Resolver_Gutenberg::get_user_global_styles_post_id();
		} else if ( method_exists( 'WP_Theme_JSON_Resolver_Gutenberg', 'get_user_custom_post_type_id' ) ) { // This is the old name.
			$user_custom_post_type_id = WP_Theme_JSON_Resolver_Gutenberg::get_user_custom_post_type_id();
		}

		$user_theme_json_post         = get_post( $user_custom_post_type_id );
		$user_theme_json_post_content = json_decode( $user_theme_json_post->post_content );

		// Set meta settings.
		$user_theme_json_post_content->version                     = 1;
		$user_theme_json_post_content->isGlobalStylesUserThemeJSON = true;

		// Only reset the palette if the setting exists, otherwise the whole settings array gets destroyed.
		if ( property_exists( $user_theme_json_post_content, 'settings' ) && property_exists( $user_theme_json_post_content->settings, 'color' ) && property_exists( $user_theme_json_post_content->settings->color, 'palette' ) ) {
			// Start with reset palette settings.
			unset( $user_theme_json_post_content->settings->color->palette );
		}

		$user_theme_json_post_content = set_settings_array(
			$user_theme_json_post_content,
			array( 'settings', 'color', 'palette', 'custom' ),
			$this->user_color_palette
		);

		$primary_key = array_search('primary', array_column($this->user_color_palette, 'slug'));
		$background_key = array_search('background', array_column($this->user_color_palette, 'slug'));

		if (  $this->theme_duotone_settings && $primary_key !== null && $background_key !== null ) {

			$primary = $this->user_color_palette[$primary_key];
			$background = $this->user_color_palette[$background_key];

			//we invert the colors when the background is darker than the primary color
			if( colorLuminescence($primary['color']) > colorLuminescence($background['color']) ) {
				$primary = $this->user_color_palette[$background_key];
				$background = $this->user_color_palette[$primary_key];
			}

			$custom_duotone_filter = array(
				array(
					"colors" => array( $primary['color'], $background['color'] ),
					"slug" => "custom-filter",
					"name" => "Custom filter"
				)
			);

			$custom_duotone_filter_variable = "var(--wp--preset--duotone--custom-filter)";
			$user_theme_json_post_content = set_settings_array(
				$user_theme_json_post_content,
				array( 'settings', 'color', 'duotone', 'custom' ),
				array_merge( $custom_duotone_filter, $this->theme_duotone_settings )
			);

			//replace the new filter in all blocks using duotone
			$theme_json = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_raw_data();
			if ( $theme_json['styles'] && $theme_json['styles']['blocks'] ) {
				foreach ( $theme_json['styles']['blocks'] as $key => $block ) {
					if( $block['filter'] ) {
						$user_theme_json_post_content = set_settings_array(
							$user_theme_json_post_content,
							array( 'styles', 'blocks', $key, 'filter', 'duotone', 'custom' ),
							$custom_duotone_filter_variable
						);
					}
				}
			}
		}

		// Update the theme.json with the new settings.
		$user_theme_json_post->post_content = json_encode( $user_theme_json_post_content );
		wp_update_post( $user_theme_json_post );
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
