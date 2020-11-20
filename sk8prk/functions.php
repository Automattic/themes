<?php

if ( ! function_exists( 'sk8prk_support' ) ) :
	function sk8prk_support()  {

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array(
			'style.css',
			sk8prk_google_fonts_url()
		) );
    }
    add_action( 'after_setup_theme', 'sk8prk_support' );
endif;

/**
 * Register Google Fonts
 */
function sk8prk_google_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Red Hat Display, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$red_hat_display = esc_html_x( 'on', 'Red Hat Display font: on or off', 'sk8prk' );

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Red Hat Text, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$red_hat_text = esc_html_x( 'on', 'Red Hat Text font: on or off', 'sk8prk' );

	if ( 'off' !== $red_hat_display || 'off' !== $red_hat_text ) {
		$font_families = array();

		if ( 'off' !== $red_hat_display ) {
			$font_families[] = 'Red Hat Display:400,400italic,700,700italic,900,900italic';
		}

		if ( 'off' !== $red_hat_text ) {
			$font_families[] = 'Red Hat Text:400,400italic,700,700italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function sk8prk_scripts() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'sk8prk-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue alignments stylesheet.
	wp_enqueue_style( 'sk8prk-alignments-style', get_template_directory_uri() . '/assets/alignments-front.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue custom fonts.
	wp_enqueue_style( 'sk8prk-google-fonts', sk8prk_google_fonts_url() );
}
add_action( 'wp_enqueue_scripts', 'sk8prk_scripts' );

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
    function sk8prk_register_block_styles() {
		
		/**
		** Register stylesheet
		**/
		wp_register_style(
			'block-styles-stylesheet',
			get_template_directory_uri() . '/assets/block-styles.css',
			array(),
			'1.1'
		);

        /**
         * Register Separator block style
         */
        register_block_style(
            'core/separator',
            array(
                'name'         => 'thick-separator',
                'label'        => 'Thick',
                'style_handle' => 'block-styles-stylesheet',
            )
		);
		
		/**
         * Register Image block style
         */
        register_block_style(
            'core/image',
            array(
                'name'         => 'filter-effect',
                'label'        => 'Colored image',
                'style_handle' => 'block-styles-stylesheet',
            )
		);

		/**
		* Register Featured Image block style
		*/
	   	register_block_style(
		   'core/post-featured-image',
		   	array(
			   	'name'         => 'filter-effect',
			   	'label'        => 'Colored image',
			   	'style_handle' => 'block-styles-stylesheet',
		   	)
	   	);

		/**
		 * Register Featured Image block style
		 */
		register_block_style(
			'core/gallery',
			array(
				'name'         => 'filter-effect',
				'label'        => 'Colored image',
				'style_handle' => 'block-styles-stylesheet',
			)
		);
    }

    add_action( 'init', 'sk8prk_register_block_styles' );
}

/**
 * Block Patterns.
 */
require get_stylesheet_directory() . '/block-patterns.php';