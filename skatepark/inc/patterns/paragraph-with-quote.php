<?php
/**
 * Paragraph with quote.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Paragraph with quote', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:columns {"align":"wide","className":"paragraph-with-quote"} -->
	<div class="wp-block-columns alignwide paragraph-with-quote"><!-- wp:column {"width":"25%"} -->
	<div class="wp-block-column" style="flex-basis:25%"></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Why come to Skatepark?', 'skatepark' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Skateboarding can teach people discipline, patience, and resiliency. It’s a great sport for kids with a lot of energy! We’ll help build up some structure and support in your life, all while you meet new people and have a ton of fun learning how to skateboard.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Skateboarding is a social sport! Come hang out and meet some new friends to cheer you on while you skate. We have a strict no-bullying policy and maintain a supportive environment for all camp attendees. Plus, you’ll work 1:1 with our team of coaches to learn how to skate.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"25%"} -->
	<div class="wp-block-column" style="flex-basis:25%"><!-- wp:quote {"className":"is-style-side-quote"} -->
	<blockquote class="wp-block-quote is-style-side-quote"><p>' . esc_html__( 'I learned how to do a kick flip and made a bunch of new friends. Can’t wait to go back!', 'skatepark' ) . '</p><cite>' . esc_html__( '– Jane Doe, 11', 'skatepark' ) . '</cite></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);