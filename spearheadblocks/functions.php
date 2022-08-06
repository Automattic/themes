<?php

/**
* Enqueue Spearhead Blocks additional Styles
*/

add_action( 'wp_enqueue_scripts', 'enqueue_spearheadb_styles', 1 );

function enqueue_spearheadb_styles() {
   wp_enqueue_style( 'spearheadb-style', get_stylesheet_uri() );
}


function spearhead_the_excerpt( $excerpt ) {

	$audio_block = '';
	if ( has_block( 'audio' ) ) {
		$post   = get_post();
		$blocks = parse_blocks( $post->post_content );
		foreach ( $blocks as $block ) {
			if ( 'core/audio' === $block['blockName'] ) {
				$audio_block .= '<div class="excerpt-audio-block">' . wp_kses_post( $block['innerHTML'] ) . '</div>';
				break;
			}
		}
	}

	// For cases where the post excerpt is empty
	// (but the post might have content)
	if ( 0 === strlen( $excerpt ) ) {
		return $excerpt . $audio_block;
	}

	return $excerpt . $audio_block;
}

// Filter the excerpt
add_filter( 'get_the_excerpt', 'spearhead_the_excerpt' );

