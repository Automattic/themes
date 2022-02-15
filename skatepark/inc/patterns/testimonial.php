<?php
/**
 * Testimonial.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Testimonial', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"3em","right":"2em"}}}} -->

    <div class="wp-block-column" style="padding-top:3em;padding-right:2em;flex-basis:25%"><!-- wp:separator {"className":"is-style-wide"} -->
    <hr class="wp-block-separator is-style-wide"/>
    <!-- /wp:separator -->

    <!-- wp:paragraph {"align":"right","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
    <p class="has-text-align-right" style="font-style:normal;font-weight:500">' . esc_html__( 'Jane Doe', 'skatepark' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.15"}},"fontSize":"calc( var(--wp--preset--font-size--x-large) * 1.34)"} -->
    <p style="font-size:calc( var(--wp--preset--font-size--x-large) * 1.34);font-style:normal;font-weight:600;line-height:1.15">' . esc_html__( 'I learned how to do a kick flip and made a bunch of new friends. Can’t wait to go back!', 'skatepark' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    
    ',
);
