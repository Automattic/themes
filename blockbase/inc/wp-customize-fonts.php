<?php

require_once 'wp-customize-global-styles-setting.php';
require_once 'wp-customize-utils.php';

class GlobalStylesFontsCustomizer {

	private $section_key = 'customize-global-styles-fonts';

	private $font_settings;

	private $fonts = array(
		'system-font'       => array(
			'fontFamily' => '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif',
			'slug'       => 'system-font',
			'name'       => 'System Font',
		),
		'arvo'              => array(
			'fontFamily' => '"Arvo", serif',
			'slug'       => 'arvo',
			'name'       => 'Arvo',
			'google'     => 'family=Arvo:ital,wght@0,400;0,500;1,400',
		),
		'bodoni-moda'       => array(
			'fontFamily' => '"Bodoni Moda", serif',
			'slug'       => 'bodoni-moda',
			'name'       => 'Bodoni Moda',
			'google'     => 'family=Bodoni+Moda:ital,wght@0,400;0,500;1,400',
		),
		'cabin'             => array(
			'fontFamily' => '"Cabin", sans-serif',
			'slug'       => 'cabin',
			'name'       => 'Cabin',
			'google'     => 'family=Cabin:ital,wght@0,400;0,500;1,400',
		),
		'chivo'             => array(
			'fontFamily' => '"Chivo", sans-serif',
			'slug'       => 'chivo',
			'name'       => 'Chivo',
			'google'     => 'family=Chivo:ital,wght@0,400;0,500;1,400',
		),
		'courier-prime'     => array(
			'fontFamily' => '"Courier Prime", serif',
			'slug'       => 'courier-prime',
			'name'       => 'Courier Prime',
			'google'     => 'family=Courier+Prime:ital,wght@0,400;0,500;1,400',
		),
		'dm-sans'           => array(
			'fontFamily' => '"DM Sans", sans-serif',
			'slug'       => 'dm-sans',
			'name'       => 'DM Sans',
			'google'     => 'family=DM+Sans:ital,wght@0,400;0,500;1,400',
		),
		'domine'            => array(
			'fontFamily' => '"Domine", serif',
			'slug'       => 'domine',
			'name'       => 'Domine',
			'google'     => 'family=Domine:ital,wght@0,400;0,500;1,400',
		),
		'eb-garamond'       => array(
			'fontFamily' => '"EB Garamond", serif',
			'slug'       => 'eb-garamond',
			'name'       => 'EB Garamond',
			'google'     => 'family=EB+Garamond:ital,wght@0,400;0,500;1,400',
		),
		'fira-sans'         => array(
			'fontFamily' => '"Fira Sans", sans-serif',
			'slug'       => 'fira-sans',
			'name'       => 'Fira Sans',
			'google'     => 'family=Fira+Sans:ital,wght@0,400;0,500;1,400',
		),
		'inter'             => array(
			'fontFamily' => '"Inter", sans-serif',
			'slug'       => 'inter',
			'name'       => 'Inter',
			'google'     => 'family=Inter:ital,wght@0,400;0,500;1,400',
		),
		'josefin-sans'      => array(
			'fontFamily' => '"Josefin Sans", sans-serif',
			'slug'       => 'josefin-sans',
			'name'       => 'Josefin Sans',
			'google'     => 'family=Josefin+Sans:ital,wght@0,400;0,500;1,400',
		),
		'libre-baskerville' => array(
			'fontFamily' => '"Libre Baskerville", serif',
			'slug'       => 'libre-baskerville',
			'name'       => 'Libre Baskerville',
			'google'     => 'family=Libre+Baskerville:ital,wght@0,400;0,500;1,400',
		),
		'libre-franklin'    => array(
			'fontFamily' => '"Libre Franklin", sans-serif',
			'slug'       => 'libre-franklin',
			'name'       => 'Libre Franklin',
			'google'     => 'family=Libre+Franklin:ital,wght@0,400;0,500;1,400',
		),
		'lora'              => array(
			'fontFamily' => '"Lora", serif',
			'slug'       => 'lora',
			'name'       => 'Lora',
			'google'     => 'family=Lora:ital,wght@0,400;0,500;1,400',
		),
		'merriweather'      => array(
			'fontFamily' => '"Merriweather", serif',
			'slug'       => 'merriweather',
			'name'       => 'Merriweather',
			'google'     => 'family=Merriweather:ital,wght@0,400;0,500;1,400',
		),
		'montserrat'        => array(
			'fontFamily' => '"Montserrat", sans-serif',
			'slug'       => 'montserrat',
			'name'       => 'Montserrat',
			'google'     => 'family=Montserrat:ital,wght@0,400;0,500;1,400',
		),
		'nunito'            => array(
			'fontFamily' => '"Nunito", sans-serif',
			'slug'       => 'nunito',
			'name'       => 'Nunito',
			'google'     => 'family=Nunito:ital,wght@0,400;0,500;1,400',
		),
		'open-sans'         => array(
			'fontFamily' => '"Open Sans", sans-serif',
			'slug'       => 'open-sans',
			'name'       => 'Open Sans',
			'google'     => 'family=Open+Sans:ital,wght@0,400;0,500;1,400',
		),
		'overpass'          => array(
			'fontFamily' => '"Overpass", sans-serif',
			'slug'       => 'overpass',
			'name'       => 'Overpass',
			'google'     => 'family=Overpass:ital,wght@0,400;0,500;1,400',
		),
		'playfair-display'  => array(
			'fontFamily' => '"Playfair Display", serif',
			'slug'       => 'playfair-display',
			'name'       => 'Playfair Display',
			'google'     => 'family=Playfair+Display:ital,wght@0,400;0,500;1,400',
		),
		'poppins'           => array(
			'fontFamily' => '"Poppins", sans-serif',
			'slug'       => 'poppins',
			'name'       => 'Poppins',
			'google'     => 'family=Poppins:ital,wght@0,400;0,500;1,400',
		),
		'raleway'           => array(
			'fontFamily' => '"Raleway", sans-serif',
			'slug'       => 'raleway',
			'name'       => 'Raleway',
			'google'     => 'family=Raleway:ital,wght@0,400;0,500;1,400',
		),
		'roboto'            => array(
			'fontFamily' => '"Roboto", sans-serif',
			'slug'       => 'roboto',
			'name'       => 'Roboto',
			'google'     => 'family=Roboto:ital,wght@0,400;0,500;1,400',
		),
		'roboto-slab'       => array(
			'fontFamily' => '"Roboto Slab", sans-serif',
			'slug'       => 'roboto-slab',
			'name'       => 'Roboto Slab',
			'google'     => 'family=Roboto+Slab:ital,wght@0,400;0,500;1,400',
		),
		'rubik'             => array(
			'fontFamily' => '"Rubik", sans-serif',
			'slug'       => 'rubik',
			'name'       => 'Rubik',
			'google'     => 'family=Rubik:ital,wght@0,400;0,500;1,400',
		),
		'source-sans-pro'   => array(
			'fontFamily' => '"Source Sans Pro", sans-serif',
			'slug'       => 'source-sans-pro',
			'name'       => 'Source Sans Pro',
			'google'     => 'family=Source+Sans+Pro:ital,wght@0,400;0,500;1,400',
		),
		'source-serif-pro'  => array(
			'fontFamily' => '"Source Serif Pro", serif',
			'slug'       => 'source-serif-pro',
			'name'       => 'Source Serif Pro',
			'google'     => 'family=Source+Serif+Pro:ital,wght@0,400;0,500;1,400',
		),
		'space-mono'        => array(
			'fontFamily' => '"Space Mono", sans-serif',
			'slug'       => 'space-mono',
			'name'       => 'Space Mono',
			'google'     => 'family=Space+Mono:ital,wght@0,400;0,500;1,400',
		),
		'work-sans'         => array(
			'fontFamily' => '"Work Sans", sans-serif',
			'slug'       => 'work-sans',
			'name'       => 'Work Sans',
			'google'     => 'family=Work+Sans:ital,wght@0,400;0,500;1,400',
		),
	);

