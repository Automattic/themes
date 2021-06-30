<?php

require_once get_stylesheet_directory() . '/i18n-strings.php';
/**
 * Plugin Name:       I18N Strings
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       i18n-strings
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function create_block_i18n_strings_block_init() {
	register_block_type_from_metadata(
		__DIR__,
		array(
			'render_callback' => 'render_block_i18n_strings',
		)
	);
}

function render_block_i18n_strings( $attributes ) {
	if ( I18N_STRINGS && ! empty ( I18N_STRINGS[ $attributes['string'] ] ) ) {
		return I18N_STRINGS[ $attributes['string'] ];
	};

	return $attributes['string'];
}

add_action( 'init', 'create_block_i18n_strings_block_init' );
