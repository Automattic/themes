<?php
/**
 * Seedlet Theme: Customizer
 *
 * @package Seedlet
 * @since 1.0.0
 */

if ( ! class_exists( 'Seedlet_Customize' ) ) {
	/**
	 * Customizer Settings.
	 *
	 * @since 1.0.0
	 */
	class Seedlet_Customize {

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

			// Change site-title & description to postMessage.
			$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

			// Add partial for blogname.
			$wp_customize->selective_refresh->add_partial(
				'blogname',
				array(
					'selector'        => '.site-title',
					'render_callback' => array( $this, 'partial_blogname' ),
				)
			);

			// Add partial for blogdescription.
			$wp_customize->selective_refresh->add_partial(
				'blogdescription',
				array(
					'selector'        => '.site-description',
					'render_callback' => array( $this, 'partial_blogdescription' ),
				)
			);

			/**
			 * Add excerpt or full text selector to customizer
			 */
			$wp_customize->add_section(
				'excerpt_settings',
				array(
					'title'    => esc_html__( 'Excerpt Settings', 'seedlet' ),
					'priority' => 120,
				)
			);

			$wp_customize->add_setting(
				'index_display_excerpt_or_full_post',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => 'full',
					'sanitize_callback' => function( $value ) {
						return 'excerpt' === $value || 'full' === $value ? $value : 'excerpt';
					},
				)
			);

			$wp_customize->add_setting(
				'archive_display_excerpt_or_full_post',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => 'full',
					'sanitize_callback' => function( $value ) {
						return 'excerpt' === $value || 'full' === $value ? $value : 'excerpt';
					},
				)
			);

			$wp_customize->add_control(
				'index_display_excerpt_or_full_post',
				array(
					'type'    => 'radio',
					'section' => 'excerpt_settings',
					'label'   => esc_html__( 'On the home page, posts show:', 'seedlet' ),
					'choices' => array(
						'excerpt' => esc_html__( 'Summary', 'seedlet' ),
						'full'    => esc_html__( 'Full text', 'seedlet' ),
					),
				)
			);

			$wp_customize->add_control(
				'archive_display_excerpt_or_full_post',
				array(
					'type'    => 'radio',
					'section' => 'excerpt_settings',
					'label'   => esc_html__( 'On archive pages, posts show:', 'seedlet' ),
					'choices' => array(
						'excerpt' => esc_html__( 'Summary', 'seedlet' ),
						'full'    => esc_html__( 'Full text', 'seedlet' ),
					),
				)
			);
		}

		/**
		 * Render the site title for the selective refresh partial.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		public function partial_blogname() {
			bloginfo( 'name' );
		}

		/**
		 * Render the site tagline for the selective refresh partial.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		public function partial_blogdescription() {
			bloginfo( 'description' );
		}
	}

	new Seedlet_Customize();
}
