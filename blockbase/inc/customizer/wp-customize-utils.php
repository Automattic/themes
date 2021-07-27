<?php

/**
 *
 * Assign a value to an object at the given location.  Create the nested objects if they aren't already available.
 *
 * @param   object  $target The object to assign the value to
 * @param   array   $array  The array describing the location of the property to update
 * @return      object  $value  The value to assign
 * @return  object      The modified $target object with $value assigned where $array describes
 *
 */
function set_settings_array( $target, $array, $value ) {
	$key     = array_shift( $array );
	$current =& $target;
	while ( 0 < sizeof( $array ) ) {
		if ( ! property_exists( $current, $key ) ) {
			$current->{ $key } = (object) array();
		}
		$current =& $current->{ $key };
		$key     = array_shift( $array );
	}
	$current->{ $key } = $value;
	return $target;
}
