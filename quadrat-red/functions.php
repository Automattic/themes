<?php


if ( ! function_exists( 'quadrat_support' ) ) :
	function quadrat_support() {
		// Add support for starter content
		include get_stylesheet_directory() . '/inc/starter-content.php';
		add_theme_support(
			'starter-content',
			$quadrat_starter_content
		);
	}
	add_action( 'after_setup_theme', 'quadrat_support' );
endif;
