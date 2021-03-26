<?php
$child_theme_name           = $argv[1];
$parent_theme_json_file     = file_get_contents( 'experimental-theme.json' );
$child_theme_json_file_name = '../' . $child_theme_name . '/child-theme.json';

if ( ! is_readable( $child_theme_json_file_name ) ) {
	print( "\x1b[41m" );
	echo $child_theme_name . "/child-theme.json not found.\n";
	print( "\x1b[0m" );
	return;
}

$child_theme_json_file = file_get_contents( $child_theme_json_file_name );
$parent_theme_json     = json_decode( $parent_theme_json_file, true );
$child_theme_json      = json_decode( $child_theme_json_file, true );
$merged_theme_json     = array_replace_recursive( $parent_theme_json, $child_theme_json );
$result                = file_put_contents( '../' . $child_theme_name . '/experimental-theme.json', json_encode( $merged_theme_json ) );

if ( $result ) {
	print( "\x1b[42m" );
	echo $child_theme_name . "/experimental-theme.json was generated successfully.\n";
	print( "\x1b[0m" );
}
