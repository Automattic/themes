<?php

/*
Plugin Name: WordPress.com Theme Updates
Description: Update themes downloaded from WordPress.com seamlessly with the rest of your WordPress updates.
Author: Automattic
Version: 1.0
Author URI: http://automattic.com/
License: GPL v2 or later
Network: true

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Hooks to update themes from WordPress.com using the native WordPress upgrader
 * @package  WordPress.com Updater
 * @version  1.0
 */

if ( ! class_exists( 'WPCom_Theme_Updater') ) :

class WPCom_Theme_Updater {

	const VERSION = '1.0';
	const PLUGIN_SLUG = 'wordpresscom-theme-updates';

	/**
	 * Initialize the plugin by attaching the needed actions & filters.
	 * @return void
	 */
	public static function init() {
		add_filter( 'pre_set_site_transient_update_themes', array( __CLASS__, 'check_for_updates' ) );
		// only for MS users not running this as a plugin
		if ( is_multisite() && ! ( 0 === strpos( __FILE__, WP_PLUGIN_DIR ) || 0 === strpos( __FILE__, WPMU_PLUGIN_DIR ) ) ) {
			add_action( 'admin_notices', array( __CLASS__, 'maybe_nag_for_plugin' ) );
			add_action( 'wp_ajax_wpcom-theme-updates-hide-nag' , array( __CLASS__, 'hide_plugin_nag' ) );
		}
	}

	/**
	 * Fires after WordPress core checks for updates. Go through the list, find any
	 * WordPress.com themes, and check for updates on them as well.
	 * @param  object $update_data stdClass object containing theme update data
	 * @return object              A possibly modified object including relevant update data
	 */
	public static function check_for_updates( $update_data ) {
		if ( ! is_object( $update_data ) || ! property_exists( $update_data, 'checked' ) || ! is_array( $update_data->checked ) )
			return $update_data;
		$wpcom_themes_to_check = array_filter( array_keys( $update_data->checked ), array( __CLASS__, 'is_wpcom_slug' ) );
		if ( empty( $wpcom_themes_to_check ) )
			return $update_data;

		$request_data = array();
		foreach ( $wpcom_themes_to_check as $theme_to_check ) {
			$request_data[] = array(
				'theme'   => $theme_to_check,
				'version' => $update_data->checked[ $theme_to_check ]
			);
		}

		$user_agent = is_multisite() ? 'WordPress MS' : 'WordPress';
		$user_agent .= '/' . $GLOBALS['wp_version'] . '; ' . home_url();

		$options = array(
			'timeout'    => ( ( defined('DOING_CRON') && DOING_CRON ) ? 30 : 3 ),
			'body'       => json_encode( $request_data ),
			'user-agent' => $user_agent,
			'headers'    => array( 'Content-Type' => 'application/json' )
		);

		$raw_response = wp_remote_post( 'http://public-api.wordpress.com/rest/v1/themes/update-check', $options );

		// something went wrong. leave it alone.
		if ( 200 !== wp_remote_retrieve_response_code( $raw_response ) )
			return $update_data;

		$response_data = json_decode( wp_remote_retrieve_body( $raw_response ), true );

		if ( ! $response_data || ! is_array( $response_data ) || ! isset( $response_data['updates'] ) )
			return $update_data;

		$update_data->response = array_merge( $update_data->response, $response_data['updates'] );
		return $update_data;
	}

	/**
	 * Fire on admin_notices on a multisite network to try to get the updater plugin installed.
	 * Will show admin notices and email the site admin.
	 * Won't fire if this file is in a plugin directory.
	 * @return void
	 */
	public function maybe_nag_for_plugin() {
		// Show to super admins, email site admin when a non-super-admin views an admin page.
		if ( is_super_admin() )
			self::output_notice();
		else
			self::maybe_email_site_admin();
	}

	/**
	 * Admin-ajax callback for hiding the admin nag shown to super admins
	 * @return void
	 */
	public function hide_plugin_nag() {
		if ( isset( $_REQUEST['nonce'] ) && wp_verify_nonce( $_REQUEST['nonce'], 'wpcom-theme-updates-hide-nag' ) ) {
			self::set_option( 'hide_admin_nag', true );
		}
	}

