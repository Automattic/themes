<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Dara
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function dara_woocommerce_setup() {
	add_theme_support( 'woocommerce', apply_filters( 'dara_woocommerce_args', array(
		'single_image_width'    => 624,
		'thumbnail_image_width' => 300,
		'product_grid'          => array(
			'default_columns' => 4,
			'default_rows'    => 3,
			'min_columns'     => 1,
			'max_columns'     => 6,
			'min_rows'        => 1
		)
	) ) );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'dara_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function dara_woocommerce_scripts() {
	wp_enqueue_style( 'dara-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );
	wp_style_add_data( 'dara-woocommerce-style', 'rtl', 'replace' );

	/* Load WooCommerce custom fonts. */
	$fonts_path  = WC()->plugin_url() . '/assets/fonts/';
	$fonts       = array( 'star', 'WooCommerce' );
	$inline_font = '';

	foreach ( $fonts as $font ) {
		$inline_font .= '@font-face {
				font-family: "' . $font . '";
				src: url("' . $fonts_path . $font . '.eot");
				src: url("' . $fonts_path . $font . '.eot?#iefix") format("embedded-opentype"),
					url("' . $fonts_path . $font . '.woff") format("woff"),
					url("' . $fonts_path . $font . '.ttf") format("truetype"),
					url("' . $fonts_path . $font . '.svg#' . $font . '") format("svg");
				font-weight: normal;
				font-style: normal;
			}';
	}

	wp_add_inline_style( 'dara-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'dara_woocommerce_scripts' );

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
function dara_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'dara_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function dara_woocommerce_products_per_page() {
	return 12;
}
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.3', '<' ) ) {
	add_filter( 'loop_shop_per_page', 'dara_woocommerce_products_per_page' );
}

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function dara_woocommerce_thumbnail_columns() {
	return absint( apply_filters( 'dara_woocommerce_product_thumbnail_columns', 4 ) );
}
add_filter( 'woocommerce_product_thumbnails_columns', 'dara_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function dara_woocommerce_loop_columns() {
	return absint( apply_filters( 'dara_woocommerce_loop_columns', 4 ) );
}

// Legacy WooCommerce columns filter.
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.3', '<' ) ) {
	add_filter( 'loop_shop_columns', 'dara_woocommerce_loop_columns' );
}

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function dara_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 4,
		'columns'        => 4,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'dara_woocommerce_related_products_args' );

if ( ! function_exists( 'dara_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function dara_woocommerce_product_columns_wrapper() {
		$columns = dara_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}
add_action( 'woocommerce_before_shop_loop', 'dara_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'dara_loop_columns' ) ) {
	/**
	 * Default loop columns on product archives
	 *
	 * @return integer products per row
	 */
	function dara_loop_columns() {
		$columns = 4; // 4 products per row
		if ( function_exists( 'wc_get_default_products_per_row' ) ) {
			$columns = wc_get_default_products_per_row();
		}
		return apply_filters( 'dara_loop_columns', $columns );
	}
}

if ( ! function_exists( 'dara_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function dara_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop', 'dara_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

/**
 * Remove WooCommerce sidebar.
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

if ( ! function_exists( 'dara_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function dara_woocommerce_wrapper_before() {
		$classes = array( 'content-wrapper' );

		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			$classes[] = 'full-width';
		}

		$classes = implode( ' ', $classes );
		?>
		<div class="<?php echo esc_attr( $classes ); ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'dara_woocommerce_wrapper_before' );

if ( ! function_exists( 'dara_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function dara_woocommerce_wrapper_after() {
		?>
				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar( 'shop' ); ?>
		</div><!-- .content-wrapper -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'dara_woocommerce_wrapper_after' );

if ( ! function_exists( 'dara_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function dara_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		dara_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'dara_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'dara_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function dara_woocommerce_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'dara' ); ?>">
				<?php /* translators: number of items in the mini cart. */ ?>
				<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'dara' ), WC()->cart->get_cart_contents_count() ) );?></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'dara_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function dara_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php dara_woocommerce_cart_link(); ?>
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
function dara_woocommerce_is_shop_page() {
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
