<?php
/**
 * Twenty Twenty-Two (Red) functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two_Yellow
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
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQCiAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQAyAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQCyAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+1F00-1FFF;
		}
		/* greek */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQBCAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+0370-03FF;
		}
		/* vietnamese */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQCCAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQCSAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQByAFKgIIAA==.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* cyrillic-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQCiAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQAyAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQCyAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+1F00-1FFF;
		}
		/* greek */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQBCAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+0370-03FF;
		}
		/* vietnamese */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQCCAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQCSAFKgIIADgB.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: italic;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg8KC0VCIEdhcmFtb25kEAIQByAFKgIIAA==.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* cyrillic-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAogBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAMgBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAsgBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+1F00-1FFF;
		}
		/* greek */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAQgBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+0370-03FF;
		}
		/* vietnamese */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAggBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAkgBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAcgBSoCCAA=.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* cyrillic-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAogBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAMgBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAsgBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+1F00-1FFF;
		}
		/* greek */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAQgBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+0370-03FF;
		}
		/* vietnamese */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAggBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAkgBSoCCAA4AQ==.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'EB Garamond';
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url(https://fonts.gstatic.com/s/ebgaramond/v19/~Cg0KC0VCIEdhcmFtb25kEAcgBSoCCAA=.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
	";

}