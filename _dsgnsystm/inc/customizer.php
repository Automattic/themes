<?php
/**
 * _Dsgnsystm: Customizer
 *
 * @package WordPress
 * @subpackage _Dsgnsystm
 * @since 1.0.0
 */

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function _dsgnsystm_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function _dsgnsystm_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
