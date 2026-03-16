<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
do_action( 'woocommerce_cart_is_empty' );

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
<div class="container">
	<p class="return-to-shop">
    <div class="empty-cart-page text-center mx-3 my-5" id="empty-cart-page">
      <img class="cart-empty-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/empty-bag.svg" alt="Shopping Bag" />
      <h2 id="empty-cart-heading"><?php echo esc_html('ADD TO CART IS EMPTY','shoes-store-elementor-pro'); ?></h2>
      <p><?php echo esc_html('You Don\'t Have Any Products In TheAdd to cart Right Now. You Will Find A Lot Of Interesting Products In Out Online Store.','shoes-store-elementor-pro'); ?></p>
      <a class="button wc-backward<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" target="_blank">
  			<?php
  				/**
  				 * Filter "Return To Shop" text.
  				 *
  				 * @since 4.6.0
  				 * @param string $default_text Default text.
  				 */
  				echo esc_html( apply_filters( 'woocommerce_return_to_shop_text', __( 'Continue Shopping', 'woocommerce' ) ) );
  			?>
  		</a>
    </div>
	</p>
</div>
<?php endif; ?>
