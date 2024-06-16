<?php
/**
 * Title: Biography
 * Slug: surrealist/text-biography
 * Categories: text, featured
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"5vw","right":"5vw"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:5vw;padding-bottom:var(--wp--preset--spacing--60);padding-left:5vw">
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><a href="#"><?php echo esc_html__( '&larr; Back', 'surrealist' ); ?></a></p>
	<!-- /wp:paragraph -->

	<!-- wp:image {"width":"220px","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image size-full is-resized is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/portrait_of_joan_miro_barcelona_1935_june_13.jpg" alt="" class="" style="width:220px"/>
		<figcaption class="wp-element-caption"><?php echo esc_html__( 'Photographed by Carl Van Vechten', 'surrealist' ); ?></figcaption>
	</figure>
	<!-- /wp:image -->

	<!-- wp:paragraph -->
	<p><?php echo wp_kses_post( __( '<strong>Joan Miró i Ferrà </strong> (20 April 1893 – 25 December 1983) was a Spanish painter, sculptor and ceramist born in Barcelona. Professionally, he was simply known as Joan Miró. A museum dedicated to his work, the Fundació Joan Miró, was established in his native city of Barcelona in 1975, and another, the Fundació Pilar i Joan Miró, was established in his adoptive city of Palma in 1981.', 'surrealist' ) ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php echo esc_html__( 'Earning international acclaim, his work has been interpreted as Surrealism but with a personal style, sometimes also veering into Fauvism and Expressionism. He was notable for his interest in the unconscious or the subconscious mind, reflected in his re-creation of the childlike. His difficult-to-classify works also had a manifestation of Catalan pride. In numerous interviews dating from the 1930s onwards, Miró expressed contempt for conventional painting methods as a way of supporting bourgeois society, and declared an "assassination of painting" in favour of upsetting the visual elements of established painting.', 'surrealist' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><?php echo wp_kses_post( __( 'Joan Miró. (2024, April 5). In <em>Wikipedia</em>.', 'surrealist' ) ); ?> <a href="https://en.wikipedia.org/wiki/Joan_Mir%C3%B3" rel="nofollow">https://en.wikipedia.org/wiki/Joan_Mir%C3%B3</a></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><a href="#"><?php echo esc_html__( '&larr; Back', 'surrealist' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
