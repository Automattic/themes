<?php
/**
 * Columns in container.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Columns in container', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:spacer {"height":120} -->
	<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
    
    <!-- wp:group {"align":"wide","style":{"border":{"width":"3px","style":"solid"},"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}}},"borderColor":"primary","className":"columns-in-container"} -->
    <div class="wp-block-group alignwide columns-in-container has-border-color has-primary-border-color" style="border-style:solid;border-width:3px;padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"level":4} -->
    <h4>' . esc_html__( 'Learn to skate', 'skatepark' ) . '</h4>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"is-style-indented-paragraph"} -->
    <p class="is-style-indented-paragraph">' . esc_html__( 'Skatepark welcomes youth of all ages and experience levels. Whether you’ve never been on a board before, or you can already do tricks, there’s a place for you and something to learn.', 'skatepark' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"level":4} -->
    <h4>' . esc_html__( 'Make new friends', 'skatepark' ) . '</h4>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"is-style-indented-paragraph"} -->
    <p class="is-style-indented-paragraph">' . esc_html__( 'Skateboarding is a social sport! Come hang out and meet some new friends to cheer you on while you skate. We have a strict no-bullying policy and maintain a supportive environment.', 'skatepark' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:image {"align":"wide","id":26,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000","#B9FB9C"]}}} -->
    <figure class="wp-block-image alignwide size-large"><img src="https://skateparkdemo.files.wordpress.com/2021/08/693372530767c766f2db45bbfb132770-2048x1365-1.jpeg?w=1024" alt="Close-up of a person riding a skateboard, focusing on their feet and the board. One foot is on the board, while the other foot is up, in motion. A skatepark is blurred in the background." class="wp-image-26"/></figure>
    <!-- /wp:image -->

    <!-- wp:paragraph {"className":"is-style-indented-paragraph"} -->
    <p class="is-style-indented-paragraph">' . esc_html__( 'Skateboarding can teach people discipline, patience, and resiliency. It’s a great sport for kids with a lot of energy! We’ll help build up some structure and support in your life, all while you meet new people and have a ton of fun learning how to skateboard.', 'skatepark' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:spacer {"height":120} -->
	<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->',
);