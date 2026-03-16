<?php

require get_template_directory() . '/theme-wizard/tgm/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function internet_service_provider_pro_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Internet Service Provider Pro Posttype', 'internet-service-provider-pro' ),
			'slug'             => 'internet-service-provider-pro-posttype',
			'source'           => get_template_directory() .'/inc/plugins/internet-service-provider-pro-posttype.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Contact Form 7', 'internet-service-provider-pro' ),
			'slug'             => 'contact-form-7',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Font Awesome', 'internet-service-provider-pro' ),
			'slug'             => 'font-awesome',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'internet-service-provider-pro' ),
			'slug'             => 'ibtana-visual-editor',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'VW Title Banner Image', 'internet-service-provider-pro' ),
			'slug'             => 'vw-title-banner-image',
			'source'           => get_template_directory() .'/inc/plugins/vw-title-banner-image.zip',
			'required'         => true,
			'force_activation' => false,
		),
	);
	$internet_service_provider_pro_config = array();
	tgmpa( $plugins, $internet_service_provider_pro_config );
}
add_action( 'tgmpa_register', 'internet_service_provider_pro_register_recommended_plugins' );