<?php

if ( class_exists( 'WP_Customize_Setting' ) && ! class_exists( 'WP_Customize_Global_Styles_Setting' ) ) {
	/**
	 * Customize API: WP_Customize_Global_Styles_Setting class
	 *
	 * This handles saving and retrieving of the value.
	 *
	 */

	/**
	 * Custom Setting to handle WP Global_Styles.
	 *
	 * @see WP_Customize_Setting
	 */
	final class WP_Customize_Global_Styles_Setting extends WP_Customize_Setting {

		/**
		 * The setting type.
		 *
		 * @var string
		 */
		public $type = 'global_styles';

		/**
		 * Setting Transport
		 *
		 * @var string
		 */
		public $transport = 'postMessage';

		/**
		 * User value
		 *
		 * @var string
		 */
		public $user_value = '';

		/**
		 * Fetch the value of the setting.
		 *
		 * @see WP_Customize_Setting::value()
		 *
		 * @return string
		 */
		public function value() {
			return $this->user_value;
		}

		/**
		 * Store the color in the Global Styles custom post
		 *
		 * @param string $color The input color.
		 * @return WP_Post|WP_Error The post or a WP_Error if the value could not be saved.
		 */
		public function update( $color ) {
			if ( empty( $color ) ) {
				return;
			}

			$this->new_value = $color;
		}
	}
}
