<?php

require_once get_stylesheet_directory() . '/i18n-strings.php';

/**
 * Registers the block using the metadata loaded from the `block.json` file.
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
