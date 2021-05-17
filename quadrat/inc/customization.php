<?php
class CustomizerBridge {

	private $theme_customizations;

	function __construct() {
		add_action( 'customize_register', array( $this, 'customizer_bridge_register' ) );

		//this is for the view
		add_action( 'wp_enqueue_scripts', array( $this, 'customizer_bridge_output_variables' ) );

		//this is for the editor
		add_action( 'enqueue_block_editor_assets', array( $this, 'customizer_bridge_output_variables' ) );

		add_action( 'customize_save_after', array( $this, 'save_to_global_styles' ) );

		add_action( 'save_post_wp_global_styles', array( $this, 'update_from_global_styles' ), 3, 3 );

		$this->theme_customizations = $this->get_theme_customizations();
	}

	function update_from_global_styles( $post_ID, $post, $update ) {
		//var_dump( $post );
	}

	function save_to_global_styles( $manager ) {
		//      var_dump( WP_Theme_JSON_Resolver::get_user_data() );
		$user_custom_post_type_id     = WP_Theme_JSON_Resolver::get_user_custom_post_type_id();
		$user_theme_json_post         = get_post( $user_custom_post_type_id );
		$user_theme_json_post_content = json_decode( $user_theme_json_post->post_content );
		//var_dump( $user_theme_json_post_content );
		$customizer_json = json_decode(
			'{
			"settings": {
				"custom": {
					"color": {

					}
				}
			}
		}'
		);
		foreach ( $this->theme_customizations as $custom_section ) {
			foreach ( $custom_section->controls as $custom_option ) {
				$slug_value = get_theme_mod( 'customizer-bridge-' . $custom_option->slug );
				if ( $slug_value ) {
					$customizer_json->settings->custom->color->{ $custom_option->slug } = $slug_value;
				}
			}
		}
		//var_dump( json_encode( $customizer_json ) );

