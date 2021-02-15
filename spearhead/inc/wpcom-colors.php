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
		$wpcom_colors_array = get_theme_mod( 'colors_manager' );

		$default_palette = array(
			'bg'   => '#ffffff',
			'txt'  => '#000000',
			'link' => '#db0042',
			'fg1'  => '#555555',
			'fg2'  => '#fafbf6',
		);

		if ( $default_palette === $wpcom_colors_array['colors'] ) :
			$wp_customize->add_setting( 'color_darkmode_notice' );
			$wp_customize->add_control(
				'color_darkmode_notice',
				array(
					'id'          => 'darkmode_notice',
					'label'       => esc_html__( 'Dark Mode', 'spearhead' ),
					'description' => sprintf(
						/* translators: %s: link to how to support system display modes */
						__( "This theme's default palette will display a dark color palette automatically for users who have dark mode enabled on their devices. <a href='%s' target='_blank'>Learn more about dark mode</a>.", 'spearhead' ),
						esc_url( 'https://www.a11yproject.com/posts/2020-01-23-operating-system-and-browser-accessibility-display-modes/' )
					),
					'section'     => 'colors_manager_tool',
					'priority'    => 10, // Set to 10 so it appears near the top of the Colors & Backgrounds panel
					'type'        => 'hidden',
				)
			);
		endif;
	}
	add_action( 'customize_register', 'spearhead_wpcom_customize_update' );
endif;
