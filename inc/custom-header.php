<?php
/**
 * @package internet-service-provider-pro
 * Setup the WordPress core custom header feature.
 *
 * @uses internet_service_provider_pro_header_style()
*/
function internet_service_provider_pro_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'internet_service_provider_pro_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 99,
		'wp-head-callback'       => 'internet_service_provider_pro_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'internet_service_provider_pro_custom_header_setup' );
if ( ! function_exists( 'internet_service_provider_pro_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see internet_service_provider_pro_custom_header_setup().
 */
function internet_service_provider_pro_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() ) :
	?>
		#header{
			background: url(<?php echo esc_url(get_header_image()); ?>) no-repeat;
			background-position: center top;
			background-size: cover;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;