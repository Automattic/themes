<?php
/**
 * Blank Canvas Theme: Customizer
 *
 * @package Blank Canvas
 * @since 1.0.0
 */

if ( ! class_exists( 'Blank_Canvas_Customize' ) ) {
	/**
	 * Customizer Settings.
	 *
	 * @since 1.0.0
	 */
	class Blank_Canvas_Customize {

		/**
		 * Constructor. Instantiate the object.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 */
		public function __construct() {
			add_action( 'customize_register', array( $this, 'register' ) );
		}

		/**
		 * Register customizer options.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 *
		 * @return void
		 */
		public function register( $wp_customize ) {

			// Add Content section.
			$wp_customize->add_section(
				'jetpack_content_options',
				array(
					'title'    => esc_html__( 'Content Options', 'blank-canvas' ),
					'priority' => 100,
				)
			);

			// Add setting to show the site header.
			$wp_customize->add_setting(
				'show_site_header',
				array(
					'default'           => false,
					'type'              => 'theme_mod',
					'transport'         => 'refresh',
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			// Add control to show the site header.
			$wp_customize->add_control(
				'show_site_header',
				array(
					'label'       => esc_html__( 'Enable site header and top menu', 'blank-canvas' ),
					'description' => esc_html__( 'Check to show a standard site header, navigation menu and social links menu on the top of every page. These can be configured in the "Site Identity" and "Menus" panels.', 'blank-canvas' ),
					'section'     => 'jetpack_content_options',
					'priority'    => 10,
					'type'        => 'checkbox',
					'settings'    => 'show_site_header',
				)
			);

			// Add setting to show the site footer.
			$wp_customize->add_setting(
				'show_site_footer',
				array(
					'default'           => false,
					'type'              => 'theme_mod',
					'transport'         => 'refresh',
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			// Add control to show the site footer.
			$wp_customize->add_control(
				'show_site_footer',
				array(
					'label'       => esc_html__( 'Enable widgets and footer menu', 'blank-canvas' ),
					'description' => esc_html__( "Check to show a navigation menu and widgets in your site's footer area.", 'blank-canvas' ),
					'section'     => 'jetpack_content_options',
					'priority'    => 10,
					'type'        => 'checkbox',
					'settings'    => 'show_site_footer',
				)
			);

			// Add setting to show post and page titles.
			$wp_customize->add_setting(
				'show_post_and_page_titles',
				array(
					'default'           => false,
					'type'              => 'theme_mod',
					'transport'         => 'refresh',
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			// Add control to show post and page titles.
			$wp_customize->add_control(
				'show_post_and_page_titles',
				array(
					'label'       => esc_html__( 'Show post and page titles', 'blank-canvas' ),
					'description' => esc_html__( 'Check to show titles at the top of single posts and pages.', 'blank-canvas' ),
					'section'     => 'jetpack_content_options',
					'priority'    => 10,
					'type'        => 'checkbox',
					'settings'    => 'show_post_and_page_titles',
				)
			);
			
			// Add setting to show the comments
			$wp_customize->add_setting(
				'show_comments',
				array(
					'default'           => false,
					'type'              => 'theme_mod',
					'transport'         => 'refresh',
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			// Add control to show the comments.
			$wp_customize->add_control(
				'show_comments',
				array(
					'label'       => esc_html__( 'Make comments visible', 'blank-canvas' ),
					'description' => esc_html__( 'Check to show comments underneath posts and pages. Comments can be configured in your site’s Discussion settings screen.', 'blank-canvas' ),
					'section'     => 'jetpack_content_options',
					'priority'    => 10,
					'type'        => 'checkbox',
					'settings'    => 'show_comments',
				)
			);
		}

		/**
		 * Sanitize boolean for checkbox.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @param bool $checked Whether or not a box is checked.
		 *
		 * @return bool
		 */
		public static function sanitize_checkbox( $checked = null ) {
			return (bool) isset( $checked ) && true === $checked;
		}
	}

	new Blank_Canvas_Customize();
}
