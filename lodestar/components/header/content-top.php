<?php
$lodestar_header_top_text_1 = get_theme_mod( 'lodestar_header_top_text_1' );
$lodestar_header_top_text_2 = get_theme_mod( 'lodestar_header_top_text_2' );

if ( ( ! empty( $lodestar_header_top_text_1 ) || ! empty( $lodestar_header_top_text_2 ) ) || is_customize_preview() ) : ?>
	<div class="site-top-content">
		<?php
			echo '<span class="site-top-content-1">' . wp_kses_post( $lodestar_header_top_text_1 ) . '</span>';
			if ( ! empty( $lodestar_header_top_text_2 ) || is_customize_preview() ) {
				echo '<span class="site-top-content-2">' . wp_kses_post( $lodestar_header_top_text_2 ) . '</span>';
			} ?>
	</div>
<?php endif; ?>
