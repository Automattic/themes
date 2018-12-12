/**
 * File block-variations.js
 *
 * Adds block variation options for blocks in the new editor.
 *
 */

// Image Block - Since this block doesn't have core block variations, add a 'default' so the "fancy" option can be turned off.

wp.blocks.registerBlockStyle( 'core/image', {
	isDefault: true,
	label: 'Default'
} );

// Image Block - Add a 'fancy' class, to match theme's existing "framed" style.

wp.blocks.registerBlockStyle( 'core/image', {
	name: 'fancy', // Class will be turned into '.is-style-fancy'
	label: 'Fancy'
} );



