<?php 
	get_header();
	echo do_blocks( file_get_contents( get_stylesheet_directory() . '/block-template-files/404.html' ) );
	get_footer();
 ?>