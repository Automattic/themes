<?php
/* Custom Editor Colors: Varia */

// Background Color (White)
// $config-global--color-background-default
add_color_rule( 'bg', '#ffffff', array(

	// Background-color
	array( '#editor .editor-styles-wrapper', 'background-color' ),

), __( 'Background Color' ) );

// Text Color (Gray)
// $config-global--color-foreground-default
add_color_rule( 'txt', '#444444', array(

	// Text-color
	// Needs contrast against `bg` with more contrast
	array( '#editor .editor-styles-wrapper', 'color', 'bg', 7 ),

), __( 'Forground Color' ) );