	/**
	 * Emails the network site admin about installing the WP.com Theme Updater plugin. Will only email once.
	 * @return void
	 */
	public function maybe_email_site_admin() {
		if ( self::get_option( 'sent_email_nag' ) )
			return;

		$theme = wp_get_theme();
		$message = "The theme \"$theme->Name\" has recently been installed and activated on your Network.\n";
		$message .= 'To automatically receive updates for this WordPress.com theme, please install the WordPress.com Theme Updates plugin:' . "\n\n";
		$message .= 'http://wordpress.org/plugins/' . self::PLUGIN_SLUG . "\n\n";
		$message .= 'You will only receive this reminder once.';
		$subject = sprintf( '[%s] Theme Updates', get_site_option( 'site_name' ) );
		wp_mail( get_site_option( 'admin_email' ), $subject, $message );
		self::set_option( 'sent_email_nag', true );
	}

	/**
	 * Prints the admin notice for installing the WP.com Theme Updater plugin.
	 * @return void
	 */
	protected function output_notice() {
		if ( self::get_option( 'hide_admin_nag' ) )
			return;

		$theme = wp_get_theme();
		$install_url = wp_nonce_url( network_admin_url( 'update.php?action=install-plugin&plugin=' . self::PLUGIN_SLUG ), 'install-plugin_' . self::PLUGIN_SLUG );
		$message = sprintf(
			__( 'Thanks for installing %1$s from WordPress.com!<br/>To keep this theme up-to-date on your Multisite network, please <a href="%2$s">install the WordPress.com Theme Updates plugin</a> and Network Activate it.', 'wordpresscom-theme-updates' ),
			$theme->Name,
			esc_url( $install_url )
		);
		$hide = __( 'Don&lsquo;t show me this.', 'wordpresscom-theme-updates' );
		$message .= " <a href='#' id='wpcom-hide-nag' class='hide-if-no-js'>{$hide}</a>";
		?>
		<div class="updated" id="wpcom-nag"><p>
		<?php echo $message; ?>
		</p></div>
		<style>#wpcom-nag{overflow:hidden;}#wpcom-hide-nag{float:right;margin-left:1em;}</style>
		<script>
			jQuery && jQuery('#wpcom-hide-nag').on('click', function(e){
				e.preventDefault();
				jQuery.ajax( '<?php echo admin_url( 'admin-ajax.php' ) ?>', {
					data: {
						action: 'wpcom-theme-updates-hide-nag',
						nonce:  '<?php echo wp_create_nonce( 'wpcom-theme-updates-hide-nag' ) ?>'
					}
				} );
				jQuery( '#wpcom-nag' ).slideUp();
			});
		</script>
		<?php
	}

	/**
	 * Gets an option that is a member of our single site option.
	 * @param  string $key A member of our site option
	 * @return mixed       The key's value, false if not found.
	 */
	protected function get_option( $key ) {
		$opt = get_site_option( self::PLUGIN_SLUG, array(
			'hide_admin_nag' => false,
			'sent_email_nag' => false
		) );
		if ( isset( $opt[ $key ] ) )
			return $opt[ $key ];
		return false;
	}

	/**
	 * Set/update an option as a member of our single site option.
	 * @param string $key   The key to set on our site option
	 * @param string $value The value to set in $key
	 */
	protected function set_option( $key, $value ) {
		$opt = get_site_option( self::PLUGIN_SLUG, array(
			'hide_admin_nag' => false,
			'sent_email_nag' => false
		) );
		$opt[ $key ] = $value;
		update_site_option( self::PLUGIN_SLUG, $opt );
	}

	/**
	 * Checks if a theme slug is a WordPress.com slug. Looks for `-wpcom` suffix.
	 * @param  string  $slug WordPress theme id/slug
	 * @return boolean True if it is a WordPress.com theme slug
	 */
	public static function is_wpcom_slug( $slug ) {
		return preg_match( '/-wpcom$/', $slug );
	}

}

// Hook it up.
add_action( 'after_setup_theme', array( 'WPCom_Theme_Updater', 'init' ) );

endif; // if class_exists()