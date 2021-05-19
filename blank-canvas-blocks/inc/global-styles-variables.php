<?php

if ( function_exists( 'gutenberg_get_default_block_editor_settings' ) && class_exists( 'WP_Theme_JSON_Resolver' ) ) {
	function global_styles_variables() {
		$settings   = gutenberg_get_default_block_editor_settings();
		$all        = WP_Theme_JSON_Resolver::get_merged_data( $settings );
		$theme_json = $all->get_raw_data();
		$stylesheet = 'body{';
		foreach ( $theme_json['styles']['color'] as $key => $value ) {
			$stylesheet .= '--wp--style--color--' . $key . ': ' . $value . ';';
		}
		$stylesheet .= '}';

		wp_register_style( 'global-styles-variables', false, array( 'global-styles' ), true, true );
		wp_add_inline_style( 'global-styles-variables', $stylesheet );
		wp_enqueue_style( 'global-styles-variables' );
	}

	add_action( 'wp_enqueue_scripts', 'global_styles_variables' );
}
