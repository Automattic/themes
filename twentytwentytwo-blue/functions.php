<?php
/**
 * Twenty Twenty-Two (Blue) functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two_Blue
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
		/* latin */

		@font-face {
		  font-family: 'DM Sans';
		  font-style: normal;
		  font-weight: 400;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Hp2ywxg089UriCZOIHTWEBlw.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		@font-face {
		  font-family: 'DM Sans';
		  font-style: italic;
		  font-weight: 400;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Fp2ywxg089UriCZa4Hz-DJF4e8A.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		@font-face {
		  font-family: 'DM Sans';
		  font-style: normal;
		  font-weight: 700;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Cp2ywxg089UriASitCBimC3YU-Ck.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		@font-face {
		  font-family: 'DM Sans';
		  font-style: italic;
		  font-weight: 700;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Ap2ywxg089UriCZawpBqWCXwT2iv06A.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* latin-ext */

		@font-face {
		  font-family: 'DM Sans';
		  font-style: normal;
		  font-weight: 400;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Hp2ywxg089UriCZ2IHTWEBlwu8Q.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		@font-face {
		  font-family: 'DM Sans';
		  font-style: italic;
		  font-weight: 400;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Fp2ywxg089UriCZa4ET-DJF4e8BH9.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		@font-face {
		  font-family: 'DM Sans';
		  font-style: normal;
		  font-weight: 700;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Cp2ywxg089UriASitCBamC3YU-CnE6Q.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		@font-face {
		  font-family: 'DM Sans';
		  font-style: italic;
		  font-weight: 700;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Ap2ywxg089UriCZawpBqWB3wT2iv06JOy.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
	";

}