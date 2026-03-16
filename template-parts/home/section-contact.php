<?php
/**
 * Template part for displaying Contact Us
 *
 * @package internet-service-provider-pro
 */

$section_hide = get_theme_mod( 'internet_service_provider_pro_contact_us_enable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('internet_service_provider_pro_contact_us_bgcolor','') ) {
 $about_back = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_contact_us_bgcolor','')).';';
}elseif( get_theme_mod('internet_service_provider_pro_contact_us_bgimage','') ){
 $about_back = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_contact_us_bgimage')).'\')';
}else{
 $about_back='';
}
$img_bg = get_theme_mod('internet_service_provider_pro_contact_us_bgimage_setting');

$img_svg = file_get_contents(get_template_directory_uri().'/assets/images/contact/contact-bg-svg.svg');

?>
<section id="contact-us" style="<?php echo esc_attr( $about_back ); ?>"  class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="contac_form">
                <?php if(get_theme_mod('internet_service_provider_pro_contact_us_sub_heading')!=''){ ?>
                     <p class="main-sub-head text-center mb-2"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_contact_us_sub_heading')); ?></p>
                <?php } ?>
                <div class="d-flex gap-2 justify-content-center align-items-center">
                    <div class="head-box"></div>
                        <?php if(get_theme_mod('internet_service_provider_pro_contact_us_heading')!=''){ ?>
                        <h3 class="main-head text-center"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_contact_us_heading')); ?></h3>
                        <?php } ?>
                    <div class="head-box"></div>
                </div>
                <?php echo do_shortcode(get_theme_mod('internet_service_provider_pro_contact_us_section_shortcode')); ?>
            </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="position-relative contact-wrap" style="z-index:1;">
            <?php if ( get_theme_mod('internet_service_provider_pro_contact_us_img',true) != "" ) {?>
             <img class="contact-img" src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_contact_us_img')); ?>">
            <?php } ?>
            <?php echo $img_svg; ?>
          </div>
           
        </div>
    </div>
  </div>
</section>
