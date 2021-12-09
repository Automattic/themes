<?php
/**
 * Twenty Twenty-Two (Pink) functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two_Pink
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
		/* cyrillic-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmvIRce_fuJGl18QRY.woff2) format('woff2');
		  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmvIRccvfuJGl18QRY.woff2) format('woff2');
		  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmvIRcdffuJGl18QRY.woff2) format('woff2');
		  unicode-range: U+0370-03FF;
		}
		/* vietnamese */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmvIRceffuJGl18QRY.woff2) format('woff2');
		  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmvIRcePfuJGl18QRY.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmvIRcdvfuJGl18Q.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* cyrillic-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX-KVElMYYaJe8bpLHnCwDKhdTuGqZJW9XjDlN8.woff2) format('woff2');
		  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX-KVElMYYaJe8bpLHnCwDKhdTuE6ZJW9XjDlN8.woff2) format('woff2');
		  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX-KVElMYYaJe8bpLHnCwDKhdTuFKZJW9XjDlN8.woff2) format('woff2');
		  unicode-range: U+0370-03FF;
		}
		/* vietnamese */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX-KVElMYYaJe8bpLHnCwDKhdTuGKZJW9XjDlN8.woff2) format('woff2');
		  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX-KVElMYYaJe8bpLHnCwDKhdTuGaZJW9XjDlN8.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX-KVElMYYaJe8bpLHnCwDKhdTuF6ZJW9XjDg.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* cyrillic-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmrINce_fuJGl18QRY.woff2) format('woff2');
		  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmrINccvfuJGl18QRY.woff2) format('woff2');
		  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmrINcdffuJGl18QRY.woff2) format('woff2');
		  unicode-range: U+0370-03FF;
		}
		/* vietnamese */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmrINceffuJGl18QRY.woff2) format('woff2');
		  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmrINcePfuJGl18QRY.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX7KVElMYYaJe8bpLHnCwDKhdTmrINcdvfuJGl18Q.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* cyrillic-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjXr8AIxsdP3pBmtF8A.woff2) format('woff2');
		  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjXr8AIVsdP3pBmtF8A.woff2) format('woff2');
		  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjXr8AIJsdP3pBmtF8A.woff2) format('woff2');
		  unicode-range: U+0370-03FF;
		}
		/* vietnamese */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjXr8AI5sdP3pBmtF8A.woff2) format('woff2');
		  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjXr8AI9sdP3pBmtF8A.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 300;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjXr8AIFsdP3pBms.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* cyrillic-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYXgKVElMYYaJe8bpLHnCwDKhdzeFaxOedfTDw.woff2) format('woff2');
		  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYXgKVElMYYaJe8bpLHnCwDKhdXeFaxOedfTDw.woff2) format('woff2');
		  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYXgKVElMYYaJe8bpLHnCwDKhdLeFaxOedfTDw.woff2) format('woff2');
		  unicode-range: U+0370-03FF;
		}
		/* vietnamese */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYXgKVElMYYaJe8bpLHnCwDKhd7eFaxOedfTDw.woff2) format('woff2');
		  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYXgKVElMYYaJe8bpLHnCwDKhd_eFaxOedfTDw.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYXgKVElMYYaJe8bpLHnCwDKhdHeFaxOedc.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* cyrillic-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjWr7AIxsdP3pBmtF8A.woff2) format('woff2');
		  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjWr7AIVsdP3pBmtF8A.woff2) format('woff2');
		  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjWr7AIJsdP3pBmtF8A.woff2) format('woff2');
		  unicode-range: U+0370-03FF;
		}
		/* vietnamese */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjWr7AI5sdP3pBmtF8A.woff2) format('woff2');
		  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjWr7AI9sdP3pBmtF8A.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'IBM Plex Sans';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ibmplexsans/v9/zYX9KVElMYYaJe8bpLHnCwDKjWr7AIFsdP3pBms.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
	";

}