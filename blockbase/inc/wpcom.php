<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Blockbase
 */

/**
 * Restores the Customizer since we still rely on it.
 * (For WPcom REST API requests to work properly.)
 */
add_action( 'restapi_theme_init', 'blockbase_restore_customizer', 11 );
