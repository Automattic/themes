<?php 
if ( ! function_exists( 'sk8prk_register_block_patterns' ) ) :
	/**
	 * Sets up support for block patterns 
	 */
	function sk8prk_register_block_patterns() {
		/**
		 * Register Block Pattern Category.
		 */
		if ( function_exists( 'register_block_pattern_category' ) ) {

			register_block_pattern_category(
				'sk8prk',
				array( 'label' => __( 'Sk8prk', 'sk8prk' ) )
			);
		}

		/**
		 * Register Block Patterns.
		 */
		if ( function_exists( 'register_block_pattern' ) ) {

			register_block_pattern(
				'sk8prk/blog-post-pattern-1',
				array(
					'title'      => __( 'Left column image', 'sk8prk' ),
					'categories' => array( 'sk8prk' ),
					'content'    => '<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
					<div class="wp-block-column" style="flex-basis:25%"><!-- wp:separator {"color":"primary","className":"is-style-thick-separator"} -->
					<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-thick-separator"/>
					<!-- /wp:separator -->
					
					<!-- wp:image {"id":149,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="http://sk8rprk.local/wp-content/uploads/2020/11/83aed971345021f0f3c8fd41a2906d4e-819x1024.jpg" alt="" class="wp-image-149"/><figcaption>Learn the basics of skating along with a group of your peers.</figcaption></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->
					
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4} -->
					<h4>A HEADING</h4>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>Skate ipsum dolor sit amet, poseur nollie casper pop shove-it. Kickturn noseblunt slide tailslide lien air Bonite. Rocket air poseur snake shoveit Chico Brenes. Crooked grind locals casper slide bank. Disaster frigid air bail aerial. Hang ten smith grind tailslide sick.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p>Nose blunt masonite nosebone bluntslide. Poseur tic-tac coping feeble Neil Blender. Rail camel back kick-nose bone air. Saran Wrap skate or die handplant coping. 540 half-flip face plant ho-ho. Hang up cab flip stalefish.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p>Vert quarter pipe tailslide grab. Nose slide Bam Margera rocket air axle set disaster. Fast plant crail grab Japan air chicken wing Bullet 66. Hurricane coping masonite crail grab Brooklyn Banks. Death box salad grind concave cess slide.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
				)
			);

			register_block_pattern(
				'sk8prk/blog-post-pattern-2',
				array(
					'title'      => __( 'Testimonial and image', 'sk8prk' ),
					'categories' => array( 'sk8prk' ),
					'content'    => '
					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
					<div class="wp-block-column" style="flex-basis:25%"><!-- wp:separator {"color":"primary","className":"is-style-thick-separator"} -->
					<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-thick-separator"/>
					<!-- /wp:separator -->
					
					<!-- wp:paragraph {"align":"right"} -->
					<p class="has-text-align-right">Jane Doe</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"large","style":{"typography":{"lineHeight":"1"}}} -->
					<p class="has-large-font-size" style="line-height:1"><strong>Add a testimonial from someone who loves what you do.</strong></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					
					<!-- wp:image {"align":"wide","id":164,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image alignwide size-large"><img src="http://sk8rprk.local/wp-content/uploads/2020/11/8045e70b649d5576b1c2011c3f77b97e-1024x683.jpg" alt="" class="wp-image-164"/></figure>
					<!-- /wp:image -->',
				)
			);

			register_block_pattern(
				'sk8prk/blog-post-pattern-3',
				array(
					'title'      => __( 'Two columns and gallery', 'sk8prk' ),
					'categories' => array( 'sk8prk' ),
					'content'    => '<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"></div>
					<!-- /wp:column -->
					
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4} -->
					<h4>ANOTHER HEADING</h4>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>Add your company history here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet eros eget justo elementum interdum. Cras vestibulum nulla id aliquam rutrum. Vestibulum aliquet mauris ut augue ultrices facilisis. Vestibulum pretium ligula sed ipsum dapibus, tempus iaculis felis ornare. Morbi pretium sed est tincidunt hendrerit. Curabitur id elit scelerisque, pharetra tellus sit amet.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p>Aliquam consectetur tristique metus non pulvinar. Donec luctus magna quis justo tincidunt, eu euismod lacus faucibus. Cras eros risus, venenatis ut ante eu.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:separator {"className":"is-style-thick-separator"} -->
					<hr class="wp-block-separator is-style-thick-separator"/>
					<!-- /wp:separator -->
					
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"28px","lineHeight":1.4}}} -->
					<p style="font-size:28px;line-height:1.4">A quote that is aligned right next to some normal paragraphs and headings</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p>– Jane Doe</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					
					<!-- wp:gallery {"ids":[166,167,168,169],"columns":4,"linkTo":"none","align":"full"} -->
					<figure class="wp-block-gallery alignfull columns-4 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="http://sk8rprk.local/wp-content/uploads/2020/11/3c598f80ce1664b8f669fb521fdda9dd-683x1024.jpg" alt="" data-id="166" data-link="http://sk8rprk.local/5-simple-skateboarding-tricks/3c598f80ce1664b8f669fb521fdda9dd/" class="wp-image-166"/></figure></li><li class="blocks-gallery-item"><figure><img src="http://sk8rprk.local/wp-content/uploads/2020/11/518f4af2b79d74510dc63665d2cec67e-576x1024.jpg" alt="" data-id="167" data-link="http://sk8rprk.local/5-simple-skateboarding-tricks/518f4af2b79d74510dc63665d2cec67e/" class="wp-image-167"/></figure></li><li class="blocks-gallery-item"><figure><img src="http://sk8rprk.local/wp-content/uploads/2020/11/cb9f8776e749a062b7beb21a65e1e196-819x1024.jpg" alt="" data-id="168" data-link="http://sk8rprk.local/5-simple-skateboarding-tricks/cb9f8776e749a062b7beb21a65e1e196/" class="wp-image-168"/></figure></li><li class="blocks-gallery-item"><figure><img src="http://sk8rprk.local/wp-content/uploads/2020/11/1a7c360b434981af2d748948f1602d64-1024x683.jpg" alt="" data-id="169" data-full-url="http://sk8rprk.local/wp-content/uploads/2020/11/1a7c360b434981af2d748948f1602d64-scaled.jpg" data-link="http://sk8rprk.local/5-simple-skateboarding-tricks/1a7c360b434981af2d748948f1602d64/" class="wp-image-169"/></figure></li></ul></figure>
					<!-- /wp:gallery -->
					
					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"></div>
					<!-- /wp:column -->
					
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
					<p>Nose blunt masonite nosebone bluntslide. Poseur tic-tac coping feeble Neil Blender. Rail camel back kick-nose bone air. Saran Wrap skate or die handplant coping. 540 half-flip face plant ho-ho. Hang up cab flip stalefish Primo slide.<br>Vert quarter pipe tailslide grab. Nose slide Bam Margera rocket air axle set disaster. Fast plant crail grab Japan air chicken wing Bullet 66. Hurricane coping masonite crail grab Brooklyn Banks. Death box salad grind concave cess slide.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
				)
			);

			register_block_pattern(
				'sk8prk/three-testimonials',
				array(
					'title'      => __( 'Three Testimonials', 'sk8prk' ),
					'categories' => array( 'sk8prk' ),
					'content'    => '<!-- wp:separator {"align":"wide","className":"is-style-thick-separator"} -->
					<hr class="wp-block-separator alignwide is-style-thick-separator"/>
					<!-- /wp:separator -->
					
					<!-- wp:spacer {"height":25} -->
					<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading {"level":4} -->
					<h4>HEADING A</h4>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>Add more info about your service. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum nisi quis, condimentum nibh.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading {"level":4} -->
					<h4>HEADING B</h4>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>Add more info about your service. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum nisi quis, condimentum nibh.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading {"level":4} -->
					<h4>HEADING C</h4>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>Add more info about your service. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum nisi quis, condimentum nibh.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					
					<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:separator {"className":"is-style-thick-separator"} -->
					<hr class="wp-block-separator is-style-thick-separator"/>
					<!-- /wp:separator --></div>
					<!-- /wp:column -->
					
					<!-- wp:column {"width":"66.66%"} -->
					<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"36px"}}} -->
					<p style="font-size:36px"><strong>Add a testimonial from someone who loves what you do.</strong></p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p>Jane Doe</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
				)
			);
		}
	}
endif;
add_action( 'after_setup_theme', 'sk8prk_register_block_patterns', 12 ); ?>
