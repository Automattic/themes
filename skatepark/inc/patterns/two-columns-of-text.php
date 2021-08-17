<?php
/**
 * Two columns of text.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Two columns of text', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"","style":{"spacing":{"padding":{"right":"5em"}}}} -->
	<div class="wp-block-column" style="padding-right:5em"><!-- wp:paragraph {"fontSize":"medium"} -->
	<p class="has-medium-font-size">' . esc_html__( 'Steph Harper. Buddy Sellers. Mehmet Farrow. Bob Lopez. Tammy Habich. Tye Barclay. Kaden Price. Lily Rivera. Chris Wright. Sammy Sanchez.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"550px"} -->
	<div class="wp-block-column" style="flex-basis:550px"><!-- wp:paragraph {"className":"is-style-indented-paragraph"} -->
	<p class="is-style-indented-paragraph">' . esc_html__( 'Skateboarding can teach people discipline, patience, and resiliency. It’s a great sport for kids with a lot of energy! We’ll help build up some structure and support in your life, all while you meet new people and have a ton of fun learning how to skateboard.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Skateboarding is a social sport! Come hang out and meet some new friends to cheer you on while you skate. We have a strict no-bullying policy and maintain a supportive environment for all camp attendees.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Work 1:1 with our team of coaches to learn how to skate. They’ll be your mentors and guides while you’re at camp. Plus, many of our older campers will mentor the younger skaters.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
