<?php
/**
 * Testimonial.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Testimonial', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
    <div class="wp-block-group alignwide" style="padding-top:80px;padding-bottom:80px"><!-- wp:quote {"className":"is-style-testimonial-quote"} -->
    <blockquote class="wp-block-quote is-style-testimonial-quote">
    <p>' . esc_html__( 'I learned how to do a kick flip and made a bunch of new friends. Can’t wait to go back!', 'skatepark' ) . '</p>
    <cite>' . esc_html__( 'Jane Doe', 'skatepark' ) . '</cite></blockquote>
    <!-- /wp:quote --></div>
    <!-- /wp:group -->',
);