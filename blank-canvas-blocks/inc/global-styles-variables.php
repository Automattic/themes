<?php

if ( class_exists( 'WP_Theme_JSON_Resolver' ) ) {
	function global_styles_variables() {
		$theme_json = WP_Theme_JSON_Resolver::get_merged_data()->get_raw_data();
		$stylesheet = 'body{';
		if ( ! empty( $theme_json['styles']['color']['text'] ) ) {
			$stylesheet .= '--wp--style--color--text: ' . $theme_json['styles']['color']['text'] . '; ';
		}

		if ( ! empty( $theme_json['styles']['color']['background'] ) ) {
			$stylesheet .= '--wp--style--color--background: ' . $theme_json['styles']['color']['background'] . '; ';
		}

		if ( ! empty( $theme_json['styles']['border']['color'] ) ) {
			$stylesheet .= '--wp--style--border--color: ' . $theme_json['styles']['border']['color'] . '; ';
		}

		if ( ! empty( $theme_json['styles']['elements']['link']['color']['text'] ) ) {
			$stylesheet .= '--wp--style--link--color: ' . $theme_json['styles']['elements']['link']['color']['text'] . '; ';
		}

		$stylesheet .= '}';

		wp_register_style( 'global-styles-variables', false, array( 'global-styles' ), true, true );
		wp_add_inline_style( 'global-styles-variables', $stylesheet );
		wp_enqueue_style( 'global-styles-variables' );
	}

	add_action( 'wp_enqueue_scripts', 'global_styles_variables' );
}
