<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



get_header( 'shop' );
get_template_part( 'template-parts/banner' );

?>


<div class="shop">
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
	<div class="container">

		<div class="single-page-nav container">
			<?php /* the_post_navigation( array(
					'next_text' =>
						'<span class="screen-reader-text">' . __( 'Next post:', 'internet-service-provider-pro' ) . '</span> ' .
						'<span class="post-title">NEXT PRODUCT</span>' .'<span class="meta-nav" aria-hidden="true">' . __( '<i class="fas fa-long-arrow-alt-right"></i>', 'internet-service-provider-pro' ) . '</span> ',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="fas fa-long-arrow-alt-left"></i>', 'internet-service-provider-pro' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'internet-service-provider-pro' ) . '</span> ' .
						'<span class="post-title">BACK TO PRODUCTS</span>',
				) ); */?>
		</div>
	<div class="row">
		<div class="col-md-12">
			<div class="<?php echo esc_html($single_product_col1); ?>">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'single-product' ); ?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
</div>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
</div>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
