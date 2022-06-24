<?php

$family = $argv[1];

// mkdir( './' . $family );

// file_put_contents(  './' . $family . '/font-face-source.css', fopen( 'https://fonts.googleapis.com/css2?family='.$family.':ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', 'r' ) );

$contents = file_get_contents( './' . $family . '/font-face-source.css' );
$modified_contents = $contents;
$matches;
$typefaces_to_download = Array();

$weight_conversion = array(
	'100' => 'Thin',
	'200' => 'ExtraLight',
	'300' => 'Light',
	'400' => 'Regular',
	'500' => 'Medium',
	'600' => 'SemiBold',
	'700' => 'Bold',
	'800' => 'ExtraBold',
	'900' => 'Black',
);

preg_match_all( '/\/\*.*}/sU', $contents, $matches );

foreach( $matches[0] as $match ) {

	preg_match('/(?<=\/\* ).*(?= \*\/)/', $match, $language );
	if( $language[0] == 'latin' ) {
		$language = '';
	} else {
		$language = '-' . $language[0];
	}

	preg_match('/(?<=font-style: ).*(?=;)/', $match, $style);
	preg_match('/(?<=font-weight: ).*(?=;)/', $match, $weight);
	preg_match('/(?<=src: url\().*?(?=\))/', $match, $url);

	$url = $url[0];

	if ( array_key_exists( $weight[0], $weight_conversion ) ) {
		$weight = '-' . $weight_conversion[$weight[0]];
	} else {
		$weight = '-' . str_replace( ' ', '-', $weight[0] );
	}

	if($style[0] == 'normal' ) {
		$style = '';
	} else {
		$style = '-' . $style[0];
	}

	$new_filename = $family . $language . $weight . $style . '.woff2';

	$modified_contents = str_replace( $url, './' . $new_filename, $modified_contents);

	if ( ! array_key_exists( $url, $typefaces_to_download ) ) {
		$typefaces_to_download[$url] = './' . $family . '/' . $new_filename;
	}
	

}

file_put_contents( './' . $family . '/font-face.css', $modified_contents );

foreach( $typefaces_to_download as $url => $new_typeface_filename ) {
	file_put_contents(  $new_typeface_filename, fopen($url, 'r' ) );
}