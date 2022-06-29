<?php
class GlobalStylesFontsCustomizer {

	private $section_key = 'customize-global-styles-fonts';

	function __construct() {
		add_action( 'customize_register', array( $this, 'init_deprecation_notice' ) );
	}

	function generate_deprecation_message() {
		return sprintf(
			__( 'Updating fonts for this theme is now even easier! Use the site editor to select and preview different font families. <a href="%s">More information.</a>', 'blockbase' ),
			__( 'https://wordpress.com/support/custom-fonts/' )
		);
	}

	function init_deprecation_notice( $wp_customize ) {
		$wp_customize->add_section(
			$this->section_key,
			array(
				'capability' => 'edit_theme_options',
				'title'      => __( 'Fonts', 'blockbase' ),
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
				'description' => sprintf( '<a class="button button-primary" href=%s style="font-style: normal;" >Use Site Editor</a>', esc_url( admin_url( 'site-editor.php?styles=open' ) ) ),
				'settings'    => array(),
				'section'     => $this->section_key,
			)
		);
	}
}

new GlobalStylesFontsCustomizer;