		$merged_settings                    = array_replace_recursive( (array) $user_theme_json_post_content, (array) $customizer_json );
		$user_theme_json_post->post_content = json_encode( $merged_settings );
		$result                             = wp_update_post( $user_theme_json_post );
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
		wp_register_style( 'customizer-style', false, array(), true, true );
		wp_enqueue_style( 'customizer-style' );
		wp_add_inline_style( 'customizer-style', $this->customizer_bridge_generate_custom_color_variables() );
	}

	/**
	 * Render the customized variables.
	 *
	 * NOTE: Ideally this wouldn't happen at all and instead the theme.json would be filtered
	 * and modified to reflect the users's choice.
	 */
	function customizer_bridge_generate_custom_color_variables( $context = null ) {

		$css_variables = 'body, #editor {';
		foreach ( $this->theme_customizations as $custom_section ) {
			foreach ( $custom_section->controls as $custom_option ) {
				$slug_value = get_theme_mod( 'customizer-bridge-' . $custom_option->slug );
				if ( $slug_value ) {
					$css_variables = $css_variables . '--wp--custom--' . $custom_option->slug . ':' . $slug_value . ';';
				}
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
		$setting_key           = 'customizer-bridge-' . $custom_option->slug;
		$global_styles_setting = new WP_Customize_Global_Styles_Setting(
			$wp_customize,
			$setting_key,
			array(
				'default'           => esc_html( $custom_option->default ),
				'sanitize_callback' => 'sanitize_hex_color',
				'slug'              => $custom_option->slug,
			)
		);

		$wp_customize->add_setting( $global_styles_setting );

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

if ( class_exists( 'WP_Customize_Setting' ) ) {
	/**
	 * Customize API: WP_Customize_Global_Styles_Setting class
	 *
	 * This handles validation, sanitization and saving of the value.
	 *
	 * @package WordPress
	 * @subpackage Customize
	 * @since 4.7.0
	 */

	/**
	 * Custom Setting to handle WP Global_Styles.
	 *
	 * @since 4.7.0
	 *
	 * @see WP_Customize_Setting
	 */
	final class WP_Customize_Global_Styles_Setting extends WP_Customize_Setting {

		/**
		 * The setting type.
		 *
		 * @since 4.7.0
		 * @var string
		 */
		public $type = 'global_styles';

		/**
		 * Setting Transport
		 *
		 * @since 4.7.0
		 * @var string
		 */
		public $transport = 'refresh'; // This is the default

		/**
		 * Capability required to edit this setting.
		 *
		 * @since 4.7.0
		 * @var string
		 */
		public $capability = 'edit_css';

		/**
		 * Slug
		 *
		 * @var string
		 */
		public $slug = '';

		/**
		 * WP_Customize_Global_Styles_Setting constructor.
		 *
		 * @since 4.7.0
		 *
		 * @throws Exception If the setting ID does not match the pattern `custom_css[$stylesheet]`.
		 *
		 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
		 * @param string               $id      A specific ID of the setting.
		 *                                      Can be a theme mod or option name.
		 * @param array                $args    Setting arguments.
		 */
		public function __construct( $manager, $id, $args = array() ) {
			parent::__construct( $manager, $id, $args );
			/*if ( 'customizer-bridge-foreground' !== $this->id_data['base'] ) {
			throw new Exception( 'Expected customizer-bridge-foreground id_base.' );
			}
			if ( 1 !== count( $this->id_data['keys'] ) || empty( $this->id_data['keys'][0] ) ) {
			throw new Exception( 'Expected customizer-bridge-foreground key.' );
			}
			$this->stylesheet = $this->id_data['keys'][0];*/
		}

		/**
		 * Add filter to preview post value.
		 *
		 * @since 4.7.9
		 *
		 * @return bool False when preview short-circuits due no change needing to be previewed.
		 */
		public function preview() {
			if ( $this->is_previewed ) {
				return false;
			}
			$this->is_previewed = true;
			return true;
		}

		/**
		 * Fetch the value of the setting. Will return the previewed value when `preview()` is called.
		 *
		 * @since 4.7.0
		 *
		 * @see WP_Customize_Setting::value()
		 *
		 * @return string
		 */
		public function value() {
			if ( $this->is_previewed ) {
				$post_value = $this->post_value( null );
				if ( null !== $post_value ) {
					return $post_value;
				}
			}
			$id_base = $this->id_data['base'];
			$value   = '';

			$user_custom_post_type_id = WP_Theme_JSON_Resolver::get_user_custom_post_type_id();
			$user_theme_json_post     = get_post( $user_custom_post_type_id );

			if ( $user_theme_json_post ) {
				$post_content = $user_theme_json_post->post_content;
			}
			if ( empty( $post_content ) ) {
				$value = $this->default;
			}

			$post_json = json_decode( $post_content );
			$value     = $post_json->styles->color->{$this->slug};

			/** This filter is documented in wp-includes/class-wp-customize-setting.php */
			$value = apply_filters( "customize_value_{$id_base}", $value, $this );

			return $value;
		}

		/**
		 * Store the color in the Global Styles custom post
		 *
		 * @since 4.7.0
		 *
		 * @param string $color The input color.
		 * @return int|false The post ID or false if the value could not be saved.
		 */
		public function update( $color ) {
			if ( empty( $color ) ) {
				$color = '';
			}

			$user_custom_post_type_id                                   = WP_Theme_JSON_Resolver::get_user_custom_post_type_id();
			$user_theme_json_post                                       = get_post( $user_custom_post_type_id );
			$user_theme_json_post_content                               = json_decode( $user_theme_json_post->post_content );
			$user_theme_json_post_content->styles->color->{$this->slug} = $color;

			$user_theme_json_post->post_content = json_encode( $user_theme_json_post_content );
			$result                             = wp_update_post( $user_theme_json_post );

			if ( $r instanceof WP_Error ) {
				return false;
			}

			return $r->ID;
		}
	}
}