	function __construct() {
		add_action( 'customize_register', array( $this, 'initialize' ) );
		add_action( 'customize_preview_init', array( $this, 'handle_customize_preview_init' ) );
		add_action( 'customize_register', array( $this, 'enqueue_google_fonts' ) );
		add_action( 'customize_save_after', array( $this, 'handle_customize_save_after' ) );
	}

	function handle_customize_preview_init( $wp_customize ) {
		$this->update_font_settings( $wp_customize );
		$this->customize_preview_js( $wp_customize );
		$this->create_customization_style_element( $wp_customize );
	}

	function customize_preview_js( $wp_customize ) {
		wp_enqueue_script( 'customizer-preview-fonts', get_template_directory_uri() . '/inc/wp-customize-fonts-preview.js', array( 'customize-preview' ) );
		wp_localize_script( 'customizer-preview-fonts', 'googleFonts', $this->fonts );
		wp_localize_script( 'customizer-preview-fonts', 'fontSettings', $this->font_settings );
	}

	function enqueue_google_fonts() {
		wp_enqueue_style( 'blockbase-google-fonts', $this->google_fonts_url(), array(), null );
	}

	function create_customization_style_element( $wp_customize ) {
		wp_enqueue_style( 'global-styles-fonts-customizations', ' ', array( 'global-styles' ) ); // This needs to load after global_styles, hence the dependency
		$css  = ':root,body{';
		$css .= '--wp--custom--body--typography--font-family:' . $this->font_settings['body'] . ';';
		$css .= '--wp--custom--heading--typography--font-family: ' . $this->font_settings['heading'] . '}';
		$css .= '}';
		wp_add_inline_style( 'global-styles-fonts-customizations', $css );
	}

