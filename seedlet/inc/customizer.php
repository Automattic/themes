<?php
/**
 * Seedlet Theme: Customizer
 *
 * @package WordPress
 * @subpackage Seedlet
 * @since 1.0.0
 */

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function seedlet_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function seedlet_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
