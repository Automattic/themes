<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress // TODO ???
 * @subpackage Twenty_Twenty_One // TODO ???
 * @since 1.0.0 // TODO ???
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'fewer',
		array( 'label' => esc_html__( 'Fewer', 'fewer' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Services Page.
	register_block_pattern(
		'fewer/services', array(
			'title'         => esc_html__( 'Services Page', 'fewer' ),
			'categories'    => array( 'fewer' ),
			'content'       => '<!-- wp:columns --><div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} --><div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-title /--></div><!-- /wp:column --><!-- wp:column {"width":"66.66%"} --><div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph --><p>' . esc_attr__( 'Use this space to say what makes your service special.', 'fewer' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:separator {"align":"full","className":"is-style-wide"} --><hr class="wp-block-separator alignfull is-style-wide"/><!-- /wp:separator --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} --><div class="wp-block-column" style="flex-basis:33.33%"></div><!-- /wp:column --><!-- wp:column {"width":"50%"} --><div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":3} --><h3>' . esc_attr__( 'Service A', 'fewer' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_attr__( 'Add more information about yourself and your services.', 'fewer' ) . '</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>' . esc_attr__( 'Service B', 'fewer' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_attr__( 'Add more information about yourself and your services.', 'fewer' ) . '</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Service C</h3><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_attr__( 'Add more information about yourself and your services.', 'fewer' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"16.7%"} --><div class="wp-block-column" style="flex-basis:16.7%"></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:separator {"align":"full","className":"is-style-wide"} --><hr class="wp-block-separator alignfull is-style-wide"/><!-- /wp:separator --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3>' . esc_attr__( 'Service A', 'fewer' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_attr__( 'Add more information about yourself and your services.', 'fewer' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3>' . esc_attr__( 'Service B', 'fewer' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_attr__( 'Add more information about yourself and your services.', 'fewer' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/services-cover-image.png","id":204,"dimRatio":0,"focalPoint":{"x":"0.50","y":"0.50"},"minHeight":640,"contentPosition":"center left","align":"full"} --><div class="wp-block-cover alignfull has-custom-content-position is-position-center-left" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/services-cover-image.png);min-height:640px;background-position:50% 50%"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","fontSize":"large"} --><p class="has-text-align-left has-large-font-size">' . esc_attr__( 'Want to work with us?', 'fewer' ) . '</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"black"} --><div class="wp-block-button"><a class="wp-block-button__link has-black-color has-background-background-color has-text-color has-background">' . esc_attr__( 'Get In Touch', 'fewer' ) . '</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div></div><!-- /wp:cover -->',
		)
	);

	// Team Page.
	register_block_pattern(
		'fewer/services', array(
			'title'         => esc_html__( 'Team Page', 'fewer' ),
			'categories'    => array( 'fewer' ),
			'content'       => '<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-title /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
			<p>' . esc_attr__( 'We are a small team of talented professionals with a wide range of skills and experience. We love what we do, and we do it with passion. We look forward to working with you.', 'fewer' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
			<hr class="wp-block-separator alignfull is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team1.png" alt="' . esc_attr( 'Photo of architect', 'fewer' )  . '"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3>Bente Jung</h3>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":5} -->
			<h5>' . esc_attr( 'Architect', 'fewer' ) . '</h5>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . esc_attr( 'A short bio with personal history, key achievements, or an interesting fact.', 'fewer' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="mail@example.com">mail@example.com</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team2.png" alt="' . esc_attr( 'Photo of architect', 'fewer' )  . '"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3>Aleksander Ateak</h3>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":5} -->
			<h5>' . esc_attr( 'Architect', 'fewer' ) . '</h5>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . esc_attr( 'A short bio with personal history, key achievements, or an interesting fact.', 'fewer' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a rel="noreferrer noopener" href="mail@example.com" data-type="URL" data-id="mail@example.com" target="_blank">mail@example.com</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team3.png" alt="' . esc_attr( 'Photo of architect', 'fewer' )  . '"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3>Celia Gunnar</h3>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":5} -->
			<h5>' . esc_attr( 'Architect', 'fewer' ) . '</h5>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . esc_attr( 'A short bio with personal history, key achievements, or an interesting fact.', 'fewer' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="mail@example.com">mail@example.com</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team4.png" alt="' . esc_attr( 'Photo of architect', 'fewer' )  . '"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3>Martin Dengwenyi</h3>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":5} -->
			<h5>' . esc_attr( 'Architect', 'fewer' ) . '</h5>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . esc_attr( 'A short bio with personal history, key achievements, or an interesting fact.', 'fewer' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="mail@example.com">mail@example.com</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
			<hr class="wp-block-separator alignfull is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:cover {"overlayColor":"background","contentPosition":"center left"} -->
			<div class="wp-block-cover has-background-background-color has-background-dim has-custom-content-position is-position-center-left"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","textColor":"black","fontSize":"large"} -->
			<p class="has-black-color has-text-color has-large-font-size">' . esc_attr__( 'Want to work with us?', 'fewer' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link">' . esc_attr__( 'Get in Touch', 'fewer' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph -->
			<p></p>
			<!-- /wp:paragraph --></div></div>
			<!-- /wp:cover -->',
		)
	);


	}
