<?php

require_once get_template_directory() . '/inc/wpcom-colors-utils.php';

seedlet_define_color_annotations(
	array(
		'background' => '#FFFFFF',
		'foreground' => '#000000',
		'primary'    => '#DB0042',
		'secondary'  => '#555555',
		'tertiary'   => '#FAFBF6',
	)
);


/**
 * Add a customizer message about dark mode.
 */
if ( ! function_exists( 'spearhead_wpcom_customize_update' ) ) :
	function spearhead_wpcom_customize_update( $wp_customize ) {
		$wp_customize->add_setting( 'color_darkmode_notice' );
		$wp_customize->add_control(
			'color_darkmode_notice',
			array(
				'id'          => 'darkmode_notice',
				'label'       => esc_html__( 'Dark Mode', 'spearhead' ),
				'description' => sprintf(
					__( "This theme will automatically display a dark color palette for users who have dark mode enabled on their devices. The preview here will only reflect the light mode. <a href='%s' target='_blank'>Learn more about dark mode</a>.", 'spearhead' ),
					esc_url( 'https://www.a11yproject.com/posts/2020-01-23-operating-system-and-browser-accessibility-display-modes/' )
				),
				'section'     => 'colors_manager_tool',
				'priority'    => 10, // Set to 10 so it appears near the top of the Colors & Backgrounds panel
				'type'        => 'hidden',
			)
		);
	}
	add_action( 'customize_register', 'spearhead_wpcom_customize_update' );
endif;