	function update_font_settings( $wp_customize ) {
		$body_value = $wp_customize->get_setting( $this->section_key . 'body' )->post_value();
		if ( $body_value ) {
			$body_font_setting           = $this->fonts[ $body_value ];
			$this->font_settings['body'] = $body_font_setting['fontFamily'];
		}

		$heading_value = $wp_customize->get_setting( $this->section_key . 'heading' )->post_value();
		if ( $heading_value ) {
			$heading_font_setting           = $this->fonts[ $heading_value ];
			$this->font_settings['heading'] = $heading_font_setting['fontFamily'];
		}
	}

	function google_fonts_url() {
		$font_families = array();
		foreach ( $this->fonts as $font ) {
			if ( ! empty( $font['google'] ) ) {
				$font_families[] = $font['google'];
			}
		}
		$font_families[] = 'display=swap';

		// Make a single request for the theme fonts.
		return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families ) );
	}

	function initialize( $wp_customize ) {

		$theme       = wp_get_theme();
		$merged_json = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_raw_data();
		$theme_json  = WP_Theme_JSON_Resolver_Gutenberg::get_theme_data()->get_raw_data();

		$body_font_default    = $this->get_font_family( 'body', $theme_json );
		$heading_font_default = $this->get_font_family( 'heading', $theme_json );

		$body_font_selected    = $this->get_font_family( 'body', $merged_json );
		$heading_font_selected = $this->get_font_family( 'heading', $merged_json );

		$this->font_settings = array(
			'body'    => $body_font_selected['fontFamily'],
			'heading' => $heading_font_selected['fontFamily'],
		);

		//Add a Section to the Customizer for these bits
		$wp_customize->add_section(
			$this->section_key,
			array(
				'capability'  => 'edit_theme_options',
				'description' => sprintf( __( 'Font Customization for %1$s', 'blockbase' ), $theme->name ),
				'title'       => __( 'Fonts', 'blockbase' ),
			)
		);

		$this->add_setting_and_control( $wp_customize, 'body', __( 'Body font', 'blockbase' ), $body_font_default['slug'], $body_font_selected['slug'] );
		$this->add_setting_and_control( $wp_customize, 'heading', __( 'Heading font', 'blockbase' ), $heading_font_default['slug'], $heading_font_selected['slug'] );
	}

	function get_font_family( $location, $configuration ) {
		$variable = $configuration['settings']['custom'][ $location ]['typography']['fontFamily'];
		$slug     = preg_replace( '/var\(--wp--preset--font-family--(.*)\)/', '$1', $variable );
		return $this->fonts[ $slug ];
	}

	function add_setting_and_control( $wp_customize, $name, $label, $default, $user_value ) {
		$setting_name          = $this->section_key . $name;
		$global_styles_setting = new WP_Customize_Global_Styles_Setting(
			$wp_customize,
			$setting_name,
			array(
				'default'    => $default,
				'user_value' => $user_value,
			)
		);
		$wp_customize->add_setting( $global_styles_setting );

		$choices = array();
		foreach ( $this->fonts as $font_slug => $font_setting ) {
			$choices[ $font_slug ] = $font_setting['name'];
		}

		$wp_customize->add_control(
			$setting_name,
			array(
				'section' => $this->section_key,
				'label'   => $label,
				'type'    => 'select',
				'choices' => $choices,
			)
		);

		// Update the setting to the dirty value.
		// This is needed to preserve the settings when other Customizer settings change.
		$dirty_value = $wp_customize->get_setting( $setting_name )->post_value();
		if ( ! empty( $dirty_value ) ) {
			$wp_customize->get_setting( $setting_name )->value = $dirty_value;
		}
	}

	function handle_customize_save_after( $wp_customize ) {
		$body_value    = $wp_customize->get_setting( $this->section_key . 'body' )->post_value();
		$heading_value = $wp_customize->get_setting( $this->section_key . 'heading' )->post_value();

		$body_default    = $wp_customize->get_setting( $this->section_key . 'body' )->default;
		$heading_default = $wp_customize->get_setting( $this->section_key . 'heading' )->default;

		if ( ! isset( $body_value ) ) {
			$body_value = $body_default;
		}

		if ( ! isset( $heading_value ) ) {
			$heading_value = $heading_default;
		}

		$body_setting    = $this->fonts[ $body_value ];
		$heading_setting = $this->fonts[ $heading_value ];

		// Set up variables for the theme.json.
		$font_families = array(
			$body_setting,
			$heading_setting,
		);

		$body_font_family_variable    = 'var(--wp--preset--font-family--' . $body_setting['slug'] . ')';
		$heading_font_family_variable = 'var(--wp--preset--font-family--' . $heading_setting['slug'] . ')';

		$google_font_array = array();
		if ( $body_setting['google'] ) {
			$google_font_array[] = $body_setting['google'];
		}
		if ( $heading_setting['google'] ) {
			$google_font_array[] = $heading_setting['google'];
		}

		// Get the user's theme.json from the CPT.
		$user_custom_post_type_id     = WP_Theme_JSON_Resolver_Gutenberg::get_user_custom_post_type_id();
		$user_theme_json_post         = get_post( $user_custom_post_type_id );
		$user_theme_json_post_content = json_decode( $user_theme_json_post->post_content );

		// Set the typography settings.
		$user_theme_json_post_content = set_settings_array(
			$user_theme_json_post_content,
			array( 'settings', 'typography', 'fontFamilies' ),
			$font_families
		);

		// Set the custom body settings.
		$user_theme_json_post_content = set_settings_array(
			$user_theme_json_post_content,
			array( 'settings', 'custom', 'body', 'typography', 'fontFamily' ),
			$body_font_family_variable
		);

		// Set the custom heading settings.
		$user_theme_json_post_content = set_settings_array(
			$user_theme_json_post_content,
			array( 'settings', 'custom', 'heading', 'typography', 'fontFamily' ),
			$heading_font_family_variable
		);

		// Set the custom google fonts settings.
		$user_theme_json_post_content = set_settings_array(
			$user_theme_json_post_content,
			array( 'settings', 'custom', 'fontsToLoadFromGoogle' ),
			$google_font_array
		);

		//If the typeface choices === the default then we remove it instead
		if ( $body_value === $body_default && $heading_value === $heading_default ) {
			unset( $user_theme_json_post_content->settings->typography->fontFamilies );
			unset( $user_theme_json_post_content->settings->custom->body->typography->fontFamily );
			unset( $user_theme_json_post_content->settings->custom->heading->typography->fontFamily );
			unset( $user_theme_json_post_content->settings->custom->fontsToLoadFromGoogle );
		}

		// Update the theme.json with the new settings.
		$user_theme_json_post->post_content = json_encode( $user_theme_json_post_content );
		return wp_update_post( $user_theme_json_post );
	}

}

new GlobalStylesFontsCustomizer;
