<?php
require get_template_directory() . '/inc/wpcomcolors-rules.php.php';

/**
 * Featured Varia Palettes
 */
// Light
add_color_palette( array(
	'#FFFFFF',
	'#1D1E1E',
	'#C8133E',
	'#4E2F4B',
), 'Light' );
// Medium
add_color_palette( array(
	'#EEF4F7',
	'#242527',
	'#35845D',
	'#233252',
), 'Medium' );
// Dark
add_color_palette( array(
	'#1F2527',
	'#FFFFFF',
	'#9FD3E8',
	'#FBE6AA',
), 'Dark' );

varia_define_color_annotations(
	array(
		'background' => '#FFFFFF', //bg
		'foreground' => '#444444', //txt
		'primary'    => '#0000ff', //link
		'secondary'  => '#ff0000', //fg1
	)
);
