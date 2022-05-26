<?php

class GlobalStylesColorCustomizer {

	private $section_key = 'customize-global-styles-colors';

	function __construct() {
		add_action( 'customize_register', array( $this, 'initialize' ) );
	}

	function initialize( $wp_customize ) {
		$theme = wp_get_theme();
		$wp_customize->add_section(
			$this->section_key,
			array(
				'capability'  => 'edit_theme_options',
				'description' => sprintf( __( 'Color Customization for %1$s', 'blockbase' ), $theme->name ),
				'title'       => __( 'Colors', 'blockbase' ),
			)
		);

		$wp_customize->add_control(
			$this->section_key . '-migration-notice',
			array(
				'type'        => 'hidden',
				'description' => '<div class="notice notice-warning">
				<p>' . __( 'Color customization is now available exclusively in the Full Site Editor Global Styles panel.  (Colors>Palette>⋮>Edit Colors) <br><br>Featured Palettes can now be found in the Full Site Editor as Theme Variations. (Browse Styles)', 'blockbase' ) . '</p>
				</div>',
				'settings'    => array(),
				'section'     => $this->section_key,
			)
		);
	}

}

new GlobalStylesColorCustomizer;
