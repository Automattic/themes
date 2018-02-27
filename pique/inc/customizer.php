<?php
/**
 * Pique Theme Customizer
 *
 * @package Pique
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pique_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/**
	 * Add the Theme Options section
	 */
	$wp_customize->add_panel( 'pique_options_panel', array(
		'title'          => __( 'Theme Options', 'pique' ),
		'description'    => __( 'Configure your theme settings', 'pique' ),
	) );

	// General settings
	$wp_customize->add_section( 'pique_general_settings', array(
		'title'           => esc_html__( 'Menu Settings', 'pique' ),
		'panel'           => 'pique_options_panel',
		'description'     => __( 'This replaces your custom menu&mdash;on the front page only&mdash;with an automatically-generated menu that links to each of your panels.', 'pique' ),
	) );

	$wp_customize->add_setting( 'pique_menu', array(
		'default'           => false,
		'sanitize_callback' => 'pique_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pique_menu', array(
		'label'   => esc_html__( 'Add an anchor menu to the front page.', 'pique' ),
		'section' => 'pique_general_settings',
		'type'    => 'checkbox',
	) );

	// Panel 1
	$wp_customize->add_section( 'pique_panel1', array(
		'title'           => esc_html__( 'Panel 1', 'pique' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'pique_options_panel',
		'description'     => __( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'pique' ),
	) );

	$wp_customize->add_setting( 'pique_panel1', array(
		'default'           => false,
		'sanitize_callback' => 'pique_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'pique_panel1', array(
		'label'   => esc_html__( 'Panel Content', 'pique' ),
		'section' => 'pique_panel1',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'pique_panel1_background', array(
		'default'           => 'default',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel1_background', array(
		'label'   => esc_html__( 'Background Color', 'pique' ),
		'section' => 'pique_panel1',
		'type'    => 'color',
	) );

	$wp_customize->add_setting( 'pique_panel1_opacity', array(
		'default'           => 'default',
		'sanitize_callback' => 'pique_sanitize_opacity',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel1_opacity', array(
		'label'       => esc_html__( 'Featured Image Opacity', 'pique' ),
		'section'     => 'pique_panel1',
		'type'        => 'select',
		'description' => esc_html( 'Set the opacity of the featured image over the panel background.', 'pique' ),
		'choices'     => array(
			'0.25' => esc_html__( '25%', 'pique' ),
			'0.5'  => esc_html__( '50%', 'pique' ),
			'0.75' => esc_html__( '75%', 'pique' ),
			'1'    => esc_html__( '100%', 'pique' ),

		),
	) );

	// Panel 2
	$wp_customize->add_section( 'pique_panel2', array(
		'title'           => esc_html__( 'Panel 2', 'pique' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'pique_options_panel',
		'description'     => __( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'pique' ),
	) );

	$wp_customize->add_setting( 'pique_panel2', array(
		'default'           => false,
		'sanitize_callback' => 'pique_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'pique_panel2', array(
		'label'   => esc_html__( 'Panel Content', 'pique' ),
		'section' => 'pique_panel2',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'pique_panel2_background', array(
		'default'           => 'default',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel2_background', array(
		'label'   => esc_html__( 'Background Color', 'pique' ),
		'section' => 'pique_panel2',
		'type'    => 'color',
	) );

	$wp_customize->add_setting( 'pique_panel2_opacity', array(
		'default'           => 'default',
		'sanitize_callback' => 'pique_sanitize_opacity',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel2_opacity', array(
		'label'       => esc_html__( 'Featured Image Opacity', 'pique' ),
		'section'     => 'pique_panel2',
		'type'        => 'select',
		'description' => esc_html( 'Set the opacity of the featured image over the panel background.', 'pique' ),
		'choices'     => array(
			'0.25' => esc_html__( '25%', 'pique' ),
			'0.5'  => esc_html__( '50%', 'pique' ),
			'0.75' => esc_html__( '75%', 'pique' ),
			'1'    => esc_html__( '100%', 'pique' ),

		),
	) );

	// Panel 3
	$wp_customize->add_section( 'pique_panel3', array(
		'title'           => esc_html__( 'Panel 3', 'pique' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'pique_options_panel',
		'description'     => __( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'pique' ),
	) );

	$wp_customize->add_setting( 'pique_panel3', array(
		'default'           => false,
		'sanitize_callback' => 'pique_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'pique_panel3', array(
		'label'   => esc_html__( 'Panel Content', 'pique' ),
		'section' => 'pique_panel3',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'pique_panel3_background', array(
		'default'           => 'default',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel3_background', array(
		'label'   => esc_html__( 'Background Color', 'pique' ),
		'section' => 'pique_panel3',
		'type'    => 'color',
	) );

	$wp_customize->add_setting( 'pique_panel3_opacity', array(
		'default'           => 'default',
		'sanitize_callback' => 'pique_sanitize_opacity',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel3_opacity', array(
		'label'       => esc_html__( 'Featured Image Opacity', 'pique' ),
		'section'     => 'pique_panel3',
		'type'        => 'select',
		'description' => esc_html( 'Set the opacity of the featured image over the panel background.', 'pique' ),
		'choices'     => array(
			'0.25' => esc_html__( '25%', 'pique' ),
			'0.5'  => esc_html__( '50%', 'pique' ),
			'0.75' => esc_html__( '75%', 'pique' ),
			'1'    => esc_html__( '100%', 'pique' ),

		),
	) );

	// Panel 4
	$wp_customize->add_section( 'pique_panel4', array(
		'title'           => esc_html__( 'Panel 4', 'pique' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'pique_options_panel',
		'description'     => __( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'pique' ),
	) );

	$wp_customize->add_setting( 'pique_panel4', array(
		'default'           => false,
		'sanitize_callback' => 'pique_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'pique_panel4', array(
		'label'   => esc_html__( 'Panel Content', 'pique' ),
		'section' => 'pique_panel4',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'pique_panel4_background', array(
		'default'           => 'default',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel4_background', array(
		'label'   => esc_html__( 'Background Color', 'pique' ),
		'section' => 'pique_panel4',
		'type'    => 'color',
	) );

	$wp_customize->add_setting( 'pique_panel4_opacity', array(
		'default'           => 'default',
		'sanitize_callback' => 'pique_sanitize_opacity',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel4_opacity', array(
		'label'       => esc_html__( 'Featured Image Opacity', 'pique' ),
		'section'     => 'pique_panel4',
		'type'        => 'select',
		'description' => esc_html( 'Set the opacity of the featured image over the panel background.', 'pique' ),
		'choices'     => array(
			'0.25' => esc_html__( '25%', 'pique' ),
			'0.5'  => esc_html__( '50%', 'pique' ),
			'0.75' => esc_html__( '75%', 'pique' ),
			'1'    => esc_html__( '100%', 'pique' ),

		),
	) );

	// Panel 5
	$wp_customize->add_section( 'pique_panel5', array(
		'title'           => esc_html__( 'Panel 5', 'pique' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'pique_options_panel',
		'description'     => __( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'pique' ),
	) );

	$wp_customize->add_setting( 'pique_panel5', array(
		'default'           => false,
		'sanitize_callback' => 'pique_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'pique_panel5', array(
		'label'   => esc_html__( 'Panel Content', 'pique' ),
		'section' => 'pique_panel5',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'pique_panel5_background', array(
		'default'           => 'default',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel5_background', array(
		'label'   => esc_html__( 'Background Color', 'pique' ),
		'section' => 'pique_panel5',
		'type'    => 'color',
	) );

	$wp_customize->add_setting( 'pique_panel5_opacity', array(
		'default'           => 'default',
		'sanitize_callback' => 'pique_sanitize_opacity',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel5_opacity', array(
		'label'       => esc_html__( 'Featured Image Opacity', 'pique' ),
		'section'     => 'pique_panel5',
		'type'        => 'select',
		'description' => esc_html( 'Set the opacity of the featured image over the panel background.', 'pique' ),
		'choices'     => array(
			'0.25' => esc_html__( '25%', 'pique' ),
			'0.5'  => esc_html__( '50%', 'pique' ),
			'0.75' => esc_html__( '75%', 'pique' ),
			'1'    => esc_html__( '100%', 'pique' ),

		),
	) );

	// Panel 6
	$wp_customize->add_section( 'pique_panel6', array(
		'title'           => esc_html__( 'Panel 6', 'pique' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'pique_options_panel',
		'description'     => __( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'pique' ),
	) );

	$wp_customize->add_setting( 'pique_panel6', array(
		'default'           => false,
		'sanitize_callback' => 'pique_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'pique_panel6', array(
		'label'   => esc_html__( 'Panel Content', 'pique' ),
		'section' => 'pique_panel6',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'pique_panel6_background', array(
		'default'           => 'default',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel6_background', array(
		'label'   => esc_html__( 'Background Color', 'pique' ),
		'section' => 'pique_panel6',
		'type'    => 'color',
	) );

	$wp_customize->add_setting( 'pique_panel6_opacity', array(
		'default'           => 'default',
		'sanitize_callback' => 'pique_sanitize_opacity',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel6_opacity', array(
		'label'       => esc_html__( 'Featured Image Opacity', 'pique' ),
		'section'     => 'pique_panel6',
		'type'        => 'select',
		'description' => esc_html( 'Set the opacity of the featured image over the panel background.', 'pique' ),
		'choices'     => array(
			'0.25' => esc_html__( '25%', 'pique' ),
			'0.5'  => esc_html__( '50%', 'pique' ),
			'0.75' => esc_html__( '75%', 'pique' ),
			'1'    => esc_html__( '100%', 'pique' ),

		),
	) );

	// Panel 7
	$wp_customize->add_section( 'pique_panel7', array(
		'title'           => esc_html__( 'Panel 7', 'pique' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'pique_options_panel',
		'description'     => __( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'pique' ),
	) );

	$wp_customize->add_setting( 'pique_panel7', array(
		'default'           => false,
		'sanitize_callback' => 'pique_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'pique_panel7', array(
		'label'   => esc_html__( 'Panel Content', 'pique' ),
		'section' => 'pique_panel7',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'pique_panel7_background', array(
		'default'           => 'default',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel7_background', array(
		'label'   => esc_html__( 'Background Color', 'pique' ),
		'section' => 'pique_panel7',
		'type'    => 'color',
	) );

	$wp_customize->add_setting( 'pique_panel7_opacity', array(
		'default'           => 'default',
		'sanitize_callback' => 'pique_sanitize_opacity',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel7_opacity', array(
		'label'       => esc_html__( 'Featured Image Opacity', 'pique' ),
		'section'     => 'pique_panel7',
		'type'        => 'select',
		'description' => esc_html( 'Set the opacity of the featured image over the panel background.', 'pique' ),
		'choices'     => array(
			'0.25' => esc_html__( '25%', 'pique' ),
			'0.5'  => esc_html__( '50%', 'pique' ),
			'0.75' => esc_html__( '75%', 'pique' ),
			'1'    => esc_html__( '100%', 'pique' ),

		),
	) );

	// Panel 8
	$wp_customize->add_section( 'pique_panel8', array(
		'title'           => esc_html__( 'Panel 8', 'pique' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'pique_options_panel',
		'description'     => __( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'pique' ),
	) );

	$wp_customize->add_setting( 'pique_panel8', array(
		'default'           => false,
		'sanitize_callback' => 'pique_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'pique_panel8', array(
		'label'   => esc_html__( 'Panel Content', 'pique' ),
		'section' => 'pique_panel8',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'pique_panel8_background', array(
		'default'           => 'default',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel8_background', array(
		'label'   => esc_html__( 'Background Color', 'pique' ),
		'section' => 'pique_panel8',
		'type'    => 'color',
	) );

	$wp_customize->add_setting( 'pique_panel8_opacity', array(
		'default'           => 'default',
		'sanitize_callback' => 'pique_sanitize_opacity',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'pique_panel8_opacity', array(
		'label'       => esc_html__( 'Featured Image Opacity', 'pique' ),
		'section'     => 'pique_panel8',
		'type'        => 'select',
		'description' => esc_html( 'Set the opacity of the featured image over the panel background.', 'pique' ),
		'choices'     => array(
			'0.25' => esc_html__( '25%', 'pique' ),
			'0.5'  => esc_html__( '50%', 'pique' ),
			'0.75' => esc_html__( '75%', 'pique' ),
			'1'    => esc_html__( '100%', 'pique' ),

		),
	) );
}
add_action( 'customize_register', 'pique_customize_register' );

/**
 * Sanitize a numeric value
 */
function pique_sanitize_numeric_value( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	} else {
		return 0;
	}
}

/**
 * Sanitize a true/false checkbox
 */
function pique_sanitize_checkbox( $input ) {
	if ( ! in_array( $input, array( true, false ) ) ) {
		$input = false;
	}
	return $input;
}

/*
 * Sanitize our opacity values
 */
function pique_sanitize_opacity( $input ) {

	$choices = array( 'default', 0.25, 0.5, 0.75, 1 );

	if ( ! in_array( $input, $choices ) ) {
		$input = 'default';
	}

	return $input;
}

/*
 * Output our custom CSS to change background colour/opacity of panels.
 * Note: not very pretty, but it works.
 */
function pique_customizer_css() {
	?>
	<style type="text/css">
	<?php
	// Get each panel and iterate to output the proper CSS styles
	$panels = array( '1', '2', '3', '4', '5', '6', '7', '8' );
	foreach ( $panels as $panel ) :
		// Adjust the background colour if a custom colour is set
		if ( get_theme_mod( 'pique_panel' . $panel . '_background' ) ) : ?>
			.pique-frontpage .pique-panel.pique-panel<?php echo absint( $panel ); ?> {
				background-color:  <?php echo esc_attr( get_theme_mod( 'pique_panel' . $panel . '_background' ) ); ?>;
			}
		<?php endif;
		// Adjust the opacity of featured image if set
		if ( get_theme_mod( 'pique_panel' . $panel . '_opacity' ) ) : ?>
			.pique-frontpage .pique-panel.pique-panel<?php echo absint( $panel ); ?> .pique-panel-background {
				opacity:  <?php echo esc_attr( get_theme_mod( 'pique_panel' . $panel . '_opacity' ) ); ?>;
			}
		<?php endif;
	endforeach; ?>
	</style>
	<?php
}
add_action( 'wp_head', 'pique_customizer_css' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pique_customize_preview_js() {
	wp_enqueue_script( 'pique_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151117', true );
}
add_action( 'customize_preview_init', 'pique_customize_preview_js' );

function pique_panels_js() {
	wp_enqueue_script( 'pique_extra_js', get_template_directory_uri() . '/assets/js/panel-customizer.js', array(), '20151116', true );
}
add_action( 'customize_controls_enqueue_scripts', 'pique_panels_js' );
