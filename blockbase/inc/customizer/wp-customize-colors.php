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
				'description' => '<div class="notice notice-info">
				<p>' . __( 'Color customization for this theme is now available exclusively in the Full Site Editor Global Styles panel.<br><br>Featured Palettes can now be found in the Full Site Editor as Theme Variations.', 'blockbase' ) . '</p>
				</div>',
				'settings'    => array(),
				'section'     => $this->section_key,
			)
		);

		$wp_customize->add_control(
			$this->section_key . '-site-editor-button',
			array(
				'type'        => 'hidden',
				'description' => sprintf( '<a class="button button-primary" href=%s style="font-style: normal;" >Use Site Editor</a>', esc_url( admin_url( 'site-editor.php?styles=open' ) ) ),
				'settings'    => array(),
				'section'     => $this->section_key,
			)
		);
	}

}

new GlobalStylesColorCustomizer;
