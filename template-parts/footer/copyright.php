<?php

if ( get_theme_mod( 'internet_service_provider_pro_footer_copyright_section_bgcolor' ) ) {
	$section_backg = 'background-color:' . esc_attr( get_theme_mod( 'internet_service_provider_pro_footer_copyright_section_bgcolor' ) ) . ';';
} elseif ( get_theme_mod( 'internet_service_provider_pro_footer_copyright_section_bgimage' ) ) {
	$section_backg = 'background-image:url(\'' . esc_url( get_theme_mod( 'internet_service_provider_pro_footer_copyright_section_bgimage' ) ) . '\')';
} else {
	$section_backg = '';
}
$img_bg = get_theme_mod('internet_service_provider_pro_footer_copyright_image_bg');
?>

<div class="<?php echo esc_attr($img_bg); ?> copyright-outer" style="<?php echo esc_attr($section_backg); ?>">
    <div class="copyright">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <?php //if ( get_theme_mod('internet_service_provider_pro_footer_copyright_para') != ''): ?>

                    <p class="copyright-text text-center">Copyright 2025 -
                        <?php if( get_theme_mod( 'vw_furniture_pro_credit_link',true) != '') { ?>
                        <span class="credit_link"><?php echo esc_html( internet_service_provider_pro_credit_link() ); ?></span>
                        <?php echo get_theme_mod( 'internet_service_provider_pro_footer_copyright_para'); ?>
                    </p>
                    <?php } ?>
                </div>
            
            </div>
        </div>
    </div>
</div>