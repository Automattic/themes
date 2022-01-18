<?php
/**
 * Twenty Twenty-Two (Mint) functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two_Mint
 * @since 1.0.0
 */

/**
 * Get font face styles.
 * Called by functions twentytwentytwo_styles() and twentytwentytwo_editor_styles().
 *
 * @return string
 */
function twentytwentytwo_get_font_face_styles() {

	return "
		/* latin-ext */
		@font-face {
		  font-family: 'Bodoni Moda';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/bodonimoda/v7/aFTB7PxzY382XsXX63LUYJSPUqb0pL6OQqxrZLnVbtxcXgOXEFZ8mYc.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'Bodoni Moda';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/bodonimoda/v7/aFTB7PxzY382XsXX63LUYJSPUqb0pL6OQqxrZLnVbtxSXgOXEFZ8.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'Bodoni Moda';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/bodonimoda/v7/aFTB7PxzY382XsXX63LUYJSPUqb0pL6OQqxrZLnVbtxcXgOXEFZ8mYc.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'Bodoni Moda';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/bodonimoda/v7/aFTB7PxzY382XsXX63LUYJSPUqb0pL6OQqxrZLnVbtxSXgOXEFZ8.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'Bodoni Moda';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/bodonimoda/v7/aFTH7PxzY382XsXX63LUYL6GYFcan6NJrKp-VPj1JuxQVAS1EmZ9.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'Bodoni Moda';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/bodonimoda/v7/aFTH7PxzY382XsXX63LUYL6GYFcan6NJrKp-VPj1KOxQVAS1Eg.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'Bodoni Moda';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/bodonimoda/v7/aFTH7PxzY382XsXX63LUYL6GYFcan6NJrKp-VPj1JuxQVAS1EmZ9.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'Bodoni Moda';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/bodonimoda/v7/aFTH7PxzY382XsXX63LUYL6GYFcan6NJrKp-VPj1KOxQVAS1Eg.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
	";

}