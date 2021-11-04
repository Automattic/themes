<?php
/**
 * Require Gutenberg
 *
 * @package WPThemes/Require-Gutenberg-FSE
 * https://github.com/WordPress/theme-experiments/tree/master/require-gutenberg
 *
 */

if ( ! class_exists( 'WPThemes_Require_Gutenberg' ) ) {

	/**
	 * Init Gutenberg requirement.
	 *
	 * @since 1.0.0
	 */
	class WPThemes_Require_Gutenberg {

		/**
		 * Add hooks for this class.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		public function run() {

			// Make sure we have the plugin-checking functions we need.
			if ( ! function_exists( 'is_plugin_active' ) ) {
				include_once ABSPATH . 'wp-admin/includes/plugin.php';
			}

			// Add the notice on wp admin.
			add_action( 'admin_notices', array( $this, 'admin_notice' ) );

			// Print scripts in the footer.
			add_action( 'admin_footer', array( $this, 'the_script' ) );

			// Print styles in the footer.
			add_action( 'admin_footer', array( $this, 'the_styles' ) );

			// Handle activating Gutenberg via AJAX.
			add_action( 'wp_ajax_wpthemes_require_gutenberg_activate_plugin', array( $this, 'activate_plugin' ) );

			// Add the notice on the frontend.
			add_action( 'wp_loaded', array( $this, 'frontend_notice' ) );

		}

		/**
		 * The admin notice.
		 *
		 * @access public
		 *
		 * @return void
		 */
		public function admin_notice() {

			// Figure out the current step we're on.
			$active_step = false;
			if ( ! $this->is_plugin_installed() ) {
				$active_step = 'install';
			} elseif ( ! $this->is_plugin_active() ) {
				$active_step = 'activate';
			}

			// Early exit if there's nothing to do.
			if ( ! $active_step ) {
				return;
			}
			?>
			<div class="notice notice-warning require-gutenberg-notice-wrapper notice-alt active-step-<?php echo esc_attr( $active_step ); ?>">
				<p><?php esc_html_e( 'This is an experimental theme and requires the Gutenberg plugin to be installed.', 'blockbase' ); ?></p>
				<div class="require-gutenberg require-gutenberg-install">
					<p><?php esc_html_e( 'The Gutenberg plugin is not installed. Click the button below to install it.', 'blockbase' ); ?></p>
					<p><button class="button" onclick="wpThemesRequireGutenberg.installPlugin();" aria-label="<?php esc_attr_e( 'Install Gutenberg', 'blockbase' ); ?>"><?php esc_html_e( 'Install Gutenberg', 'blockbase' ); ?></button></p>
				</div>
				<div class="require-gutenberg require-gutenberg-activate">
					<p><?php esc_html_e( 'The Gutenberg plugin is installed but not activated. Click the button below to enable the plugin.', 'blockbase' ); ?></p>
					<p><button class="button" onclick="wpThemesRequireGutenberg.activatePlugin();"><?php esc_html_e( 'Activate Plugin.', 'blockbase' ); ?></button></p>
				</div>
				<div class="require-gutenberg require-gutenberg-success">
					<p><?php esc_html_e( 'Congratulations! All steps required were completed. Enjoy your Full Site Editing experience.', 'blockbase' ); ?></p>
				</div>
			</div>
			<?php
		}

		/**
		 * The frontend notice.
		 *
		 * @access public
		 *
		 * @return void
		 */
		public function frontend_notice() {
			$active_plugin = false;
			if ( $this->is_plugin_installed() && $this->is_plugin_active() ) {
				$active_plugin = true;
			}

			// Early exit if there's nothing to do.
			if ( $active_plugin ) {
				return;
			}

			if ( ! is_admin() ) {
				wp_die( 'This is an experimental theme and requires the Gutenberg plugin to be installed.' );
			}
		}

		/**
		 * Print styles for our notice.
		 *
		 * @access public
		 *
		 * @return void
		 */
		public function the_styles() {
			?>
			<style>
				.notice .require-gutenberg { position: relative; display: none; }
				.notice.active-step-install .require-gutenberg-install { display: block; }
				.notice.active-step-activate .require-gutenberg-activate { display: block; }
				.notice.active-step-success .require-gutenberg-success { display: block; }
				.notice .require-gutenberg:after { display: none; }
			</style>
			<?php
		}

		/**
		 * Print script for our notice.
		 *
		 * @access public
		 *
		 * @return void
		 */
		public function the_script() {
			?>
			<script>
			wpThemesRequireGutenberg = {

				/**
				 * Install Gutenberg.
				 */
				installPlugin: function() {

					// Tweak the button.
					jQuery( '.notice .require-gutenberg-install .button' )
						.html( '<?php esc_html_e( 'Installing Gutenberg...', 'textdomain' ); ?>' )
						.addClass( 'updating-message' )
						.attr( 'aria-label', '<?php esc_attr_e( 'Installing Gutenberg...', 'textdomain' ); ?>' );

					// Install the plugin.
					wp.updates.installPlugin( {
						slug: 'gutenberg',
						success: function() {

							// Remove the "install" step.
							jQuery( '.notice .require-gutenberg-install' ).remove();

							// Switch classes and move on to the next step.
							jQuery( '.require-gutenberg-notice-wrapper' )
								.removeClass( 'active-step-install' )
								.addClass( 'active-step-activate' );
						},
						error: function( e ) {

							// Remove previous errors.
							jQuery( '.require-gutenberg-install .error' ).remove();
							jQuery( '.require-gutenberg-install' )
								.append( '<div class="error"><p><?php esc_html_e( 'An error occured:', 'blockbase' ); ?></p><p>' + e.message + '</p><p><?php esc_html_e( 'Please check your browser console for more details', 'blockbase' ); ?></p></div>' );

							console.log( e );
						}
					} );
				},

				/**
				 * Activate the Gutenberg plugin.
				 */
				activatePlugin: function() {

					// AJAX request to activate the plugin.
					jQuery.get( ajaxurl, {
						action: 'wpthemes_require_gutenberg_activate_plugin',
						nonce: '<?php echo esc_html( wp_create_nonce( 'wpthemes_require_gutenberg' ) ); ?>'
					}, function( response ) {
						if ( 'success' === response ) {

							// Remove the activate step.
							jQuery( '.notice .require-gutenberg-activate' ).remove();

							// Continue to next step.
							jQuery( '.require-gutenberg-notice-wrapper' )
								.removeClass( 'active-step-activate' )
								.removeClass( 'notice-warning' )
								.addClass( 'notice-success' )
								.addClass( 'active-step-success' );
						} else {

							// There was an error.
							jQuery( '.require-gutenberg-activate' )
								.append( '<div class="error"><p><?php esc_html_e( 'An error occured', 'blockbase' ); ?>:</p><p><?php esc_html_e( 'Could not activate the plugin. Please go to the plugins page on your dashboard and manually activate the plugin.', 'blockbase' ); ?></p></div>' );
						}
					} );
				},
			}
			</script>
			<?php
		}

		/**
		 * Check if the plugin is installed.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @return bool
		 */
		public function is_plugin_installed() {
			$plugins = get_plugins();
			return isset( $plugins['gutenberg/gutenberg.php'] );
		}

		/**
		 * Check if the plugin is active.
		 *
		 * @access public
		 *
		 * @since 1.0.0
		 *
		 * @return bool
		 */
		public function is_plugin_active() {
			return defined( 'GUTENBERG_VERSION' ) || is_plugin_active( 'gutenberg/gutenberg.php' );
		}

		/**
		 * Activates the Gutenberg plugin.
		 *
		 * @access public
		 *
		 * @return void
		 */
		public function activate_plugin() {

			// Early exit if the user doesn't have the capability to activate plugins.
			if ( ! current_user_can( 'activate_plugins' ) ) {
				wp_die();
			}

			// Security check.
			check_ajax_referer( 'wpthemes_require_gutenberg', 'nonce' );

			// Activate plugin.
			$result = activate_plugin( 'gutenberg/gutenberg.php' );

			// Plugin was successfully activated. Exit with success message.
			if ( ! is_wp_error( $result ) ) {
				wp_die( 'success' );
			}

			// Something went wrong, exit with error message.
			wp_die( 'error' );
		}
	}
}

if ( ! function_exists( 'wpthemes_require_gutenberg_fse' ) ) {
	/**
	 * Load the Gutenberg requirement.
	 *
	 * @return void
	 */
	function wpthemes_require_gutenberg_fse() {

		// Instantiate the object.
		$init = new WPThemes_Require_Gutenberg();

		// Run our actions.
		$init->run();
	}
}

// Run Gutenberg requirement.
wpthemes_require_gutenberg_fse();
