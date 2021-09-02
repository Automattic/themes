<?php
/**
 * Pre Footer.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Mixed Media in Container', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:spacer {"height":40} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","style":{"border":{"style":"solid"},"spacing":{"padding":{"top":"4%","right":"4%","bottom":"4%","left":"4%"}}},"className":"skatepark-mixed-media-in-container"} -->
	<div class="wp-block-group alignwide skatepark-mixed-media-in-container" style="border-style:solid;padding-top:4%;padding-right:4%;padding-bottom:4%;padding-left:4%"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3} -->
	<h3>' . esc_html__( 'Why Camp?', 'skatepark' ) . '</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p>' . esc_html__( 'Skateboarding can teach people discipline, patience, and resiliency. It’s a great sport for kids with a lot of energy! We’ll help build up some structure and support in your life, all while you meet new people and have a ton of fun learning how to skateboard. Just think of all the cool tricks you’ll learn!', 'skatepark' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":40} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:image {"sizeSlug":"large","style":{"color":{"duotone":["#000","#BFF5A5"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/images/skateboard-sideways.jpg" " alt="' . esc_attr__( 'A skateboard laying on its side on top of concrete.', 'skatepark' ) . '"/></figure>
	<!-- /wp:image -->

	<!-- wp:spacer {"height":40} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Discipline', 'skatepark' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Skateboarding can teach people discipline, patience, and resiliency. It’s a great sport for kids with a lot of energy! We’ll help build up some structure and support in your life, and you’ll have fun.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph --><!-- wp:spacer {"height":40} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":4} -->
	<h4>' . esc_html( 'Friendship', 'skatepark' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>' . esc_html( 'Skateboarding is a social sport! Come hang out and meet some new friends to cheer you on while you skate. We have a strict no-bullying policy and maintain a supportive environment.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
	<!-- /wp:separator --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":4} -->
	<h4>' . esc_html( 'Mentoring', 'skatepark' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>' . esc_html( 'Work 1:1 with our team of coaches to learn how to skate. They’ll be your mentors and guides while you’re at camp. Plus, many of our older campers will mentor the younger skaters.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
