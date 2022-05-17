<?php

require_once( __DIR__ . '/wp-customize-global-styles-setting.php' );
require_once( __DIR__ . '/wp-customize-utils.php' );

add_action( 'init', 'migrate_blockbase_custom_fonts' );

function migrate_blockbase_custom_fonts() {
	// The data has already been transformed
	if ( get_option( 'blockbase_legacy_font_settings' ) ) {
		return;
	}

	$font_settings = wp_get_global_settings( array( 'typography', 'fontFamilies' ) );

	// No Customizer font settings found. Mark as transformed and hide the Customizer UI for fonts.
	if ( ! isset( $font_settings['custom'] ) || ! is_array( $font_settings['custom'] ) ) {
		add_option( 'blockbase_legacy_font_settings', '[]' );
		return;
	}

	// Extract font slugs from legacy data structure
	$heading_font_slug = '';
	$body_font_slug    = '';
	foreach ( $font_settings['custom'] as $font_setting ) {
		if ( strpos( $font_setting['slug'], 'heading' ) !== false ) {
			$heading_font_slug = $font_setting['fontSlug'];
		}

		if ( strpos( $font_setting['slug'], 'body' ) !== false ) {
			$body_font_slug = $font_setting['fontSlug'];
		}
	}

	// Get the user's global styles CPT id
	$user_custom_post_type_id       = WP_Theme_JSON_Resolver::get_user_global_styles_post_id();
	$global_styles_controller       = new WP_REST_Global_Styles_Controller();
	$global_styles                  = fetch_global_styles( $user_custom_post_type_id, $global_styles_controller );
	$blockbase_legacy_font_settings = $global_styles->data['settings']['typography']['fontFamilies']['custom'];

	// converts data to array (in some cases settings and styles are objects insted of arrays)
	$new_settings = (array) $global_styles->data['settings'];
	$new_styles   = (array) $global_styles->data['styles'];

	// Set new typography settings
	if ( isset( $new_settings['typography']['fontFamilies'] ) ) {
		unset( $new_settings['typography']['fontFamilies'] ); // TODO: Reconsider the depth of property we're unsetting
	}

	if ( $body_font_slug ) {
		$new_styles = array_merge(
			$new_styles,
			array(
				'typography' => array(
					'fontFamily' => "var:preset|font-family|$body_font_slug",
				),
			)
		);
	}

	if ( $heading_font_slug ) {
		$new_styles = array_merge(
			$new_styles,
			array(
				'blocks' => array(
					'core/post-title' => array(
						'typography' => array(
							'fontFamily' => "var:preset|font-family|$heading_font_slug",
						),
					),
					'core/heading'    => array(
						'typography' => array(
							'fontFamily' => "var:preset|font-family|$heading_font_slug",
						),
					),
				),
			)
		);
	}

	update_global_styles( $new_settings, $new_styles, $user_custom_post_type_id, $global_styles_controller );

	update_option( 'blockbase_legacy_font_settings', json_encode( $blockbase_legacy_font_settings ) );
}

/**
 * Updates the global styles CPT.
 *
 * @param array  $new_settings New global styles to update.
 * @param array  $new_styles New global styles settings to update.
 * @param int    $user_custom_post_type_id ID of global styles CPT.
 * @param object $global_styles_controller Controller that handles REST requests for global styles.
 *
 * @return void
 */
function update_global_styles( $new_settings, $new_styles, $user_custom_post_type_id, $global_styles_controller ) {
	$update_request = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' );
	$update_request->set_param( 'id', $user_custom_post_type_id );
	$update_request->set_param( 'settings', $new_settings );
	$update_request->set_param( 'styles', $new_styles );

	$global_styles_controller->update_item( $update_request );
	delete_transient( 'global_styles' );
	delete_transient( 'global_styles_' . get_stylesheet() );
	delete_transient( 'gutenberg_global_styles' );
	delete_transient( 'gutenberg_global_styles_' . get_stylesheet() );
}

/**
 * Retrieves the global styles cpt.
 *
 * @param int    $user_custom_post_type_id ID of global styles CPT.
 * @param object $global_styles_controller Controller that handles REST requests for global styles.
 *
 * @return array
 */
function fetch_global_styles( $user_custom_post_type_id, $global_styles_controller ) {
	$get_request = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' );
	$get_request->set_param( 'id', $user_custom_post_type_id );
	$global_styles = $global_styles_controller->get_item( $get_request );

	return $global_styles;
}

// ---------

class GlobalStylesFontsCustomizer {

	private $section_key = 'customize-global-styles-fonts';

	function __construct() {
		add_action( 'customize_register', array( $this, 'init_deprecation_notice' ) );
	}

	function generate_deprecation_message() {
		if ( ! defined( 'GUTENBERG_VERSION' ) || version_compare( GUTENBERG_VERSION, '13.2', '<=' ) ) {
			return __( 'Please activate or update Gutenberg to use the custom fonts feature.', 'blockbase' );
		}
		
		return sprintf(
			__( 'Updating fonts for this theme is now even easier! Use the site editor to select and preview different font families. <a href="%s">More information.</a>', 'blockbase' ),
			__('https://wordpress.com/support/custom-fonts/')
		);
	}

	function init_deprecation_notice( $wp_customize ) {
		$wp_customize->add_section(
			$this->section_key,
			array(
				'capability'  => 'edit_theme_options',
				'title'       => __( 'Fonts', 'blockbase' ),
			)
		);

		$wp_customize->add_control(
			$this->section_key . '-v1-blockbase-font-deprecation-notice',
			array(
				'type'        => 'hidden',
				'description' => '<div class="notice notice-info">
				<p>' . $this->generate_deprecation_message() . '</p>
				</div>',
				'settings'    => array(),
				'section'     => $this->section_key,
			)
		);

		$wp_customize->add_control(
			$this->section_key . '-site-editor-button',
			array(
				'type'        => 'hidden',
				'description' => sprintf( '<a class="button button-primary" href=%s style="font-style: normal;" >Use Site Editor</a>', esc_url( admin_url( 'site-editor.php' ) ) ),
				'settings'    => array(),
				'section'     => $this->section_key,
			)
		);
	}
}

new GlobalStylesFontsCustomizer;
