/**
 * @author danielsmithmichigan
 * global wp
**/

var blankCanvasDisabledSiteHeaderCustomLogoNotification = ( function( wp ) {
	var notification_code = 'BLANK_CANVAS_DISABLED_SITE_HEADER_CUSTOM_LOGO_NOTIFICATION';
	var self = {};
	wp.customize.bind( 'ready', function() {
		self.maybeAddCustomLogoNotification = function() {
			// Exit if one of the controls doesn't exist just to be safe.
			var showSiteHeaderControl = wp.customize.control('show_site_header')
			var customLogoControl = wp.customize.control('custom_logo');
			if ( !showSiteHeaderControl || !customLogoControl ) {
				return;
			}

			// Check if the notification has already been added to the custom logo control
			var notification_is_present = false;
			var all_notifications = customLogoControl.notifications.get() || [];
			for (var i = 0; i < all_notifications.length; i++) {
				if( 'object' !== typeof all_notifications[i] ) continue;
				if( all_notifications[i].code === notification_code ) {
					notification_is_present = true;
					break;
				}
			}

			// The notification is necessary if show_site_header is not enabled, and a logo has been uploaded
			var notification_is_necessary = false === showSiteHeaderControl.setting.get() &&
				'' !== customLogoControl.setting.get();

			// Add or remove the notification
			if ( ! notification_is_present && notification_is_necessary ) {
				customLogoControl.notifications.add(
					notification_code,
					new wp.customize.Notification(
						notification_code,
						{
							message: disabled_site_header_custom_logo_notification_translations.custom_logo_notification_content,
							type: 'warning'
						}
					)
				)
			} else if ( notification_is_present && ! notification_is_necessary ) {
				customLogoControl.notifications.remove( notification_code );
			}
		};
		wp.customize('custom_logo', function(setting) {
			setting.bind(function(value) {
				self.maybeAddCustomLogoNotification();
			});
		});
		wp.customize('show_site_header', function(setting) {
			setting.bind(function(value) {
				self.maybeAddCustomLogoNotification();
			});
		}); 
		self.maybeAddCustomLogoNotification();
	});
	return self;
} )( wp );
