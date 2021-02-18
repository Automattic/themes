<?php 
	get_header();
	echo do_blocks( file_get_contents( get_stylesheet_directory() . '/block-template-files/index.html' ) );
	get_footer();
 ?>