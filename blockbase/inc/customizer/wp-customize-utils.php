<?php

function set_settings_array( $target, $array, $value ) {
	$key     = array_shift( $array );
	$current =& $target;
	while ( 0 < sizeof( $array ) ) {
		if ( ! array_key_exists( $key, $current ) ) {
			$current->{ $key } = (object) array();
		}
		$current =& $current->{ $key };
		$key     = array_shift( $array );
	}
	$current->{ $key } = $value;
	return $target;
}
