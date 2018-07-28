<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package _s
 */

/**
 * WooCommerce setup function.
 *
 * See: https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 *
 * @return void
 */
function shoreditch_woocommerce_setup() {
	add_theme_support( 'woocommerce', apply_filters( 'shoreditch_woocommerce_args', array(
		'single_image_width'    => 580,
		'thumbnail_image_width' => 290,
		'product_grid'          => array(
			'default_columns' => 2,
			'default_rows'    => 3,
			'min_columns'     => 1,
			'max_columns'     => 5,
			'min_rows'        => 1
		)
	) ) );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'shoreditch_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets
 *
 * @return void
 */
function shoreditch_woocommerce_scripts() {
	wp_enqueue_style( 'shoreditch-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );
	wp_style_add_data( 'shoreditch-woocommerce-style', 'rtl', 'replace' );
}

add_action( 'wp_enqueue_scripts', 'shoreditch_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * See: https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag
 *
 * @param  array $classes css classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class
 */
function shoreditch_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}

add_filter( 'body_class', 'shoreditch_woocommerce_active_body_class' );

/**
 * Products per page
 *
 * @return integer number of products
 */
function shoreditch_woocommerce_products_per_page() {
	return absint( apply_filters( 'shoreditch_woocommerce_products_per_page', 6 ) );
}

// Legacy WooCommerce products per page filter.
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.3', '<' ) ) {
	add_filter( 'loop_shop_per_page', 'shoreditch_woocommerce_products_per_page' );
}

/**
 * Product gallery thumnbail columns
 *
 * @return integer number of columns
 */
function shoreditch_woocommerce_thumbnail_columns() {
	return absint( apply_filters( 'shoreditch_woocommerce_product_thumbnail_columns', 4 ) );
}

add_filter( 'woocommerce_product_thumbnails_columns', 'shoreditch_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives
 *
 * @return integer products per row
 */
function shoreditch_woocommerce_loop_columns() {
	return absint( apply_filters( 'shoreditch_woocommerce_loop_columns', 2 ) );
}

// Legacy WooCommerce columns filter.
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.3', '<' ) ) {
	add_filter( 'loop_shop_columns', 'shoreditch_woocommerce_loop_columns' );
}

/**
 * Related Products Args
 *
 * @param array $args related products args.
 * @return array $args related products args
 */
function shoreditch_woocommerce_related_products_args( $args ) {
	$args = apply_filters( 'shoreditch_woocommerce_related_products_args', array(
		'posts_per_page' => 2,
		'columns'        => 2,
	) );

	return $args;
}

add_filter( 'woocommerce_output_related_products_args', 'shoreditch_woocommerce_related_products_args' );

if ( ! function_exists( 'shoreditch_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper
	 *
	 * @return  void
	 */
	function shoreditch_woocommerce_product_columns_wrapper() {
		$columns = shoreditch_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}

add_action( 'woocommerce_before_shop_loop', 'shoreditch_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'shoreditch_loop_columns' ) ) {
	/**
	 * Default loop columns on product archives
	 *
	 * @return integer products per row
	 */
	function shoreditch_loop_columns() {
		$columns = 2; // 2 products per row
		if ( function_exists( 'wc_get_default_products_per_row' ) ) {
			$columns = wc_get_default_products_per_row();
		}
		return apply_filters( 'shoreditch_loop_columns', $columns );
	}
}

if ( ! function_exists( 'shoreditch_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close
	 *
	 * @return  void
	 */
	function shoreditch_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}

add_action( 'woocommerce_after_shop_loop', 'shoreditch_woocommerce_product_columns_wrapper_close', 40 );

if ( ! function_exists( 'shoreditch_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content
	 * Wraps all WooCommerce content in wrappers which match the theme markup
	 *
	 * @return void
	 */
	function shoreditch_woocommerce_wrapper_before() {
		?>
		<div class="site-content-wrapper">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<div class="hentry">
						<div class="hentry-wrapper">
		<?php
	}
}

add_action( 'woocommerce_before_main_content', 'shoreditch_woocommerce_wrapper_before' );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );

if ( ! function_exists( 'shoreditch_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @return void
	 */
	function shoreditch_woocommerce_wrapper_after() {
		?>
						</div><!-- .hentry-wrapper -->
					</div><!-- .hentry -->
				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>

		</div><!-- .site-content-wrapper -->
		<?php
	}
}

add_action( 'woocommerce_after_main_content', 'shoreditch_woocommerce_wrapper_after' );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'shoreditch_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments
	 * Ensure cart contents update when products are added to the cart via AJAX
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX
	 */
	function shoreditch_woocommerce_cart_link_fragment( $fragments ) {
		global $woocommerce;

		ob_start();
		shoreditch_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}

add_filter( 'woocommerce_add_to_cart_fragments', 'shoreditch_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'shoreditch_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link
	 * Displayed a link to the cart including the number of items present and the cart total
	 *
	 * @return void
	 */
	function shoreditch_woocommerce_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', '_s' ); ?>">
				<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), '_s' ), WC()->cart->get_cart_contents_count() ) );?></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'shoreditch_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart
	 *
	 * @return void
	 */
	function shoreditch_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php shoreditch_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</li>
		</ul>
		<?php
	}
}

/**
 * Workaround to prevent is_shop() from failing due to WordPress core issue
 *
 * @link https://core.trac.wordpress.org/ticket/21790
 * @param  array $args infinite scroll args.
 * @return array       infinite scroll args.
 */
function shoreditch_woocommerce_is_shop_page() {
	global $wp_query;

	$front_page_id        = get_option( 'page_on_front' );
	$current_page_id      = $wp_query->get( 'page_id' );
	$is_static_front_page = 'page' === get_option( 'show_on_front' );

	if ( $is_static_front_page && $front_page_id === $current_page_id  ) {
		$is_shop_page = ( $current_page_id === wc_get_page_id( 'shop' ) ) ? true : false;
	} else {
		$is_shop_page = is_shop();
	}

	return $is_shop_page;
}
