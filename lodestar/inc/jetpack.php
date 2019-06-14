<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Lodestar
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function lodestar_jetpack_setup() {

	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'lodestar_infinite_scroll_render',
		'footer'    => 'page',
		'wrapper'   => false,
		'footer_widgets' => array( 'sidebar-2', 'sidebar-3', 'sidebar-4' ),
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu', 'svg' );

	// Add theme support for testimonials
	add_theme_support( 'jetpack-testimonial' );

	/*
	 * Adding theme support for Jetpack Portfolio CPT.
	 * Not essential to add this but this does a few nice things.
	 * 1. Turns the CPT on when the theme is activated.
	 * 2. Displays an admin notice if the option is turned off, but the theme is activated.
	 * 3. When the theme is switched away, if no CPTs are populated, it turns it back off.
	 */
	add_theme_support( 'jetpack-portfolio', array(
		'title'          => true,
		'content'        => true,
		'featured-image' => true,
	) );

	//Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'blog-display' => 'content',
		'author-bio'   => true,
		'post-details' => array(
			'stylesheet' => 'lodestar-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive' => true,
			'post'    => true,
			'page'    => true,
    	),
	) );
}
add_action( 'after_setup_theme', 'lodestar_jetpack_setup' );

/**
 * Show/Hide Featured Image outside of the loop.
 */
function lodestar_jetpack_featured_image_display() {
    if ( ! function_exists( 'jetpack_featured_images_remove_post_thumbnail' ) ) {
        return true;
    } else {
        $options         = get_theme_support( 'jetpack-content-options' );
        $featured_images = ( ! empty( $options[0]['featured-images'] ) ) ? $options[0]['featured-images'] : null;

        $settings = array(
            'post-default' => ( isset( $featured_images['post-default'] ) && false === $featured_images['post-default'] ) ? '' : 1,
            'page-default' => ( isset( $featured_images['page-default'] ) && false === $featured_images['page-default'] ) ? '' : 1,
        );

        $settings = array_merge( $settings, array(
            'post-option'  => get_option( 'jetpack_content_featured_images_post', $settings['post-default'] ),
            'page-option'  => get_option( 'jetpack_content_featured_images_page', $settings['page-default'] ),
        ) );

        if ( ( ! $settings['post-option'] && is_single() )
            || ( ! $settings['page-option'] && is_singular() && is_page() ) ) {
            return false;
        } else {
            return true;
        }
    }
}

/**
 * Custom render function for Infinite Scroll.
 */
function lodestar_infinite_scroll_render() {

	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		lodestar_woocommerce_product_columns_wrapper();
		woocommerce_product_loop_start();
	}

	while ( have_posts() ) {
		the_post();
		if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
			wc_get_template_part( 'content', 'product' );
		} else if ( is_search() ) {
			get_template_part( 'components/post/content', 'search' );
		} else if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-tag' ) || is_tax( 'jetpack-portfolio-type' ) ) {
			get_template_part( 'components/features/portfolio/content', 'portfolio' );
		} else if ( is_post_type_archive( 'jetpack-testimonial' ) ) {
			get_template_part( 'components/features/testimonials/content', 'testimonials' );
		} else {
			get_template_part( 'components/post/content', get_post_format() );
		}
	}

	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		woocommerce_product_loop_end();
		lodestar_woocommerce_product_columns_wrapper_close();
	}

}

/**
 * Return early if Social Menu is not available
 */
function lodestar_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
* Return early if Author Bio is not available.
*/
function lodestar_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		return;
	} else {
		jetpack_author_bio();
	}
}

/**
* Author Bio Avatar Size.
*/
function lodestar_author_bio_avatar_size() {
	return 100;
}
add_filter( 'jetpack_author_bio_avatar_size', 'lodestar_author_bio_avatar_size' );

/**
 * Portfolio Title.
 */
function lodestar_portfolio_title( $before = '', $after = '' ) {
	$jetpack_portfolio_title = get_option( 'jetpack_portfolio_title' );
	$title = '';

	if ( is_post_type_archive( 'jetpack-portfolio' ) ) {
		if ( isset( $jetpack_portfolio_title ) && '' != $jetpack_portfolio_title ) {
			$title = esc_html( $jetpack_portfolio_title );
		} else {
			$title = post_type_archive_title( '', false );
		}
	} elseif ( is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) {
		$title = single_term_title( '', false );
	}

	echo $before . $title . $after;
}

/**
 * Portfolio Content.
 */
function lodestar_portfolio_content( $before = '', $after = '' ) {
	$jetpack_portfolio_content = get_option( 'jetpack_portfolio_content' );

	if ( is_tax() && get_the_archive_description() ) {
		echo $before . get_the_archive_description() . $after;
	} else if ( isset( $jetpack_portfolio_content ) && '' != $jetpack_portfolio_content ) {
		$content = convert_chars( convert_smilies( wptexturize( wp_kses_post( $jetpack_portfolio_content ) ) ) );
		echo $before . $content . $after;
	}
}

/**
 * Porfolio Archive Navigation
 */
function lodestar_project_terms() {

	$terms = get_terms(
		'jetpack-portfolio-type',
		array(
			'number' => 20,
			'orderby' => 'count',
			'order' => 'DESC',
		)
	);

	// Highlight currently selected page.
	$class = 'current-type';

	// Get the term for the current page.
	$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

	// We're on a project category page, and not the main portfolio page, so reset the class.
	if ( $current_term ) {
		$class = '';
	}

	// Make sure the term exists and has some results.
	if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) : ?>
		<div class="project-terms">

			<span class="screen-reader-text">
				<?php esc_html_e( 'Types:', 'lodestar' ); ?>
			</span>

			<ul>
				<li><a class="<?php echo esc_attr( $class ); ?> types-all" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>"><?php esc_html_e( 'All', 'lodestar' ); ?></a></li>

				<?php
				foreach ( $terms as $t ) {
					$class = '';

					if ( $current_term && $current_term->term_id === (int) $t->term_id ) {
						$class = 'current-type';
					} ?>

					<li><a class="<?php echo esc_attr( $class ); ?>" data-get-typeid="gettypeid-<?php echo esc_attr( $t->term_id ); ?>" href="<?php echo esc_url( get_term_link( $t ) ); ?>"><?php echo esc_html( $t->name ); ?></a></li>
				<?php } ?>
			</ul>
		</div>
	<?php endif;
}

/**
 * Porfolio archive data attributes
 */

function lodestar_portfolio_data() {

	$terms = get_the_terms( get_the_ID(), 'jetpack-portfolio-type' );
	if ( empty( $terms) ) {
		return;
	}
	$typeid[] = '';
	foreach ( $terms as $term ) {
		$typeid[] = 'typeid-' . $term->term_id;
	}
	return implode( " ", $typeid );
}

