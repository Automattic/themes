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
			'content'       => '<!-- wp:columns --><div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} --><div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-title /--></div><!-- /wp:column --><!-- wp:column {"width":"66.66%"} --><div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph --><p>Use this space to say what makes your service special. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:separator {"align":"full","className":"is-style-wide"} --><hr class="wp-block-separator alignfull is-style-wide"/><!-- /wp:separator --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} --><div class="wp-block-column" style="flex-basis:33.33%"></div><!-- /wp:column --><!-- wp:column {"width":"50%"} --><div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":3} --><h3>Service A</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Add more information about yourself. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum nisi quis, condimentum nibh. Donec hendrerit dui ut nisi tempor scelerisque.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Service B</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Add more information about yourself. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum nisi quis, condimentum nibh. Donec hendrerit dui ut nisi tempor scelerisque.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Service C</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Add more information about yourself. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum nisi quis, condimentum nibh. Donec hendrerit dui ut nisi tempor scelerisque.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"16.7%"} --><div class="wp-block-column" style="flex-basis:16.7%"></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:separator {"align":"full","className":"is-style-wide"} --><hr class="wp-block-separator alignfull is-style-wide"/><!-- /wp:separator --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3>Service A</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Add more information about yourself. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum nisi quis, condimentum nibh. Donec hendrerit dui ut nisi tempor scelerisque.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3>Service B</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Add more information about yourself. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum nisi quis, condimentum nibh. Donec hendrerit dui ut nisi tempor scelerisque.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:cover {"url":"http://localhost:4759/wp-content/uploads/2020/11/Rectangle-17.png","id":204,"dimRatio":0,"focalPoint":{"x":"0.50","y":"0.50"},"minHeight":640,"contentPosition":"center left","align":"full"} --><div class="wp-block-cover alignfull has-custom-content-position is-position-center-left" style="background-image:url(http://localhost:4759/wp-content/uploads/2020/11/Rectangle-17.png);min-height:640px;background-position:50% 50%"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","fontSize":"large"} --><p class="has-text-align-left has-large-font-size">Want to work with us?</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"black"} --><div class="wp-block-button"><a class="wp-block-button__link has-black-color has-background-background-color has-text-color has-background">Get In Touch</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div></div><!-- /wp:cover -->',
		)
	);
}
