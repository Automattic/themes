<?php

/**
 *
 * Get a value from an object at the given location.
 *
 * @param   array   $array  The array describing the location of the property to update.
 * @param   object  $object The object.
 * @return  object          The value at the location.
 *
 */
function get_settings_array( $array, $object ) {
	foreach ( $array as $property ) {
		$object = $object[ $property ];
	}

	return $object;
}
