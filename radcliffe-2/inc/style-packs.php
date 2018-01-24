<?php
/**
 * Style Packs configuration.
 *
 * @package Radcliffe 2
 */

new Style_Packs_Core( array(

	// Format to use for active style pack body class
	'body_class_format' => 'style-pack-%s',

	// Style packs directory
	'styles_directory' => 'styles',

	// Javascripts directory
	'js_directory' => 'assets/js',

	// Use thumbnails
	'style_thumbs' => array(
		'width'  => 285/2,
		'height' => 200/2,
	),

	// Style declarations
	'styles'  => array(
		'default'  => esc_html__( 'Radcliffe Perfect', 'radcliffe-2' ),
		'modern'   => esc_html__( 'Modern Bauhaus', 'radcliffe-2' ),
		'vintage'  => esc_html__( 'Vintage Paper', 'radcliffe-2' ),
		'colorful' => esc_html__( 'Upbeat Pop', 'radcliffe-2' ),
	),
	
	// Style descriptions
	'style_descriptions' => array(
		'default'  => esc_html__( 'A bright, versatile canvas, offering a crisp reading experience for visitors.', 'radcliffe-2' ),
		'modern'   => esc_html__( 'The power of minimalism, embodied in a clean black-and-white design.', 'radcliffe-2' ),
		'vintage'  => esc_html__( 'Timeless, simple elegance, with classic fonts and a touch of sepia.', 'radcliffe-2' ),
		'colorful' => esc_html__( 'For an extra layer of playfulness, from bold color palettes to a vibrant font.', 'radcliffe-2' ),
	),

	// Font loading for style packs
	'fonts' => array(
		'vintage' => array(
			'Libre Baskerville' => 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700',
		),
		'modern' => array(
			'Montserrat'      => 'https://fonts.googleapis.com/css?family=Montserrat:400,400italic,700,700italic',
			'Source Sans Pro' => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic',
		),
		'colorful' => array(
			'Karla'       => 'https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic',
			'Inconsolata' => 'https://fonts.googleapis.com/css?family=Inconsolata:400,700',
		),
	),

) );
