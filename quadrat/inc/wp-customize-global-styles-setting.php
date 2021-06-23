<?php

if ( class_exists( 'WP_Customize_Setting' ) && ! class_exists( 'WP_Customize_Global_Styles_Setting' ) ) {
	/**
	 * Customize API: WP_Customize_Global_Styles_Setting class
	 *
	 * This handles saving and retrieving of the value.
	 *
	 */

	/**
	 * Custom Setting to handle WP Global_Styles.
	 *
	 * @see WP_Customize_Setting
	 */
	final class WP_Customize_Global_Styles_Setting extends WP_Customize_Setting {

		/**
		 * The setting type.
		 *
		 * @var string
		 */
		public $type = 'global_styles';

		/**
		 * Setting Transport
		 *
		 * @var string
		 */
		public $transport = 'postMessage';

		/**
		 * Slug
		 *
		 * @var string
		 */
		public $slug = '';

		/**
		 * WP_Customize_Global_Styles_Setting constructor.
		 *
		 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
		 * @param string               $id      A specific ID of the setting.
		 *                                      Can be a theme mod or option name.
		 * @param array                $args    Setting arguments.
		 */
		public function __construct( $manager, $id, $args = array() ) {
			parent::__construct( $manager, $id, $args );
			$this->print_empty_style_elements( $id );
		}

		/**
		 * Print Empty Color CSS
		 * This is used to update the preview
		 */
		public function print_empty_style_elements( $id ) {
			wp_register_style( $id, false, array( 'global-styles-variables' ), true, true ); // This needs to load after global_styles, hence the dependency
			wp_enqueue_style( $id );
			wp_add_inline_style( $id, ' ' ); // This has to have content otherwise nothing is output
		}

		/**
		 * Fetch the value of the setting.
		 *
		 * @see WP_Customize_Setting::value()
		 *
		 * @return string
		 */
		public function value() {
			$user_custom_post_type_id = WP_Theme_JSON_Resolver_Gutenberg::get_user_custom_post_type_id();
			$user_theme_json_post     = get_post( $user_custom_post_type_id );

			if ( $user_theme_json_post ) {
				$post_content = $user_theme_json_post->post_content;
			}

			if ( empty( $post_content ) ) {
				return $this->default;
			}

			$post_json = json_decode( $post_content );
			if ( ! property_exists( $post_json, 'styles' ) ) {
				return $this->default;
			}

			if ( ! property_exists( $post_json->styles, 'color' ) ) {
				return $this->default;
			}

			if ( ! property_exists( $post_json->styles->color, $this->slug ) ) {
				return $this->default;
			}

			$color_string = $post_json->styles->color->{$this->slug};
			return $this->get_color( $color_string );
		}

		// There is a similar but different version of this in customization.php
		function get_color( $color ) {
			$all        = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data();
			$theme_json = $all->get_raw_data();
			$palette    = $theme_json['settings']['color']['palette'];

			// Is this a HEX?
			if ( 0 === strpos( $color, '#' ) ) {
				// If so just return.
				return $color;
			}

			// Is this a variable?
			if ( 0 === strpos( $color, 'var:preset|color|' ) ) {
				// If so just return the palette
				$color_slug = preg_replace( '/var:preset\|color\|(.*)/', '$1', $color );
				$key        = array_search( $color_slug, array_column( $palette, 'slug' ), true );
				return $palette[ $key ]['color'];
			}
		}

		/**
		 * Store the color in the Global Styles custom post
		 *
		 * @param string $color The input color.
		 * @return WP_Post|WP_Error The post or a WP_Error if the value could not be saved.
		 */
		public function update( $color ) {
			if ( empty( $color ) ) {
				return;
			}

			// Get the user's theme.json from the CPT
			$user_custom_post_type_id     = WP_Theme_JSON_Resolver_Gutenberg::get_user_custom_post_type_id();
			$user_theme_json_post         = get_post( $user_custom_post_type_id );
			$user_theme_json_post_content = json_decode( $user_theme_json_post->post_content );

			// Upate the theme.json with the new color
			$user_theme_json_post_content->styles->color->{$this->slug} = $color;
			$user_theme_json_post->post_content                         = json_encode( $user_theme_json_post_content );

			return wp_update_post( $user_theme_json_post );
		}
	}
}
