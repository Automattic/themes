<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package karuna
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function karuna_woocommerce_setup() {
	add_theme_support( 'woocommerce', apply_filters( 'karuna_woocommerce_args', array(
		'single_image_width'    => 685,
		'thumbnail_image_width' => 350,
		'product_grid'          => array(
			'default_columns' => 2,
			'default_rows'    => 6,
			'min_columns'     => 1,
			'max_columns'     => 6,
			'min_rows'        => 1
		)
	) ) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'karuna_woocommerce_setup' );

/**
 * Define image sizes
 *
 * @link https://docs.woocommerce.com/document/set-woocommerce-image-dimensions-upon-theme-activation/
 *
 * @return void
 */
function karuna_woocommerce_image_dimensions() {
	global $pagenow;

	if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
		return;
	}

	$catalog = array(
		'width'  => '692',
		'height' => '692',
		'crop'	 => 1,
	);

	$single = array(
		'width'  => '692',
		'height' => '692',
		'crop'   => 1,
	);

	$thumbnail = array(
		'width'  => '154',
		'height' => '154',
		'crop'   => 0,
	);

	update_option( 'shop_catalog_image_size', $catalog );
	update_option( 'shop_single_image_size', $single );
	update_option( 'shop_thumbnail_image_size', $thumbnail );
}
add_action( 'after_switch_theme', 'karuna_woocommerce_image_dimensions', 1 );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function karuna_woocommerce_scripts() {
	wp_enqueue_style( 'karuna-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );
	wp_style_add_data( 'karuna-woocommerce-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'karuna_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function karuna_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'karuna_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function karuna_woocommerce_products_per_page() {
	return 12;
}

// Legacy WooCommerce products per page filter.
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.3', '<' ) ) {
	add_filter( 'loop_shop_per_page', 'karuna_woocommerce_products_per_page' );
}

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function karuna_woocommerce_thumbnail_columns() {
	return 4;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'karuna_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function karuna_woocommerce_loop_columns() {
	return 2;
}

// Legacy WooCommerce columns filter.
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.3', '<' ) ) {
	add_filter( 'loop_shop_columns', 'karuna_woocommerce_loop_columns' );
}

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function karuna_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 2,
		'columns'        => 2,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'karuna_woocommerce_related_products_args' );

if ( ! function_exists( 'karuna_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function karuna_woocommerce_product_columns_wrapper() {
		$columns = karuna_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}
add_action( 'woocommerce_before_shop_loop', 'karuna_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'karuna_loop_columns' ) ) {
	/**
	 * Default loop columns on product archives
	 *
	 * @return integer products per row
	 */
	function karuna_loop_columns() {
		$columns = 2; // 2 products per row
		if ( function_exists( 'wc_get_default_products_per_row' ) ) {
			$columns = wc_get_default_products_per_row();
		}
		return apply_filters( 'karuna_loop_columns', $columns );
	}
}

if ( ! function_exists( 'karuna_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function karuna_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop', 'karuna_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'karuna_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function karuna_woocommerce_wrapper_before() {
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'karuna_woocommerce_wrapper_before' );

if ( ! function_exists( 'karuna_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function karuna_woocommerce_wrapper_after() {
		?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'karuna_woocommerce_wrapper_after' );

function karuna_woocommerce_image_wrapper_open() {
	echo '<div class="woocommerce-image-wrapper">';
}

function karuna_woocommerce_image_wrapper_closed() {
	echo '</div>';
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 1 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_rating', 2 );
add_action( 'woocommerce_before_single_product_summary', 'karuna_woocommerce_image_wrapper_open', 5 );
add_action( 'woocommerce_before_single_product_summary', 'karuna_woocommerce_image_wrapper_closed', 25 );

if ( ! function_exists( 'karuna_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function karuna_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		karuna_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'karuna_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'karuna_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function karuna_woocommerce_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'karuna' ); ?>">
				<?php /* translators: number of items in the mini cart. */ ?>
				<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'karuna' ), WC()->cart->get_cart_contents_count() ) );?></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'karuna_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function karuna_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php karuna_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
					$instance = array(
						'title' => '',
					);

					the_widget( 'WC_Widget_Cart', $instance );
				?>
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
function karuna_woocommerce_is_shop_page() {
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

/**
 * Jetpack infinite scroll duplicates posts where orderby is anything other than modified or date
 * This filter offsets the products returned by however many are displayed per page
 *
 * @link https://github.com/Automattic/jetpack/issues/1135
 * @param  array $args infinite scroll args.
 * @return array       infinite scroll args.
 */
function karuna_woocommerce_jetpack_duplicate_products( $args ) {
	if ( ( isset( $args['post_type'] ) && 'product' === $args['post_type'] ) || ( isset( $args['taxonomy'] ) && 'product_cat' === $args['taxonomy'] ) ) {
		$args['offset'] = $args['posts_per_page'] * $args['paged'];
	}

 	return $args;
}
add_filter( 'infinite_scroll_query_args', 'karuna_woocommerce_jetpack_duplicate_products', 100 );

/**
 * Override number of products per page in Jetpack infinite scroll.
 *
 * @param  array $args infinite scroll args.
 * @return array       infinite scroll args.
 */
function karuna_woocommerce_jetpack_products_per_page( $args ) {
	if ( is_array( $args ) && ( karuna_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		 $args['posts_per_page'] = karuna_woocommerce_products_per_page();
	}

	return $args;
}
add_filter( 'infinite_scroll_settings', 'karuna_woocommerce_jetpack_products_per_page' );
